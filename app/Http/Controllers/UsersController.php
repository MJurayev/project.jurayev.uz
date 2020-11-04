<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(){
        $users = User::all()->where('role',0 )->sortBy('id');

        return view('admin.users',['users'=>$users] );
    }

    public function deleteById($id , Request $request){
        $stmt = User::find($id);
        $stmt->delete();

//        $stmt = DB::table('users')->delete($id);
        if($stmt){
                session()->flash('success', "Foydalanuvchi o'chirildi");
        }
        else{
            session()->flash('error',"Foydalanuvchi o'chirishda xatolik");
        }


        if($request->path() == '/admin/users')
        return redirect(route('AdminUsers'));
        if($request->path() == '/admin/admins');
        return redirect(route('AdminAdmins'));
    }

    public function editById($id){
        $user = User::find($id);
//       $user =  DB::table('users')->where('id', $id)->first();
       return view('admin.editProfile', ['user'=>$user]);
    }

    public function editedSaveById($id, Request $request){
        if($request->isMethod('post'))
            $result = User::where('id', $id)->update([
                'email'=>$request->post('email'),
                'role'=>$request->post('role'),
                'name'=>$request->post('name')
            ]);


        if($result){
            session()->flash('success', "Ma'lumotlar saqlandi");
        }
        else{
            session()->flash('error',"Ma'lumotlarni saqlashda xatolik");
        }

        if($request->path() == '/admin/users')
            return redirect(route('AdminUsers'));
        if($request->path() == '/admin/admins');
        return redirect(route('AdminAdmins'));
    }
}
