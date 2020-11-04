<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminsController extends Controller
{
    public function index(){
        $users = User::all()->where('role', 1);
        return view('admin.admins', ['users'=>$users]);
    }
}
