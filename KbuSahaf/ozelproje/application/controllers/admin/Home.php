<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // login olup olmadığımızın kontrolü yapılıyor

                //$this->load->database();
                $this->load->helper('url');
                //$this->load->library('form_validation',"session");
                $this->load->library("session");
                //$this->load->model('Admin_Model');

                //oturum açma kontrolü
                if( !$this->session->userdata('oturum_data') ){
                	redirect(base_url().'admin/login');
                }

}
	public function index() // bu index fonksiyonu otomatikk olarak çalışır
	{
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_content');
		$this->load->view('admin/_footer');
		
	}
	public function Mesajlar(){

		//$this->load->view('welcome message');
		//$this->load->view('admin/login_formu');
		echo "mesajlar sayfası";
	}


	public function login(){

		//$this->load->view('welcome message');
		$this->load->view('admin/login_formu');
	}
}
