<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        echo Auth::user()->role;
//        die();

            return view('client.home');

    }
    public function blogAction(){
        $posts = Posts::paginate(20);
       return view('client.blog', ['posts'=>$posts]);
    }
}
