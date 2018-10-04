<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kullanicilar extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constuctor code
                $this->load->helper('url');
                $this->load->library('session'); //oturum kütüphanesi
                $this->load->database();//sayfada veritabanı erişimini sağlar
                $this->load->model('Database_Model');//Model çağırma


                //oturum açma kontrolü
                if(! $this->session->userdata('oturum_data')){
                	redirect(base_url().'admin/login');
                }
                

                

        }

	
	public function index() // bu index fonksiyonu otomatikk olarak çalışır

	{
		// $query = $this->db->query("select * from kullanicilar order by adsoy");
		// $data["veriler"]=$query->result();

		$query = $this->db->get("kullanicilar"); //ogrenciler tablosunu veritabanından çek
		$data["veri"]=$query->result(); // sorgu verilerini "veri" değişkenine yükle 

		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/kullanici_listesi',$data);
		$this->load->view('admin/_footer');
		
	}

	public function ekle(){
		
		$this->load->view('admin/kullanici_ekle');

	}

	public function eklekaydet(){

		$data = array(
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'sifre' => $this->input->post('sifre'),
		'yetki' => $this->input->post('yetki'),
		'durum' => $this->input->post('durum')
		);

		$this->Database_Model->insert_data("kullanicilar",$data); // ekle gönder. database modele dataları gönder
		$this->session->set_flashdata("sonuc","Kayıt ekleme işlemi başarıyla gerçekleştirildi !!");
		redirect(base_url()."admin/kullanicilar");

	}

	public function edit($id){
		$sorgu = $this->db->query("SELECT * FROM Kullanicilar WHERE Id = $id");
		$data["veri"] = $sorgu->result();

		$this->load->view('admin/kullanici_duzenle',$data);
	}

	public function guncellekaydet($id){

		$data = array(
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'sifre' => $this->input->post('sifre'),
		'yetki' => $this->input->post('yetki'),
		'durum' => $this->input->post('durum')
		);

		$this->Database_Model->update_data("kullanicilar",$data,$id); // update gönder. database modele dataları gönder
		$this->session->set_flashdata("sonuc","Kayıt güncelleme işlemi başarıyla gerçekleştirildi !!");
		redirect(base_url()."admin/kullanicilar");

	}

	function delete($id){
		
		$this->db->query("DELETE FROM Kullanicilar WHERE Id = $id");
		$this->session->set_flashdata("sonuc","Kayıt silme işlemi başarıyla gerçekleştirildi !!");
		redirect(base_url()."admin/kullanicilar");

	}

	public function goster($id){
		$sorgu = $this->db->query("SELECT * FROM Kullanicilar WHERE Id = $id");
		$data["veri"] = $sorgu->result();

		$this->load->view('admin/kullanici_goster',$data);
	}

	
}
?>