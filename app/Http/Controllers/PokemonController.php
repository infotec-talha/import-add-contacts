<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller {
    
      public function getLoginPage() {
        return view('actions.pokemon');
    }
    
     public function getIndexPage() {
        return view('actions.pokemon_index');
    }

    public function resetPasswordPage() {
        return view('actions.poke_pass_rest');
    }

    public function signUpPage() {
        return view('actions.signup-poke');
    }
    
     public function getCollectionPage() {
        return view('actions.pokeCollection');
    }
    

    public function authenticate(Request $request) {

        $users = json_decode(file_get_contents('test.txt'), true);
       
       
       
        if (array_key_exists($request->email, $users) && $users[$request->email] == $request->password) {
            echo 'email and password match found';
        } else {
            echo 'email or password is incorect';
        }
    }

    public function resetPassword(Request $request) {

        $users = json_decode(file_get_contents('test.txt'), true);
         
        if(array_key_exists($request->email, $users) && $users[$request->email] == $request->password) {
            if ($users[$request->email] == $request->newPassword) {
                echo 'new password must be diffrent then old passwaord';
            } else {
                $users[$request->email] = $request->newPassword;
                file_put_contents('test.txt', json_encode($users));
                echo 'password changed successfully.';
            }
        } else {
            echo 'email or password is incorrect';
        }
    }

    public function signUp(Request $request) {

        $users = json_decode(file_get_contents('test.txt'), true);
        
        if (array_key_exists($request->email, $users)) {

            echo 'Email already exist.';
        } else {
            if ($request->password !== $request->passwordRepeat) {
                echo 'password and repeat password values must be same';
            } else {
                $users[$request->email] = $request->password;
                
                file_put_contents('test.txt', json_encode($users));
                echo 'Successfully signed up.';
            }
        }
    }

}
