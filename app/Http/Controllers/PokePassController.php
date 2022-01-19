<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PokePassController extends Controller {

    public function reset_password(Request $request) {
            $i=0;
        
        $users = json_decode(file_get_contents('test.txt'), true);
        
        foreach ($users as $user=>$val) {
            $i++;
            if(in_array($request->email,$val))
            { 
                $users[$user]['password']=1234569;
                
            }
           
        
        }
        print_r($users);
        file_put_contents('test.txt', json_encode($users));
    

}
}

