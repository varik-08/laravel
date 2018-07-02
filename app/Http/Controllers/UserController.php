<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function id($digits = "Пользователь не зарегистрирован!")
    {
        return view('id', compact('digits'));
    }

    public function form1(){
        return view('form');
    }

    public function form2(){
        return view('form2');
    }
}
