<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
public function index($locale, Request $request){
    App()->setLocale($locale);
    return redirect('/');
}
}
