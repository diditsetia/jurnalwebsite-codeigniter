<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	  class Updatejurnal extends CI_Controller
	  {
	  	
	  		function __construct() {
			parent::__construct();
			$this->load->model('webmodel');
			$this->load->library('template');
			$this->load->library('session');
		}

	
		public function update()
	     {
	     	if ($_POST['submit'] == 'postupdate1') {


	     	$id 				=	$this->input->post('id');

	     	$vol				=	$this->input->post('vol');
	     	$nomer 				= 	$this->input->post('nomer');
	     	$bulan				= 	$this->input->post('bulan');
	     	$tahun				= 	$this->input->post('tahun');
	     	


	     	$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$katakunci			=	$this->input->post('katakunci');
			$abstrak 			=	$this->input->post('abstrak');
			$pendahuluan		=	$this->input->post('pendahuluan');
			$kajianpustaka		=	$this->input->post('kajianpustaka');
			$landasanteori		=	$this->input->post('landasanteori');
			$metodepenelitian	=	$this->input->post('metodepenelitian');
			$pembahasan			=	$this->input->post('pembahasan');
			$penutup			=	$this->input->post('penutup');
			$daftarpustaka		=	$this->input->post('daftarpustaka');	
			$update 			= 	date('Y-m-d H:i:s');



			$dataartikel = array(

				'vol'				=>$vol,
				'nomer'				=>$nomer,
				'bulan'				=>$bulan,
				'tahun'				=>$tahun,
				

				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'kata_kunci'		=>$katakunci,
				'abstrak'			=>$abstrak,
				'pendahuluan'		=>$pendahuluan,
				'kajian_pustaka'	=>$kajianpustaka,
				'landasan_teori'	=>$landasanteori,
				'metode_penelitian'	=>$metodepenelitian,
				'pembahasan'		=>$pembahasan,
				'penutup'			=>$penutup,
				'daftar_pustaka'	=>$daftarpustaka,
				'update_at'			=>$update,
				'status'			=> "post",
				'kolom'				=> "1"



				);

				$where = array(

				'id_artikel' => $id

				);


				$data = $this->webmodel->updateartikel($dataartikel,$where);
				redirect(site_url('web/redaksi'));
	     		
	     	}elseif ($_POST['submit'] == 'postupdate2') {

	     		$id 				=	$this->input->post('id');

	     	$vol				=	$this->input->post('vol');
	     	$nomer 				= 	$this->input->post('nomer');
	     	$bulan				= 	$this->input->post('bulan');
	     	$tahun				= 	$this->input->post('tahun');
	     	

	     	$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$katakunci			=	$this->input->post('katakunci');
			$abstrak 			=	$this->input->post('abstrak');
			$pendahuluan		=	$this->input->post('pendahuluan');
			$kajianpustaka		=	$this->input->post('kajianpustaka');
			$landasanteori		=	$this->input->post('landasanteori');
			$metodepenelitian	=	$this->input->post('metodepenelitian');
			$pembahasan			=	$this->input->post('pembahasan');
			$penutup			=	$this->input->post('penutup');
			$daftarpustaka		=	$this->input->post('daftarpustaka');	
			$update 			= 	date('Y-m-d H:i:s');



			$dataartikel = array(

				'vol'				=>$vol,
				'nomer'				=>$nomer,
				'bulan'				=>$bulan,
				'tahun'				=>$tahun,
				
				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'kata_kunci'		=>$katakunci,
				'abstrak'			=>$abstrak,
				'pendahuluan'		=>$pendahuluan,
				'kajian_pustaka'	=>$kajianpustaka,
				'landasan_teori'	=>$landasanteori,
				'metode_penelitian'	=>$metodepenelitian,
				'pembahasan'		=>$pembahasan,
				'penutup'			=>$penutup,
				'daftar_pustaka'	=>$daftarpustaka,
				'update_at'			=>$update,
				'status'			=> "post",
				'kolom'				=> "2"



				);

				$where = array(

				'id_artikel' => $id

				);


				$data = $this->webmodel->updateartikel($dataartikel,$where);
				redirect(site_url('web/redaksi'));
	     		
	     	}elseif ($_POST['submit'] == 'sendupdate1') {

	     	$id 				=	$this->input->post('id');
	     	$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$katakunci			=	$this->input->post('katakunci');
			$abstrak 			=	$this->input->post('abstrak');
			$pendahuluan		=	$this->input->post('pendahuluan');
			$kajianpustaka		=	$this->input->post('kajianpustaka');
			$landasanteori		=	$this->input->post('landasanteori');
			$metodepenelitian	=	$this->input->post('metodepenelitian');
			$pembahasan			=	$this->input->post('pembahasan');
			$penutup			=	$this->input->post('penutup');
			$daftarpustaka		=	$this->input->post('daftarpustaka');
			$iduser 			=	$this->input->post('iduser');	
			$update 			= 	date('Y-m-d H:i:s');


			$dataartikel = array(

				

				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'kata_kunci'		=>$katakunci,
				'abstrak'			=>$abstrak,
				'pendahuluan'		=>$pendahuluan,
				'kajian_pustaka'	=>$kajianpustaka,
				'landasan_teori'	=>$landasanteori,
				'metode_penelitian'	=>$metodepenelitian,
				'pembahasan'		=>$pembahasan,
				'penutup'			=>$penutup,
				'daftar_pustaka'	=>$daftarpustaka,
				'update_at'			=>$update,
				'id_user'			=>$iduser,
				'status'			=> "Waiting",
				'kolom'				=> "1"



				);

				$where = array(

				'id_artikel' => $id

				);


				$data = $this->webmodel->updateartikel($dataartikel,$where);
				redirect(site_url('web/dasboard'));

	     	
	     	}elseif ($_POST['submit'] == 'sendrevisifinal') {
	     	
	     	$namafile			=   $this->input->post('namafile');
	     	$uraian 			=   $this->input->post('uraian');

	     	$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$katakunci			=	$this->input->post('katakunci');
			$abstrak 			=	$this->input->post('abstrak');
			$pendahuluan		=	$this->input->post('pendahuluan');
			$kajianpustaka		=	$this->input->post('kajianpustaka');
			$landasanteori		=	$this->input->post('landasanteori');
			$metodepenelitian	=	$this->input->post('metodepenelitian');
			$pembahasan			=	$this->input->post('pembahasan');
			$penutup			=	$this->input->post('penutup');
			$daftarpustaka		=	$this->input->post('daftarpustaka');
			$iduser 			=	$this->input->post('iduser');	
			$date 			    = 	date('Y-m-d H:i:s');


			$dataartikel = array(

				'namasave'			=>$namafile,
				'uraianperbaikan'	=>$uraian,			

				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'kata_kunci'		=>$katakunci,
				'abstrak'			=>$abstrak,
				'pendahuluan'		=>$pendahuluan,
				'kajian_pustaka'	=>$kajianpustaka,
				'landasan_teori'	=>$landasanteori,
				'metode_penelitian'	=>$metodepenelitian,
				'pembahasan'		=>$pembahasan,
				'penutup'			=>$penutup,
				'daftar_pustaka'	=>$daftarpustaka,
				'create_at'			=>$date,
				'id_user'			=>$iduser,
				'status'			=> "waitingfinal",
				'kolom'				=> "1"



				);

	

				$data = $this->webmodel->insert_artikel($dataartikel);
				redirect(site_url('web/dasboard'));	

	     	}
	     	elseif ($_POST['submit'] == 'sendriview') {
	     	

	     	$namafile			=   $this->input->post('namafile');

	     	$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$katakunci			=	$this->input->post('katakunci');
			$abstrak 			=	$this->input->post('abstrak');
			$pendahuluan		=	$this->input->post('pendahuluan');
			$kajianpustaka		=	$this->input->post('kajianpustaka');
			$landasanteori		=	$this->input->post('landasanteori');
			$metodepenelitian	=	$this->input->post('metodepenelitian');
			$pembahasan			=	$this->input->post('pembahasan');
			$penutup			=	$this->input->post('penutup');
			$daftarpustaka		=	$this->input->post('daftarpustaka');
			$iduser 			=	$this->input->post('iduser');	
			$date 			    = 	date('Y-m-d H:i:s');


			$dataartikel = array(

				'namasave'			=>$namafile,			

				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'kata_kunci'		=>$katakunci,
				'abstrak'			=>$abstrak,
				'pendahuluan'		=>$pendahuluan,
				'kajian_pustaka'	=>$kajianpustaka,
				'landasan_teori'	=>$landasanteori,
				'metode_penelitian'	=>$metodepenelitian,
				'pembahasan'		=>$pembahasan,
				'penutup'			=>$penutup,
				'daftar_pustaka'	=>$daftarpustaka,
				'create_at'			=>$date,
				'id_user'			=>$iduser,
				'status'			=> "waitingriview",
				'kolom'				=> "1"



				);

	

				$data = $this->webmodel->insert_artikel($dataartikel);
				redirect(site_url('web/dasboard'));

	     	}
	     	elseif ($_POST['submit'] == 'sendupdate2') {

	     	$id 				=	$this->input->post('id');
	     	$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$katakunci			=	$this->input->post('katakunci');
			$abstrak 			=	$this->input->post('abstrak');
			$pendahuluan		=	$this->input->post('pendahuluan');
			$kajianpustaka		=	$this->input->post('kajianpustaka');
			$landasanteori		=	$this->input->post('landasanteori');
			$metodepenelitian	=	$this->input->post('metodepenelitian');
			$pembahasan			=	$this->input->post('pembahasan');
			$penutup			=	$this->input->post('penutup');
			$daftarpustaka		=	$this->input->post('daftarpustaka');
			$iduser 			= 	$this->input->post('iduser');	
			$update 			= 	date('Y-m-d H:i:s');


			$dataartikel = array(

				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'kata_kunci'		=>$katakunci,
				'abstrak'			=>$abstrak,
				'pendahuluan'		=>$pendahuluan,
				'kajian_pustaka'	=>$kajianpustaka,
				'landasan_teori'	=>$landasanteori,
				'metode_penelitian'	=>$metodepenelitian,
				'pembahasan'		=>$pembahasan,
				'penutup'			=>$penutup,
				'daftar_pustaka'	=>$daftarpustaka,
				'update_at'			=>$update,
				'id_user'			=>$iduser,
				'status'			=> "Waiting",
				'kolom'				=> "2"



				);

				$where = array(

				'id_artikel' => $id

				);


				$data = $this->webmodel->updateartikel($dataartikel,$where);
				redirect(site_url('web/dasboard'));
	     		
	     		
	     	}elseif ($_POST['submit'] == 'saveupdate1') {

	        $vol				=	$this->input->post('vol');
	     	$nomer 				= 	$this->input->post('nomer');
	     	$bulan				= 	$this->input->post('bulan');
	     	$tahun				= 	$this->input->post('tahun');

	     	$id 				=	$this->input->post('id');
	     	$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$katakunci			=	$this->input->post('katakunci');
			$abstrak 			=	$this->input->post('abstrak');
			$pendahuluan		=	$this->input->post('pendahuluan');
			$kajianpustaka		=	$this->input->post('kajianpustaka');
			$landasanteori		=	$this->input->post('landasanteori');
			$metodepenelitian	=	$this->input->post('metodepenelitian');
			$pembahasan			=	$this->input->post('pembahasan');
			$penutup			=	$this->input->post('penutup');
			$daftarpustaka		=	$this->input->post('daftarpustaka');	
			$update 			= 	date('Y-m-d H:i:s');
			$iduser 			= 	$this->input->post('iduser');


			$dataartikel = array(

				
				'vol'				=>$vol,
				'nomer'				=>$nomer,
				'bulan'				=>$bulan,
				'tahun'				=>$tahun,

				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'kata_kunci'		=>$katakunci,
				'abstrak'			=>$abstrak,
				'pendahuluan'		=>$pendahuluan,
				'kajian_pustaka'	=>$kajianpustaka,
				'landasan_teori'	=>$landasanteori,
				'metode_penelitian'	=>$metodepenelitian,
				'pembahasan'		=>$pembahasan,
				'penutup'			=>$penutup,
				'daftar_pustaka'	=>$daftarpustaka,
				'update_at'			=>$update,
				'id_user'			=>$iduser,
				'status'			=> "drafredaksi",
				'kolom'				=> "1"



				);

				$where = array(

				'id_artikel' => $id

				);


				$data = $this->webmodel->updateartikel($dataartikel,$where);
				redirect(site_url('web/redaksi'));

	     	}elseif ($_POST['submit'] == 'saveupdate2') {
	     	

	     	$vol				=	$this->input->post('vol');
	     	$nomer 				= 	$this->input->post('nomer');
	     	$bulan				= 	$this->input->post('bulan');
	     	$tahun				= 	$this->input->post('tahun');

	     	

	     	$id 			    =	$this->input->post('id');
	     	$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$katakunci			=	$this->input->post('katakunci');
			$abstrak 			=	$this->input->post('abstrak');
			$pendahuluan		=	$this->input->post('pendahuluan');
			$kajianpustaka		=	$this->input->post('kajianpustaka');
			$landasanteori		=	$this->input->post('landasanteori');
			$metodepenelitian	=	$this->input->post('metodepenelitian');
			$pembahasan			=	$this->input->post('pembahasan');
			$penutup			=	$this->input->post('penutup');
			$daftarpustaka		=	$this->input->post('daftarpustaka');	
			$update 			= 	date('Y-m-d H:i:s');
			$iduser 			= 	$this->input->post('iduser');


			$dataartikel = array(


				'vol'				=>$vol,
				'nomer'				=>$nomer,
				'bulan'				=>$bulan,
				'tahun'				=>$tahun,

				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'kata_kunci'		=>$katakunci,
				'abstrak'			=>$abstrak,
				'pendahuluan'		=>$pendahuluan,
				'kajian_pustaka'	=>$kajianpustaka,
				'landasan_teori'	=>$landasanteori,
				'metode_penelitian'	=>$metodepenelitian,
				'pembahasan'		=>$pembahasan,
				'penutup'			=>$penutup,
				'daftar_pustaka'	=>$daftarpustaka,
				'update_at'			=>$update,
				'id_user'			=>$iduser,
				'status'			=> "drafredaksi",
				'kolom'				=> "2"



				);

				$where = array(

				'id_artikel' => $id

				);


				$data = $this->webmodel->updateartikel($dataartikel,$where);
				redirect(site_url('web/redaksi'));

	     	}elseif ($_POST['submit'] == 'saveupdaterevisi1') {
	     	$namafile 			=	$this->input->post('namafile');
	     	$status				=   $this->input->post('status');

	     	$id 				=	$this->input->post('id');
	     	$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$katakunci			=	$this->input->post('katakunci');
			$abstrak 			=	$this->input->post('abstrak');
			$pendahuluan		=	$this->input->post('pendahuluan');
			$kajianpustaka		=	$this->input->post('kajianpustaka');
			$landasanteori		=	$this->input->post('landasanteori');
			$metodepenelitian	=	$this->input->post('metodepenelitian');
			$pembahasan			=	$this->input->post('pembahasan');
			$penutup			=	$this->input->post('penutup');
			$daftarpustaka		=	$this->input->post('daftarpustaka');	
			$update 			= 	date('Y-m-d H:i:s');
			$iduser 			= 	$this->input->post('iduser');


			$dataartikel = array(

				
				'namasave'			=>$namafile,
				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'kata_kunci'		=>$katakunci,
				'abstrak'			=>$abstrak,
				'pendahuluan'		=>$pendahuluan,
				'kajian_pustaka'	=>$kajianpustaka,
				'landasan_teori'	=>$landasanteori,
				'metode_penelitian'	=>$metodepenelitian,
				'pembahasan'		=>$pembahasan,
				'penutup'			=>$penutup,
				'daftar_pustaka'	=>$daftarpustaka,
				'update_at'			=>$update,
				'id_user'			=>$iduser,
				'status'			=>$status,
				'kolom'				=> "1"



				);

				$where = array(

				'id_artikel' => $id

				);


				$data = $this->webmodel->updateartikel($dataartikel,$where);
				redirect(site_url('web/dasboard'));

	     	}elseif ($_POST['submit'] == 'saveupdaterevisi2') {

	     	$namafile			= $this->input->post('namafile');
	     	$status				= $this->input->post('status');
	     	$uraian             = $this->input->post('uraian');

	     	$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$katakunci			=	$this->input->post('katakunci');
			$abstrak 			=	$this->input->post('abstrak');
			$pendahuluan		=	$this->input->post('pendahuluan');
			$kajianpustaka		=	$this->input->post('kajianpustaka');
			$landasanteori		=	$this->input->post('landasanteori');
			$metodepenelitian	=	$this->input->post('metodepenelitian');
			$pembahasan			=	$this->input->post('pembahasan');
			$penutup			=	$this->input->post('penutup');
			$daftarpustaka		=	$this->input->post('daftarpustaka');	
			$date 			    = 	date('Y-m-d H:i:s');
			$iduser 			= 	$this->input->post('iduser');


			$dataartikel = array(

				'uraianperbaikan'   =>$uraian,
				'namasave'			=>$namafile,
				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'kata_kunci'		=>$katakunci,
				'abstrak'			=>$abstrak,
				'pendahuluan'		=>$pendahuluan,
				'kajian_pustaka'	=>$kajianpustaka,
				'landasan_teori'	=>$landasanteori,
				'metode_penelitian'	=>$metodepenelitian,
				'pembahasan'		=>$pembahasan,
				'penutup'			=>$penutup,
				'daftar_pustaka'	=>$daftarpustaka,
				'create_at'			=>$date,
				'id_user'			=>$iduser,
				'status'			=>$status,
				'kolom'				=> "1"


				);


				$data = $this->webmodel->insert_artikel($dataartikel);
				redirect(site_url('web/dasboard'));
	     	}

	     	elseif ($_POST['submit'] == 'pratinjaurevisi') {
	     	$kategori			= $_POST['kategori'];
	     	$uraian 			= $_POST['uraian'];
	     	$id 				= $_POST['id'];
	     	$judul   			= $_POST['judul'];
			$penulis 			= $_POST['namapenulis'];
			$nomer 				= $_POST['nomerinduk'];
			$email   			= $_POST['email'];
			$programstudi 		= $_POST['programstudi'];
			$fakultas 			= $_POST['fakultas'];
			$universitas		= $_POST['universitas'];
			$alamat				= $_POST['alamat'];
			$katakunci   		= $_POST['katakunci'];
			$abstrak 			= $_POST['abstrak'];
			$pendahuluan		= $_POST['pendahuluan'];
			$kajianpustaka 		= $_POST['kajianpustaka'];
			$landasanteori 		= $_POST['landasanteori'];
			$metodepenelitian 	= $_POST['metodepenelitian'];
			$pembahasan 		= $_POST['pembahasan'];
			$penutup			= $_POST['penutup'];
			$daftarpustaka 		= $_POST['daftarpustaka'];

			 $datasesion = array(

			 	'idkategori' 		=> $kategori,

			 	'uraian'            => $uraian,
			 	'judul'	  			=> $judul,
			 	'namapenulis' 		=> $penulis,
			 	'nomerinduk'  		=> $nomer,
			 	'email' 			=> $email,
			 	'programstudi' 		=> $programstudi,
			 	'fakultas' 			=> $fakultas,
			 	'universitas'		=> $universitas,
			 	'alamat' 			=> $alamat,
			 	'katakunci' 		=> $katakunci,
			 	'abstrak' 			=> $abstrak,
			 	'pendahuluan'		=> $pendahuluan,
			 	'kajianpustaka' 	=> $kajianpustaka,
			 	'landasanteori' 	=> $landasanteori,
			 	'metodepenelitian'	=> $metodepenelitian,
			 	'pembahasan'		=> $pembahasan,
			 	'penutup'			=> $penutup,
			 	'daftarpustaka'		=> $daftarpustaka,
			 	'status'			=> 'revisi',

			 	


			 	);

			

			 $this->session->set_userdata('active', 'true');
			 $this->session->set_userdata($datasesion);
			 redirect(site_url('web/editrevisi/'.$id));	
	     	}

	     	elseif ($_POST['submit']== 'pratinjauone') {

	     	$kategori			= $_POST['kategori'];
	     
	     	$id 				= $_POST['id'];
	     	$judul   			= $_POST['judul'];
			$penulis 			= $_POST['namapenulis'];
			$nomer 				= $_POST['nomerinduk'];
			$email   			= $_POST['email'];
			$programstudi 		= $_POST['programstudi'];
			$fakultas 			= $_POST['fakultas'];
			$universitas		= $_POST['universitas'];
			$alamat				= $_POST['alamat'];
			$katakunci   		= $_POST['katakunci'];
			$abstrak 			= $_POST['abstrak'];
			$pendahuluan		= $_POST['pendahuluan'];
			$kajianpustaka 		= $_POST['kajianpustaka'];
			$landasanteori 		= $_POST['landasanteori'];
			$metodepenelitian 	= $_POST['metodepenelitian'];
			$pembahasan 		= $_POST['pembahasan'];
			$penutup			= $_POST['penutup'];
			$daftarpustaka 		= $_POST['daftarpustaka'];

			 $datasesion = array(

			 	'idkategori' 		=> $kategori,

			
			 	'judul'	  			=> $judul,
			 	'namapenulis' 		=> $penulis,
			 	'nomerinduk'  		=> $nomer,
			 	'email' 			=> $email,
			 	'programstudi' 		=> $programstudi,
			 	'fakultas' 			=> $fakultas,
			 	'universitas'		=> $universitas,
			 	'alamat' 			=> $alamat,
			 	'katakunci' 		=> $katakunci,
			 	'abstrak' 			=> $abstrak,
			 	'pendahuluan'		=> $pendahuluan,
			 	'kajianpustaka' 	=> $kajianpustaka,
			 	'landasanteori' 	=> $landasanteori,
			 	'metodepenelitian'	=> $metodepenelitian,
			 	'pembahasan'		=> $pembahasan,
			 	'penutup'			=> $penutup,
			 	'daftarpustaka'		=> $daftarpustaka,
			 	'status'			=> 'draf',

			 	


			 	);

			

			 $this->session->set_userdata('active', 'true');
			 $this->session->set_userdata($datasesion);
			 redirect(site_url('web/editdraf/'.$id));



	     	} elseif ($_POST['submit'] == 'cancel') {

	     		redirect(site_url('web/dasboard'));

	     	} elseif ($_POST['submit'] == 'cancelredaksi') {

	     		redirect(site_url('web/redaksi'));

	     	} elseif ($_POST['submit'] == 'pratinjauredaksi') {

	     	$vol				= $_POST['vol'];
	     	$nomer 				= $_POST['nomer'];
	     	$bulan				= $_POST['bulan'];
	     	$tahun				= $_POST['tahun'];
	     	
	     	$kategori			= $_POST['kategori'];

	     	$id 				= $_POST['id'];
	     	$judul   			= $_POST['judul'];
			$penulis 			= $_POST['namapenulis'];
			$nomerinduk 		= $_POST['nomerinduk'];
			$email   			= $_POST['email'];
			$programstudi 		= $_POST['programstudi'];
			$fakultas 			= $_POST['fakultas'];
			$universitas		= $_POST['universitas'];
			$alamat				= $_POST['alamat'];
			$katakunci   		= $_POST['katakunci'];
			$abstrak 			= $_POST['abstrak'];
			$pendahuluan		= $_POST['pendahuluan'];
			$kajianpustaka 		= $_POST['kajianpustaka'];
			$landasanteori 		= $_POST['landasanteori'];
			$metodepenelitian 	= $_POST['metodepenelitian'];
			$pembahasan 		= $_POST['pembahasan'];
			$penutup			= $_POST['penutup'];
			$daftarpustaka 		= $_POST['daftarpustaka'];

			 $datasesion = array(

			 	'vol'				=> $vol,
			 	'nomer'				=> $nomer,
			 	'bulan'				=> $bulan,
			 	'tahun'				=> $tahun,
			 	
			 	'idkategori' 		=> $kategori,

			 	
			 	'judul'	  			=> $judul,
			 	'namapenulis' 		=> $penulis,
			 	'nomerinduk'  		=> $nomerinduk,
			 	'email' 			=> $email,
			 	'programstudi' 		=> $programstudi,
			 	'fakultas' 			=> $fakultas,
			 	'universitas'		=> $universitas,
			 	'alamat' 			=> $alamat,
			 	'katakunci' 		=> $katakunci,
			 	'abstrak' 			=> $abstrak,
			 	'pendahuluan'		=> $pendahuluan,
			 	'kajianpustaka' 	=> $kajianpustaka,
			 	'landasanteori' 	=> $landasanteori,
			 	'metodepenelitian'	=> $metodepenelitian,
			 	'pembahasan'		=> $pembahasan,
			 	'penutup'			=> $penutup,
			 	'daftarpustaka'		=> $daftarpustaka,
			 	'status'			=> 'Waiting' || 'post' || 'drafredaksi',
			 	



			 	


			 	);


			 	$this->session->set_userdata('active', 'true');
			 	$this->session->set_userdata($datasesion);
			 	redirect(site_url('web/editjurnal/'.$id));

	     		
	     	}elseif ($_POST['submit'] == 'saveupdatedraf1') {

	     	$namafile 			=	$this->input->post('namafile');
	     	$status				=   $this->input->post('status');

	     	$id 				=	$this->input->post('id');
	     	$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$katakunci			=	$this->input->post('katakunci');
			$abstrak 			=	$this->input->post('abstrak');
			$pendahuluan		=	$this->input->post('pendahuluan');
			$kajianpustaka		=	$this->input->post('kajianpustaka');
			$landasanteori		=	$this->input->post('landasanteori');
			$metodepenelitian	=	$this->input->post('metodepenelitian');
			$pembahasan			=	$this->input->post('pembahasan');
			$penutup			=	$this->input->post('penutup');
			$daftarpustaka		=	$this->input->post('daftarpustaka');	
			$update 			= 	date('Y-m-d H:i:s');
			$iduser 			= 	$this->input->post('iduser');


			$dataartikel = array(

				
				'namasave'			=>$namafile,
				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'kata_kunci'		=>$katakunci,
				'abstrak'			=>$abstrak,
				'pendahuluan'		=>$pendahuluan,
				'kajian_pustaka'	=>$kajianpustaka,
				'landasan_teori'	=>$landasanteori,
				'metode_penelitian'	=>$metodepenelitian,
				'pembahasan'		=>$pembahasan,
				'penutup'			=>$penutup,
				'daftar_pustaka'	=>$daftarpustaka,
				'update_at'			=>$update,
				'id_user'			=>$iduser,
				'status'			=>$status,
				'kolom'				=> "1"



				);

				$where = array(

				'id_artikel' => $id

				);


				$data = $this->webmodel->updateartikel($dataartikel,$where);
				redirect(site_url('web/dasboard'));
	     	
	     	}elseif ($_POST['submit'] == 'saveupdatedraf2') {


	     	
	     	$namafile			= $this->input->post('namafile');
	     	$status				= $this->input->post('status');
	     	
	     	$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$katakunci			=	$this->input->post('katakunci');
			$abstrak 			=	$this->input->post('abstrak');
			$pendahuluan		=	$this->input->post('pendahuluan');
			$kajianpustaka		=	$this->input->post('kajianpustaka');
			$landasanteori		=	$this->input->post('landasanteori');
			$metodepenelitian	=	$this->input->post('metodepenelitian');
			$pembahasan			=	$this->input->post('pembahasan');
			$penutup			=	$this->input->post('penutup');
			$daftarpustaka		=	$this->input->post('daftarpustaka');	
			$date 			    = 	date('Y-m-d H:i:s');
			$iduser 			= 	$this->input->post('iduser');


			$dataartikel = array(

				'namasave'			=>$namafile,
				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'kata_kunci'		=>$katakunci,
				'abstrak'			=>$abstrak,
				'pendahuluan'		=>$pendahuluan,
				'kajian_pustaka'	=>$kajianpustaka,
				'landasan_teori'	=>$landasanteori,
				'metode_penelitian'	=>$metodepenelitian,
				'pembahasan'		=>$pembahasan,
				'penutup'			=>$penutup,
				'daftar_pustaka'	=>$daftarpustaka,
				'create_at'			=>$date,
				'id_user'			=>$iduser,
				'status'			=>$status,
				'kolom'				=> "1"


				);


				$data = $this->webmodel->insert_artikel($dataartikel);
				redirect(site_url('web/dasboard'));
	     	}

	     }


	}





