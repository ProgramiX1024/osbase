<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public static function CheckLoginCredentials(string $login, string $password) {
        $query = User::where('name','=',$login)->first();
        
        if(empty($query)) {
            return ['isok'=>false];
        } else {
            if(Hash::check($password, $query['password'])) {
                return ['isok'=>true,'username'=>$query['name']];
            } else {
                return ['isok'=>false];
            }
        }

    }
}
