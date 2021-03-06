<?php

namespace App\Http\Controllers;
use Illuminate\Validation\ValidationException;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

   public function create(){

       return view('sessions.create');

   }

   public function store(){

       $attributes = request()->validate([
           'email' => 'required|email',
           'password' => 'required',
       ]);
       if(! auth()->attempt($attributes)){

           throw ValidationException::withMessages([
               'email' => 'Не удалось проверить предоставленные вами учетные данные.'
           ]);
       }
           session()->regenerate();
           return redirect('/')->with('success', 'Добро пожаловать на сайт');



   }


    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
