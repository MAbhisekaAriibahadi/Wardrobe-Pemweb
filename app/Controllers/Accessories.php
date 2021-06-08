<?php

namespace App\Controllers;

use App\Models\Akun_model;

use App\Models\Accessories_model;

class Accessories extends BaseController
{
	public function index()
	{
		if(empty($this->session->get('id'))){
			return redirect()->to('/login');
		}
        $accessories= new Accessories_model();
        $data['Accessories']=$accessories->findall();
		return view('Accessories_view', $data);
	}

	public function use($id){
		if(empty($this->session->get('id'))){
			return redirect()->to('/login');
		}
		$accessories= new Accessories_model();
		$tes=$accessories->find($id);
		$data = [
			'aksesoris' => $tes['model']
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

		$this->session->remove('aksesoris');

		$data = [
			'aksesoris' => $this->session->get('aksesoris')
		];

		$akun=new Akun_model();
		$akun->update($this->session->get('id'), $data);
		return redirect()->to('/login/Dashboard');
	}
}
