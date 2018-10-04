<?php
class Database_Model extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function insert_data($table,$data){ // ekleme fonksiyonu ekleme işlemleri hep buradan olacak daha çağırmamıza gerek yok
		$this->db->insert($table,$data);
		return true;
	}

	public function update_data($table,$data,$id){ // update fonksiyonu update işlemleri hep buradan olacak daha çağırmamıza gerek yok
		$this->db->where("Id",$id);
		$this->db->update($table,$data);
		return true;
	}

}