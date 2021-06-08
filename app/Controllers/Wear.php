<?php

namespace App\Controllers;

use App\Models\Wear_model;

use App\Models\Akun_model;


class Wear extends BaseController
{

	public function index()
	{
		if(empty($this->session->get('id'))){
			return redirect()->to('/login');
		}
			$wear= new Wear_model();
        	$data['wear']=$wear->findall();
			return view('Wear_View', $data);
	}

	public function use($id){

		if(empty($this->session->get('id'))){
			return redirect()->to('/login');
		}

		$wear= new Wear_model();
		$tes=$wear->find($id);
		$data = [
			'baju' => $tes['model']
		];

		$akun=new Akun_model();
		$akun->update($this->session->get('id'), $data);

		$this->session->set($data);
		return redirect()->to('/login/Dashboard');
	} 

	public function delete(){
		if(empty($this->session->get('id'))){
			return redirect()->to('/login');
		}

		$this->session->remove('baju');

		$data = [
			'baju' => $this->session->get('baju')
		];

		$akun=new Akun_model();
		$akun->update($this->session->get('id'), $data);
		return redirect()->to('/login/Dashboard');
	}
}
