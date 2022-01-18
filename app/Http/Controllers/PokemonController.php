<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PokemonController extends Controller {

    public function authenticate(Request $request) {
        $i = 0;
        $users = $users = json_decode(file_get_contents('test.txt'), true);
        file_put_contents('test.txt', json_encode($users));
        foreach ($users as $user) {
            $email = $user['email'];
            $password = $user['password'];
            if($request->email == $email && $request->password == $password) {
               echo $request->email;
               echo '<br>';
                $i++;
            }
        }
        if ($i > 0) {
            echo 'email and password match found';
        } else {
            echo 'email or password is incorect';
        }
    }

}
