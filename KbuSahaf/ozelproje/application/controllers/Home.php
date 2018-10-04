<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constuctor code
                $this->load->helper('url');

        }

	
	public function index() // bu index fonksiyonu otomatikk olarak çalışır

	{
		$this->load->view('_header');
		$this->load->view('_slider');
		$this->load->view('_content');
		$this->load->view('_footer');
		
	}
}
