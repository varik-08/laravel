<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function id($digits = null)
    {
        if($digits == null) return "Пользователь не зарегистрирован!";
        return $digits;
    }

    public function form(Request $request){
    //Извлекаем данные поля name
    $name = $request->name;
    echo 'форма принята: '.$name;
    }

}
