<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

function __construct()
{
	parent::__construct();
	check_not_login();
	check_admin();
	$this->load->model('user_m');
	$this->load->library('form_validation');

}

	public function index()
	{
		$data ['row'] = $this->user_m->get();
		$this->template->load('template','user/user_data', $data);
	}

	public function add()
	{
		//$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Nama', 'required');
		$this->form_validation->set_rules('user_name', 'Username', 'required|min_length[5]|is_unique[user.user_name] ');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]',
			array('matches' => '%s Tidak sesuai dengan password' )
		);
		$this->form_validation->set_rules('level', 'Level', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length', '%s minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '%s anda sudah digunakan');

		if ($this->form_validation->run() == FALSE) {
			$this->template->load('template','user/user_form_add'); 
		} else {
			$post = $this->input->post(null, TRUE);
			$this->user_m->add($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data Berhasil disimpan');</script>" ;
			}
			echo "<script>window.location=' ".site_url('user')."';</script>" ;
		}
	}
	 
	public function edit($id)
	{
		$this->form_validation->set_rules('name', 'Nama', 'required');
		$this->form_validation->set_rules('user_name', 'Username', 'required|min_length[5]|callback_username_check');
		if($this->input->post('password')) {
			$this->form_validation->set_rules('password', 'Password', 'min_length[6]');
			$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'matches[password]',
				array('matches' => '%s Tidak sesuai dengan password' )
			);
		}

		if($this->input->post('passconf')) {
			$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]',
				array('matches' => '%s Tidak sesuai dengan password' )
			);
		}
		$this->form_validation->set_rules('level', 'Level', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silahkan isi');
		$this->form_validation->set_message('min_length', '%s minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '%s anda sudah digunakan');

		//$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			//$data ['row'] = $this->user_m->get($id);
			$query = $this->user_m->get($id);
			if($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template','user/user_form_edit', $data); 
			} else {
				echo "<script>alert('Data tidak ditemukan');" ;	
				echo "window.location=' ".site_url('user')."';
				</script>" ;
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->user_m->edit($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>alert('Data Berhasil disimpan');
				</script>" ;
			}
			echo "<script>window.location=' ".site_url('user')."';</script>" ;
		}
	}

	function username_check(){
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM user WHERE user_name = '$post[user_name]' AND user_id !='$post[user_id] ' ");
		if($query->num_rows() > 0) {
			$this->form_validation->set_message('username_check', '{field} ini sudah dipakai');
			return FALSE;
		}else {
			return TRUE;
		}
	}

	public function del()
	{
		$id = $this->input->post('user_id');
		$this->user_m->del($id);

		if($this->db->affected_rows() > 0) {
			echo "<script>alert('Data Berhasil Dihapus');</script>" ;
		}
		echo "<script>window.location=' ".site_url('user')."';</script>" ;
	}
	

}
