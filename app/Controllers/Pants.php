<?php

namespace App\Controllers;

use App\Models\Pants_model;

use App\Models\Akun_model;

class Pants extends BaseController
{
	public function index()
	{
		if(empty($this->session->get('id'))){
			return redirect()->to('/login');
		}
        $pants= new Pants_model();
        $data['pants']=$pants->findall();
		return view('Pants_view', $data);
	}

	public function use($id){
		if(empty($this->session->get('id'))){
			return redirect()->to('/login');
		}
		$pants= new Pants_model();
		$tes=$pants->find($id);
		$data = [
			'celana' => $tes['model']
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

		$this->session->remove('celana');

		$data = [
			'celana' => $this->session->get('celana')
		];

		$akun=new Akun_model();
		$akun->update($this->session->get('id'), $data);
		return redirect()->to('/login/Dashboard');
	}
}
