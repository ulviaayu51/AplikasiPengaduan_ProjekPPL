<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}

	public function index()
	{
		$this->load->view('HalamanAwal');
	}

	public function masuk()
	{
		$this->load->view('loginuser');
	}

	public function masukAdmin()
	{
		$data['data'] = $this->m_login->tampil_data("bagian");
		$this->load->view('admlogin',$data);
	}

	public function admin()
	{
		$data['data'] = $this->m_login->tampil_data_keluhan();
		$this->load->view('berandaAdmin',$data);
	}

	public function Pelanggan()
	{
		$data['data'] = $this->m_login->tampil_data_keluhan();
		$this->load->view('pelanggan',$data);
	}

	public function Teknis()
	{
		$data['data'] = $this->m_login->tampil_data_keluhan();
		$this->load->view('teknis',$data);
	}

	public function Keuangan()
	{
		$data['data'] = $this->m_login->tampil_data_keluhan();
		$this->load->view('keuangan',$data);
	}

	public function user()
	{
		$data['data'] = $this->m_login->tampil_data("bagian");
		$this->load->view('Pengaduan',$data);
	}

	public function cetakPengaduan()
	{
		$data['data'] = $this->m_login->tampil_data_keluhan();
		$this->load->view('cetakAdu',$data);
	}

	public function lihatdata()
	{
	
		$data['data'] = $this->m_login->tampil_data('pelanggan');
		$this->load->view('LihatData',$data);
	}

	public function arsip()
	{
		$data['data'] = $this->m_login->tampil_data_all_keluhan();
		$this->load->view('arsip',$data);
	}

	public function editPesan($no)
	{
		$where  = array('No_R'=>$no);
		$datanya  = array('status'=>"0");
		$this->m_login->update_data($where,$datanya,"riwayat_keluhan");
		$data['data'] = $this->m_login->tampil_data_all_keluhan();
		$this->load->view('arsip',$data);
	}



	public function addData()
	{
		$this->load->view('addData');
	}

	function addTableData(){
		$sambungan = $this->input->post('ns');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
 
		$data = array(
			'No_Sambungan' => $sambungan,
			'Alamat' => $alamat,
			'Nama' => $nama
			);
		$this->m_login->input_data($data,'pelanggan');
		$data['data'] = $this->m_login->tampil_data('pelanggan');
		$this->load->view('LihatData',$data);
	}

	function addTablePengaduan(){
		$sambungan = $this->input->post('ns');
		$kl = $this->input->post('keluhan');
		$bg = $this->input->post('level');
		$hp = $this->input->post('hp');
		$where = array(
			'No_Sambungan' => $sambungan,
			);
 		$cek = $this->m_login->cek_login("pelanggan",$where)->num_rows();
 		if($cek > 0){
			$data = array(
				'pelanggan' => $sambungan,
				'keluhan' => $kl,
				'waktu' => date('Y-m-d'),
				'Bagian_Pengaduan'=>$bg,
				'NO_HP'=>$hp,
				'status'=>'0'
				);
			$this->m_login->input_data($data,'riwayat_keluhan');
		}
		$data['data'] = $this->m_login->tampil_data("bagian");
		$this->load->view('Pengaduan',$data);
	}

	function addTableBalasan(){
		$keluhan = $this->input->post('ns');
		$balasan = $this->input->post('rb');
		$where = array(
			'keluhan' => $keluhan,
			'Balasan' => $balasan,
			'tanggal' => date('Y-m-d')
			);
		$where1 = array(
			'No_R' => $keluhan,
			);
		$data = array('status'=>'1');
		$this->m_login->update_data($where1,$data,"riwayat_keluhan");
 		$this->m_login->input_data($where,'respon');
		redirect(base_url("index.php/Welcome/admin"));
	}


	function balas($no){
		$data['no']=$no;
		$this->load->view('FormReply',$data);
	}

	function lihatbalasan($id){
		$data['data'] = $this->m_login->tampil_data_balasan($id);
		$this->load->view('LookReply',$data);
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/Welcome/admin"));
 
		}else{
			redirect(base_url("index.php/Welcome/masukAdmin"));		}
	}

	function aksi_login_user(){
		$username = $this->input->post('ns');
		$where = array(
			'No_Sambungan' => $username
			);
		$cek = $this->m_login->cek_login("pelanggan",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'Level' =>  "user"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/Welcome/user"));
 
		}else{
			redirect(base_url("index.php/Welcome/index"));		}
	}

	public function fetchdata(){
		$output = '';
		$query = '';
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->m_login->searchP($query);

		if($data->num_rows() == 1)
		{
			foreach($data->result() as $datae)
			{
				$output .= '
						<div class="form-group">
				          <label for="exampleInputEmail1">Nama</label>
				          <input readonly type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="'.$datae->Nama.'"> 
				        </div>
				        <div class="form-group">
				          <label for="exampleInputEmail1">Alamat</label>
				          <input readonly type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="'.$datae->Alamat.'"> 
				        </div>
				        <div class="form-group">
				          <label for="exampleInputEmail1">No. HP</label>
				          <input readonly type="text" value="'.$datae->HP.'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""> 
				        </div>
				';
			}
			
		}
		else
		{
			$output .= '<div class="form-group">
				          <label for="exampleInputEmail1">Nama</label>
				          <input readonly type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""> 
				        </div>
				        <div class="form-group">
				          <label for="exampleInputEmail1">Alamat</label>
				          <input readonly type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""> 
				        </div>
				        <div class="form-group">
				          <label for="exampleInputEmail1">No. HP</label>
				          <input readonly type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""> 
				        </div>';
		}
		echo $output;
	}


}
