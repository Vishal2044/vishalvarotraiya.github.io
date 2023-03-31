<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function register(Request $request) {
        $request -> validate(
            [
                "uname" => 'required',
                "email" => 'required|email',
                "password" => 'required|confirmed',
                "password_confirmation" => 'required'
            ]
        );

        echo "<pre>";
            print_r($request -> all());
            $uname = $request -> input("uname");
            $email = $request -> input("email");
            $password = $request -> input("password");
            $password_confirmation = $request -> input("password_confirmation");

            echo "<br>";

            echo "Username: " . $uname . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Password: " . $password . "<br>";
            echo "Confirm Password: " . $password_confirmation . "<br>";

        echo "</pre>";
    }
}
