<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PokemonController extends Controller {

    public function authenticate(Request $request) {
        
          $users = json_decode(file_get_contents('test.txt'), true);
        $key= array_search($request->email, array_column($users,'email'));
        if((is_int($key) || is_string($key)) && $users[$key]['password']==$request->password) {
            echo 'email and password match found';
        } else {
            echo 'email or password is incorect';
        }
    }
    
    public function getLoginPage()
    {
        return view('actions.pokemon');
    }
    
    public function resetPasswordPage()
    {
        return view('actions.poke_pass_rest');
    }
    
     public function signUpPage()
    {
        return view('actions.signup-poke');
    }

}
