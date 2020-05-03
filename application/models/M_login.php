<?php
	class M_login extends CI_Model{	
		function cek_login($table,$where){		
			return $this->db->get_where($table,$where);
		}
		function input_data($data,$table){
			$this->db->insert($table,$data);
		}
		function tampil_data($table){
			return $this->db->get($table)->result();
		}
		function tampil_data_keluhan(){

			$this->db->select('p.No_Sambungan,r.Keluhan,r.Waktu,p.Alamat,p.Nama,r.NO_HP,r.Bagian_Pengaduan,r.No_R');
		  	$this->db->from('riwayat_keluhan r');
      		$this->db->join('pelanggan p ', 'r.Pelanggan=p.No_Sambungan');
      		$this->db->where('r.status','0');
      		$query = $this->db->get();
      		return $query->result();	
      	}

      	function tampil_data_all_keluhan(){

			$this->db->select('p.No_Sambungan,r.Keluhan,r.Waktu,p.Alamat,p.Nama,r.NO_HP,r.Bagian_Pengaduan,r.No_R');
		  	$this->db->from('riwayat_keluhan r');
      		$this->db->join('pelanggan p ', 'r.Pelanggan=p.No_Sambungan');
      		$query = $this->db->get();
      		return $query->result();	
      	}

      	function tampil_data_balasan($query){
			$this->db->select('k.keluhan, r.Balasan,k.waktu,r.tanggal');
		  	$this->db->from('respon r');
      		$this->db->join('riwayat_keluhan k ', 'r.keluhan = k.No_R');
      		$this->db->where('k.Pelanggan',$query);
      		$query = $this->db->get();
      		return $query->result();	
      	}
      	function searchP($query){
			$this->db->select('*');
		  	$this->db->from('pelanggan');
      		if($query!=''){
      			$this->db->where('No_Sambungan',$query);
      		}
      		return $this->db->get();
      	}
      	function update_data($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

	}
?>