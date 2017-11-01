<?php if(! defined('BASEPATH')) exit('Akses langsung tidak diperbolehkan');
class Simple_login {
 // SET SUPER GLOBAL
		 var $CI = NULL;
		 public function __construct() {
		 $this->CI =& get_instance();
		 }
		 // Fungsi login
		 public function login($username, $password) {
		 $query = $this->CI->db->get_where('user',array(
		 	'username'=>$username,
		 	'password' => md5($password)));
		 if($query->num_rows() == 1) {

		  $query2 = $this->CI->db->get_where('user',array('username'=>$username))->row();
		 //$row = $this->CI->db->query('SELECT * FROM user where username = "'.$username.'"');
		 //$admin = $row->num_row();
		 //$id = $query2->id_user;
		 $sts = $query2->status;
		 $lvl = $query2->level; 
		 if ($lvl == 'penulis'  && $sts == 'aktif') {
		 	 $query2 = $this->CI->db->get_where('user',array('username'=>$username))->row();
		 	 $id = $query2->id_user;
		 	 $this->CI->session->set_userdata('username', $username);
		 	 $this->CI->session->set_userdata('id_login', uniqid(rand()));
		     $this->CI->session->set_userdata('id', $id);
		     redirect(site_url('web/dasboard'));

		 }elseif ($lvl == 'redaksi') {
		 	 $query2 = $this->CI->db->get_where('user',array('username'=>$username))->row();
		 	 $id = $query2->id_user;
		 	 $this->CI->session->set_userdata('username', $username);
		 	 $this->CI->session->set_userdata('id_login', uniqid(rand()));
		     $this->CI->session->set_userdata('id', $id);
		     redirect(site_url('web/redaksi'));
		 }elseif ($lvl == 'riviewer') {
		 	 $query2 = $this->CI->db->get_where('user',array('username'=>$username))->row();
		 	 $id = $query2->id_user;
		 	 $this->CI->session->set_userdata('username', $username);
		 	 $this->CI->session->set_userdata('id_login', uniqid(rand()));
		     $this->CI->session->set_userdata('id', $id);
		     redirect(site_url('web/riviewer'));

		 }
		 }else{
		 $this->CI->session->set_flashdata('sukses','Oops...Username/password salah');
		 redirect(site_url('web/login'));
		 }
		 return false;
		 }
		 // Proteksi halaman
		 public function cek_login() {
		 if($this->CI->session->userdata('username') == '') {
		 $this->CI->session->set_flashdata('sukses','Anda belum login');
		 redirect(site_url('web/login'));
		 }
		 }
		 // Fungsi logout
		 public function logout() {
		 $this->CI->session->unset_userdata('username');
		 $this->CI->session->unset_userdata('id_login');
		 $this->CI->session->unset_userdata('id');
		 $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
		 redirect(site_url('web'));
		 }
}