<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function add(Request $request){

        if($request->isMethod('POST')){
            $result =new Messages();
            $result->load($request->post('client_name','client_email', 'message_title', 'message_text'));
            $result->save();
            if($result){
                session()->flash('success', 'Xabar jo\'natildi');
                return "OK";
                return redirect('/');
            }else{

                session()->flash('error', 'Serverda xatolik yuz berdi!!!');
                return "err";
            }
        }

        return redirect('/');
    }
}
