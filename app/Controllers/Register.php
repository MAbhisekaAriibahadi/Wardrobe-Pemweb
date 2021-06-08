<?php

namespace App\Controllers;

use App\Models\akun_model;

class Register extends BaseController
{
	public function index()
	{
		return view('Register_View');
	}

    public function daftar(){

        $username=$_POST["username"];
        $password=$_POST["password"];
        $gender=$_POST["gender"];

        $data = [
            'username' => $username,
            'password'    => $password,
            'gender'    => $gender
        ];
        $register= new Akun_model();
        $register->insert($data);
        return view ('registerDone');
    }
}
