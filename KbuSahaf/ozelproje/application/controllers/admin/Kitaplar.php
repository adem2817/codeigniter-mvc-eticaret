<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kitaplar extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constuctor code
                $this->load->library('session'); //oturum kütüphanesi
                $this->load->database();//sayfada veritabanı erişimini sağlar
                $this->load->model('Database_Model');//Model çağırma
                $this->load->helper(array('form','url'));
                $this->load->library("session");


                //oturum açma kontrolü
                if(! $this->session->userdata('oturum_data')){
                	redirect(base_url().'admin/login');
                }
                

                

        }

	
	public function index() // bu index fonksiyonu otomatikk olarak çalışır

	{
		// $query = $this->db->query("select * from kullanicilar order by adsoy");
		// $data["veriler"]=$query->result();

		$query = $this->db->get("kitaplar"); //ogrenciler tablosunu veritabanından çek
		$data["veri"]=$query->result(); // sorgu verilerini "veri" değişkenine yükle 

		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/kitap_listesi',$data);
		$this->load->view('admin/_footer');
		
	}

	public function ekle(){
		
		$this->load->view('admin/kitap_ekle');

	}

	public function eklekaydet(){

		$data = array(
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'sifre' => $this->input->post('sifre'),
		'yetki' => $this->input->post('yetki'),
		'durum' => $this->input->post('durum')
		);

		$this->Database_Model->insert_data("kitaplar",$data); // ekle gönder. database modele dataları gönder
		$this->session->set_flashdata("sonuc","Kayıt ekleme işlemi başarıyla gerçekleştirildi !!");
		redirect(base_url()."admin/kullanicilar");

	}

	public function edit($id){
		$sorgu = $this->db->query("SELECT * FROM kitaplar WHERE id = $id");
		$data["veri"] = $sorgu->result();

		$this->load->view('admin/kitap_duzenle',$data);
	}

	public function guncellekaydet($id){

		$data = array(
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'sifre' => $this->input->post('sifre'),
		'yetki' => $this->input->post('yetki'),
		'durum' => $this->input->post('durum')
		);

		$this->Database_Model->update_data("kitaplar",$data,$id); // update gönder. database modele dataları gönder
		$this->session->set_flashdata("sonuc","Kayıt güncelleme işlemi başarıyla gerçekleştirildi !!");
		redirect(base_url()."admin/kitaplar");

	}

	function delete($id){
		
		$this->db->query("DELETE FROM kitaplar WHERE id = $id");
		$this->session->set_flashdata("sonuc","Kayıt silme işlemi başarıyla gerçekleştirildi !!");
		redirect(base_url()."admin/kitaplar");

	}

	public function goster($id){
		$sorgu = $this->db->query("SELECT * FROM kitaplar WHERE id = $id");
		$data["veri"] = $sorgu->result();

		$this->load->view('admin/kitap_goster',$data);
	}

	public function resim_ekle($id){
		$sorgu = $this->db->query("SELECT * FROM kitaplar WHERE id = $id");
		$data["veri"] = $sorgu->result();
		$data["id"] = $id;
		$this->load->view('admin/kitap_resim_ekleme_formu',$data);
	}

	public function resim_upload($id){

	    $config['upload_path']          = './images/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';

        $config['max_size']             = 10000000;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;

		

        $this->load->library('upload', $config);

        $this->upload->initialize($config);

       	$user = "userfile";
        if (! $this->upload->do_upload($user)) 
        {
            $error = array(
            	'error' => $this->upload->display_errors()
            	);
            $this->session->set_flashdata("sonuc","Upload Hatası !!".$error);
            redirect(base_url()."admin/kitaplar/resim_ekle/$id");
        }
        else
        {
	        $data = array(
				'resim' => $this->upload->do_upload('file_name')
			);

			$this->Database_Model->update_data("kitaplar",$data,$id); // update gönder. database modele dataları gönder

			$this->session->set_flashdata("sonuc","Resim Upload Edildi !!");
            redirect(base_url()."admin/kitaplar");
        }


	}

		public function resim_galeri_ekle($id){
			$sorgu = $this->db->query("SELECT * FROM kitaplar WHERE id = $id");
			$data["veri"] = $sorgu->result();
			$data["id"] = $id;
			$sorgu = $this->db->query("SELECT * FROM kitaplar_resim WHERE kitap_id = $id");
			$data["veriler"] = $sorgu->result();

				$this->load->view('admin/kitap_resim_galeri_ekleme_formu',$data);
		}


	public function resim_galeri_upload($id){

	    $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 3000;
        $config['max_width']            = 5000;
        $config['max_height']           = 3000;

        $this->load->library('upload', $config);

       
        if (! $this->upload->do_upload('userfile'))
        {
            $error = array(
            	'error' => $this->upload->display_errors()
            	);
            $this->session->set_flashdata("sonuc","Upload Hatası !!".$error);
            redirect(base_url()."admin/kitaplar/resim_galeri_ekle/$id");
        }
        else
        {
	        $data = array(
				'kitap_id' => $id,
				'resim' => $this->upload->do_upload('file_name')
			);

			$this->Database_Model->insert_data("kitaplar_resim",$data); // update gönder. database modele dataları gönder

			$this->session->set_flashdata("sonuc","Resim Upload Edildi !!");
            redirect(base_url()."admin/kitaplar/resim_galeri_ekle/$id");
        }


	}

function delete_resim($id,$resim_id){
		
		$this->db->query("DELETE FROM kitaplar_resim WHERE id = $resim_id");
		$this->session->set_flashdata("sonuc","Kayıt silme işlemi başarıyla gerçekleştirildi !!");
		redirect(base_url()."admin/kitaplar/resim_galeri_ekle/$id");

	}


	
}
?>