<?php

namespace App\Controllers;

use App\Models\Akun_model;

class Login extends BaseController
{
	public function index()
	{
		return view('Login_View');
	}

	public function Dashboard()
	{
		if(empty($this->session->get('id'))){
			return $this->index();
		}else
		return view('Dashboard_View');
	}

	public function loginUser(){
		$username=$_POST["username"];
        $password=$_POST["password"];

		$login= new Akun_model();
        $success=$login->where('username', $username)->where('password', $password)->find();
		$this->session->set($success[0]);
		 if(empty($this->session)){
		 	return $this->index();
		 }
		 else{
		 	return redirect()->to('/login/Dashboard');
		 }
			
	}

	public function logout(){
		$this->session->destroy();
		return redirect()->to('/login');
	}
}
