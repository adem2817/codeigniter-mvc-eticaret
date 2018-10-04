<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constuctor code
                $this->load->helper('url');
                $this->load->library('form_validation',"session");
                $this->load->library("session");
                $this->load->model("Admin_Model");
                $this->load->database();
        }

	
	public function index() // bu index fonksiyonu otomatikk olarak çalışır

	{
		$this->load->view('admin/login_formu');
	}

	public function login_ol()
		{
			$email = $this->input->post('email',TRUE);
			$sifre = $this->input->post('password',TRUE);

			$result = $this->Admin_Model->login($email,$sifre);
			
			if($result)
			{

				echo $email.$sifre;
			
			//Kullanici var ise bilgiler diziye aktarılır
			$oturum_dizi = array(
			'id' => $result[0]->id,
			'yetki' => $result[0]->yetki,
			'email' => $result[0]->email,
			'adsoy' => $result[0]->adsoy
			);
			//Dizi dataları Cİ kütüphanesinin değişkenlerine aktarılır
			$this->session->set_userdata('oturum_data',$oturum_dizi); //oturum dizideki çekilen bilgileri oturum_data adlı yeni dizimize kaydediyoruz.

			redirect(base_url().'/admin/home'); //oturum_data bilgilerini admin home a gönderiyoruz
			
		  }
			else{
				$this->session->set_flashdata("login_hata","Geçersiz email yada şifre");
				$this->load->view('admin/login_formu');

			}

		

		}

		public function log_out(){
			$this->session->unset_userdata('oturum_data');
			$this->session->sess_destroy();
			redirect(base_url().'/admin/login');


		}


		
	}




