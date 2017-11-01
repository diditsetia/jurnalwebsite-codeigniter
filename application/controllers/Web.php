<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Web extends CI_Controller
	{
		function __construct() {
			parent::__construct();
			$this->load->model('mlogin');
			$this->load->model('webmodel');
			$this->load->library('template');
			$this->load->library('session');
			$this->load->library('simple_login');
			$this->load->helper(array('form', 'url'));
			
		}

		public function index()
		{
			
			$this->load->database();
			$jumlahdatapost = $this->webmodel->jumlahdatapost();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/web/index';
			$config['total_rows'] = $jumlahdatapost;
			$config['per_page'] = 3;

			$config['full_tag_open'] = '<ul class="pagination">';
	        $config['full_tag_close'] = '</ul>';
	        $config['first_link'] = '&laquo; First';
	        $config['first_tag_open'] = '<li class="prev page">';
	        $config['first_tag_close'] = '</li>';
	 
	        $config['last_link'] = 'Last &raquo;';
	        $config['last_tag_open'] = '<li class="next page">';
	        $config['last_tag_close'] = '</li>';
	 
	        $config['next_link'] = 'Next &rarr;';
	        $config['next_tag_open'] = '<li class="next page">';
	        $config['next_tag_close'] = '</li>';
	 
	        $config['prev_link'] = '&larr; Prev';
	        $config['prev_tag_open'] = '<li class="prev page">';
	        $config['prev_tag_close'] = '</li>';
	 
	        $config['cur_tag_open'] = '<li class="current"><a href="">';
	        $config['cur_tag_close'] = '</a></li>';
	 
	        $config['num_tag_open'] = '<li class="page">';
	        $config['num_tag_close'] = '</li>';

			$from =$this->uri->segment(3);
			$this->pagination->initialize($config);

			$data['datajurnalpost'] = $this->webmodel->tampiljurnalpost($config['per_page'],$from);
			$data['populer'] = $this->webmodel->jurnalterpopuler($config['per_page'],$from);
			$this->template->utama('V_home',$data);

			
			
				
	

		}

		

		public function pencarian()
		{		$kategori = $this->input->get('kategori');
				$cari = $this->input->get('cari');
	   			$data['pencarian'] = $this->webmodel->fungsipencarian($kategori,$cari);
	   			$this->template->utama('V_pencarian',$data);
		

        }

        public function pencariankata()
        {	
        	$coba = $this->uri->segment(2);
        	print_r($coba);
        	die();
        	$cari = $this->input->get('cari');
        	$data['carikata'] = $this->webmodel->carikata($cari);


        }

        public function pencariankategori($id)
        {
        	$data['pencarian'] = $this->webmodel->fungsicarikategori($id);
        	$this->template->utama('V_pencarian',$data);
        }

        public function detailpenulis()
        {
        	$this->template->keenam('V_detailpenulis');
        }

		public function penulisbaru()
		{
			$data['penulisbaru'] = $this->webmodel->tampilpenulisbaru();
			$this->template->keenam('V_penulisbaru',$data);
		}

		public function register()
		{
			 $this->template->utama('V_register',array('error' => ' ' ));
		}

		public function ngirim()
		{
			$this->load->view('belajarupload', array('error' => ' ' ));
		}

		public function aksi_upload()
		{
		$config['upload_path']          = './assets/gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;
 		
 		$this->upload->initialize($config);
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('belajarupload', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('V_upload_sukses', $data);
		}
	    }
		

		public function aksiregister()
		{
			

			$config['upload_path']          = './assets/img/fotoprofil';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 10000;
			$config['max_width']            = 10240;
			$config['max_height']           = 7680;

			$this->upload->initialize($config);
			$this->load->library('upload',$config);
			
			if ( ! $this->upload->do_upload('userfile')) {
			 	$error = array('error' => $this->upload->display_errors());
			 	$this->template->utama('V_register',$error);

			  }else {

			  $password = $this->input->post('password');

			   $dataregister = array(
			   'nama_user' 		=> $this->input->post('nama'),
			   'username'		=> $this->input->post('username'),
			   'password'		=>  md5($password),
			   'email'			=> $this->input->post('email'),
			   'tahun'			=> $this->input->post('tahun'),
			   'bulan'			=> $this->input->post('bulan'),
			   'tanggal'		=> $this->input->post('tanggal'),
			   'jeniskelamin'	=> $this->input->post('jenis'),
			   'nomerhp'		=> $this->input->post('hp'),
			   'alamat'			=> $this->input->post('alamat'),
			   'alasan'			=> $this->input->post('alasan'),
			   'status'			=> 'belumaktif',
			   'level'			=> 'penulis',
			   'date'			=> date('Y-m-d H:i:s'),
			   'foto'			=> $this->upload->data()['file_name'],
			  	);

			  $this->webmodel->registeruser($dataregister);
			  redirect('web');


			 }
		}

		public function pengunjunghariini()
		{
			$datahi['datahariini'] = $this->webmodel->pengunjunghariini();
			print_r($datahi);
			die();
			$this->template->keenam('V_dasboardredaksi',$datahi);
		}

		public function totalpengunjung()
		{
			$datatp['total'] = $this->webmodel->totalpengunjung();
			print_r($datatp);
			die();
			$this->template->keenam('V_dasboardredaksi',$datahi);
		}

		public function pengunjungonline()
		{
			$datatp['pengunjungonline'] = $this->webmodel->pengunjungonline();
			$this->template->keenam('V_dasboardredaksi',$datahi);
		}

		function testing(){
			$data = ['text' => "What is Lorem Ipsum?
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

					Why do we use it?
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)."];
			$this->load->view('V_tes', $data, FALSE);
		}

		public function pembaca()
		{

			$this->load->database();
			$jumlahdatapost = $this->webmodel->jumlahdatapost();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/web/index';
			$config['total_rows'] = $jumlahdatapost;
			$config['per_page'] = 3;

			$config['full_tag_open'] = '<ul class="pagination">';
	        $config['full_tag_close'] = '</ul>';
	        $config['first_link'] = '&laquo; First';
	        $config['first_tag_open'] = '<li class="prev page">';
	        $config['first_tag_close'] = '</li>';
	 
	        $config['last_link'] = 'Last &raquo;';
	        $config['last_tag_open'] = '<li class="next page">';
	        $config['last_tag_close'] = '</li>';
	 
	        $config['next_link'] = 'Next &rarr;';
	        $config['next_tag_open'] = '<li class="next page">';
	        $config['next_tag_close'] = '</li>';
	 
	        $config['prev_link'] = '&larr; Prev';
	        $config['prev_tag_open'] = '<li class="prev page">';
	        $config['prev_tag_close'] = '</li>';
	 
	        $config['cur_tag_open'] = '<li class="current"><a href="">';
	        $config['cur_tag_close'] = '</a></li>';
	 
	        $config['num_tag_open'] = '<li class="page">';
	        $config['num_tag_close'] = '</li>';

			$from =$this->uri->segment(3);
			$this->pagination->initialize($config);

			$data['datajurnalpost'] = $this->webmodel->tampiljurnalpost($config['per_page'],$from);
			$data['populer'] = $this->webmodel->jurnalterpopuler($config['per_page'],$from);
			$this->template->kedua('V_home',$data);
		

			
		}

		public function archives()
		{
			$this->template->utama('V_archives.php');
		}

		public function like()
		{
			

			$id   = $this->input->get('id');
			$type = $this->input->get('type');
			$ip  = $_SERVER['REMOTE_ADDR'];


			$datalike = array(
				"id_artikel" => $id,
				"ip" => $ip,
				);
			


			if($type == 'like') {
				if(!$this->webmodel->liked($id, $ip)) {
					
					if($this->webmodel->like($datalike)) {
						
					}
				} else {
					echo 'voted';
				}

			} else {
				if($this->webmodel->unlike($id)) {
				}
			}
			
		
		}



		public function readmore($id)
		{
			$data['datareadmore'] = $this->webmodel->readmorejurnal($id);
			$this->template->utama('V_readmore',$data);
		}

		public function komentar()
		{	
			$id 		= $this->input->post('id');
			$bacajurnal = $this->input->post('bacajurnal');
			$nama 		= $this->input->post('nama');
			$komentar	= $this->input->post('komentar');
			$tanggal 	= date('Y-m-d H:i:s');

			$datakomentar = array(

				'id_artikel'	=> $id,
				'nama'			=> $nama,
				'isi_komentar'	=> $komentar,
				'tanggal'		=> $tanggal,

				);

			$komentardata = $this->webmodel->insertkomentar($datakomentar);
			redirect(site_url('baca/'.$bacajurnal.'/'.$id));


		}


		public function dasboard()
		{  

			$this->session->unset_userdata('vol');
	     	$this->session->unset_userdata('nomer');
	     	$this->session->unset_userdata('bulan');
	     	$this->session->unset_userdata('tahun');
	     	
			$this->session->unset_userdata('active');
	     	$this->session->unset_userdata('judul');
	     	$this->session->unset_userdata('namapenulis');
	     	$this->session->unset_userdata('nomerinduk');
	     	$this->session->unset_userdata('email');
	     	$this->session->unset_userdata('programstudi');
	     	$this->session->unset_userdata('fakultas');
	     	$this->session->unset_userdata('universitas');
	     	$this->session->unset_userdata('alamat');
	     	$this->session->unset_userdata('idkategori');
	     	$this->session->unset_userdata('katakunci');
	     	$this->session->unset_userdata('abstrak');
	     	$this->session->unset_userdata('pendahuluan');
	     	$this->session->unset_userdata('kajianpustaka');
	     	$this->session->unset_userdata('landasanteori');
	     	$this->session->unset_userdata('metodepenelitian');
	     	$this->session->unset_userdata('pembahasan');
	     	$this->session->unset_userdata('penutup');
	     	$this->session->unset_userdata('daftarpustaka');
	     	$this->session->unset_userdata('status');

			$this->load->database();
			$jumlah_data = $this->webmodel->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/web/dasboard';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 2;
			$from =$this->uri->segment(3);
			$this->pagination->initialize($config);
			$data['data'] = $this->webmodel->tampildata($config['per_page'],$from);

			$this->template->kelima('V_dasboardpenulis',$data);

		}


	     public function redaksi()
	     {
	     	$this->session->unset_userdata('vol');
	     	$this->session->unset_userdata('nomer');
	     	$this->session->unset_userdata('bulan');
	     	$this->session->unset_userdata('tahun');

	     	$this->session->unset_userdata('active');


	     	$this->session->unset_userdata('judul');
	     	$this->session->unset_userdata('namapenulis');
	     	$this->session->unset_userdata('nomerinduk');
	     	$this->session->unset_userdata('email');
	     	$this->session->unset_userdata('programstudi');
	     	$this->session->unset_userdata('fakultas');
	     	$this->session->unset_userdata('universitas');
	     	$this->session->unset_userdata('alamat');
	     	$this->session->unset_userdata('katakunci');
	     	$this->session->unset_userdata('abstrak');
	     	$this->session->unset_userdata('pendahuluan');
	     	$this->session->unset_userdata('kajianpustaka');
	     	$this->session->unset_userdata('landasanteori');
	     	$this->session->unset_userdata('metodepenelitian');
	     	$this->session->unset_userdata('pembahasan');
	     	$this->session->unset_userdata('penutup');
	     	$this->session->unset_userdata('daftarpustaka');
	     	$this->session->unset_userdata('status');

	     	$this->load->database();
			$jumlahdata = $this->webmodel->jumlahdata();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/web/redaksi';
			$config['total_rows'] = $jumlahdata;
			$config['per_page'] = 5;
			$from =$this->uri->segment(3);
			$this->pagination->initialize($config);

	     	$data['dataartikel'] = $this->webmodel->tampildatawaiting($config['per_page'],$from);
			$this->template->keenam('V_dasboardredaksi',$data);


	     }

	     public function tampilkomentar($id)
	     {
	     	$query['query'] = $this->webmodel->tampilkomentar($id);
	     	 // print_r($query['query']->judul_artikel);
	     	// die();
	     	$this->template->keenam('V_komentarredaksi',$query);
	     }


	     public function artikelmasuk()
	     {
	     	$this->session->unset_userdata('perbaikan');

	     	$this->load->database();
			$jumlahdata = $this->webmodel->jumlahdata();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/web/artikelmasuk';
			$config['total_rows'] = $jumlahdata;
			$config['per_page'] = 5;
			$from =$this->uri->segment(3);
			$this->pagination->initialize($config);

	     	$data['datareview'] = $this->webmodel->tampilwaitingreviewer($config['per_page'],$from);
	     	$this->template->riviewtmp('V_artikelmasuk',$data);
	     }
	    
	     public function riviewer()
	     {

	     	$this->session->unset_userdata('perbaikan');

	     	$this->load->database();
			$jumlahdata = $this->webmodel->jumlahdata();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/web/riviewer';
			$config['total_rows'] = $jumlahdata;
			$config['per_page'] = 5;
			$from =$this->uri->segment(3);
			$this->pagination->initialize($config);

	     	$data['datareview'] = $this->webmodel->tampilwaitingreviewer($config['per_page'],$from);
	     	$this->template->riviewtmp('V_dasboardriviewer',$data);
	     }

	     public function kirimpenulis($id)
	     {
	     	$this->webmodel->updateartikelreview($id);
	     	redirect(site_url('web/riviewer'));

	     }

	     public function folderrevisi()
	     {

	     	$this->load->database();
			$jumlahdata = $this->webmodel->jumlahdata();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/web/folderrevisi';
			$config['total_rows'] = $jumlahdata;
			$config['per_page'] = 5;
			$from =$this->uri->segment(3);
			$this->pagination->initialize($config);

	     	$data['datarevisi'] = $this->webmodel->tampildatarevisi($config['per_page'],$from);
	     	$this->template->kelima('V_folderrevisi',$data);
	     }

	     public function koreksi()
	     {

	     	$this->load->database();
			$jumlahdata = $this->webmodel->jumlahdata();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/web/koreksi';
			$config['total_rows'] = $jumlahdata;
			$config['per_page'] = 5;
			$from =$this->uri->segment(3);
			$this->pagination->initialize($config);

	     	$data['datarevisi'] = $this->webmodel->tampildatarevisi($config['per_page'],$from);
	     	$this->template->riviewtmp('V_dasboardkoreksi',$data);
	     }

	     public function finalrevisi()
	     {
	     	$this->load->database();
			$jumlahdata = $this->webmodel->jumlahdata();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/web/saverevisi';
			$config['total_rows'] = $jumlahdata;
			$config['per_page'] = 5;
			$from =$this->uri->segment(3);
			$this->pagination->initialize($config);

	     	$data['finalrevisi'] = $this->webmodel->tampildatafinalrevisi($config['per_page'],$from);
	     	$this->template->kelima('V_finalrevisi',$data);
	     
	     }

	     public function siappost($id)
	     {
	     	$this->webmodel->statussiappost($id);
	     	redirect(site_url('web/riviewer'));
	     }

	     public function revisilagi($id)
	     {
	     	$this->webmodel->revisilagi($id);
	     	redirect(site_url('web/riviewer'));
	     }

		public function post()

		{

			if ($_POST['submit'] == 'send1') {

			$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$kategori 			= 	$this->input->post('kategori');
			$katakunci			=	$this->input->post('katakunci');
			$abstrak 			=	$this->input->post('abstrak');
			$pendahuluan		=	$this->input->post('pendahuluan');
			$kajianpustaka		=	$this->input->post('kajianpustaka');
			$landasanteori		=	$this->input->post('landasanteori');
			$metodepenelitian	=	$this->input->post('metodepenelitian');
			$pembahasan			=	$this->input->post('pembahasan');
			$penutup			=	$this->input->post('penutup');
			$daftarpustaka		=	$this->input->post('daftarpustaka');	
			$date 				= 	date('Y-m-d H:i:s');
			$iduser				=	$this->input->post('iduser');

			$dataartikel = array(
				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'id_kategori' 		=>$kategori,
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
				'status'			=> "Waiting",
				'kolom'				=> "1"

				);



		$data = $this->webmodel->insert_artikel($dataartikel);

		redirect(site_url('web/dasboard'));

				

			}elseif ($_POST['submit'] == 'send2') {

			$iduser 			= 	$this->input->post('iduser');
			$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$kategori 			= 	$this->input->post('kategori');
			$katakunci			=	$this->input->post('katakunci');
			$abstrak 			=	$this->input->post('abstrak');
			$pendahuluan		=	$this->input->post('pendahuluan');
			$kajianpustaka		=	$this->input->post('kajianpustaka');
			$landasanteori		=	$this->input->post('landasanteori');
			$metodepenelitian	=	$this->input->post('metodepenelitian');
			$pembahasan			=	$this->input->post('pembahasan');
			$penutup			=	$this->input->post('penutup');
			$daftarpustaka		=	$this->input->post('daftarpustaka');	
			$date 				= 	date('Y-m-d H:i:s');
			$iduser 			= 	$this->input->post('iduser');

			$dataartikel = array(

				'id_user' 			=>$iduser,
				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'id_kategori' 		=>$kategori,
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
				'id_user' 			=>$iduser,
				'status'			=> "Waiting",
				'kolom'				=> "2"

				);

		$data = $this->webmodel->insert_artikel($dataartikel);

		redirect(site_url('web/dasboard'));





			
			} elseif ($_POST['submit'] == 'save1' ) {
				
			
			$namafile 			=   $this->input->post('namafile');
			$status				=   $this->input->post('status');

			$iduser 			=   $this->input->post('iduser');	
			$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$kategori 			= 	$this->input->post('kategori');
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
			$date 				= 	date('Y-m-d H:i:s');

			$dataartikel = array(

				'namasave'			=>$namafile,
				'status'			=>$status,

				'id_user' 			=>$iduser,
				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'id_kategori' 		=>$kategori,
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
				'kolom'				=> "1"

				);


		$data = $this->webmodel->insert_artikel($dataartikel);

		redirect(site_url('web/dasboard'));


			} elseif ($_POST['submit'] == 'save2' ) {
			
			$iduser 			= 	$this->input->post('iduser');
			$judul				= 	$this->input->post('judul');
			$namapenulis		=	$this->input->post('namapenulis');
			$nomerinduk			=	$this->input->post('nomerinduk');
			$email 				=	$this->input->post('email');
			$programstudi		=	$this->input->post('programstudi');
			$fakultas			=	$this->input->post('fakultas');
			$universitas		=	$this->input->post('universitas');
			$alamat				=	$this->input->post('alamat');
			$kategori 			= 	$this->input->post('kategori');
			$katakunci			=	$this->input->post('katakunci');
			$abstrak 			=	$this->input->post('abstrak');
			$pendahuluan		=	$this->input->post('pendahuluan');
			$kajianpustaka		=	$this->input->post('kajianpustaka');
			$landasanteori		=	$this->input->post('landasanteori');
			$metodepenelitian	=	$this->input->post('metodepenelitian');
			$pembahasan			=	$this->input->post('pembahasan');
			$penutup			=	$this->input->post('penutup');
			$daftarpustaka		=	$this->input->post('daftarpustaka');	
			$date 				= 	date('Y-m-d H:i:s');
			$iduser 			= 	$this->input->post('iduser');

			$dataartikel = array(
				'id_user' 			=>$iduser,
				'judul_artikel'		=>$judul,
				'nama_penulis'		=>$namapenulis,
				'nomer_induk'		=>$nomerinduk,
				'email'				=>$email,
				'program_studi'		=>$programstudi,
				'fakultas'			=>$fakultas,
				'universitas'		=>$universitas,
				'alamat'			=>$alamat,
				'id_kategori' 		=>$kategori,
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
				'status'			=> "draf",
				'kolom'				=> "2"

				);

		$data = $this->webmodel->insert_artikel($dataartikel);

		redirect(site_url('web/dasboard'));


			}elseif ($_POST['submit'] == 'cancel' ) {

				redirect(site_url('web/dasboard'));
			}
			elseif ($_POST['submit']== 'pratinjauone') {

			
			$judul   			= $_POST['judul'];
			$penulis 			= $_POST['namapenulis'];
			$nomer 				= $_POST['nomerinduk'];
			$email   			= $_POST['email'];
			$programstudi 		= $_POST['programstudi'];
			$fakultas 			= $_POST['fakultas'];
			$universitas		= $_POST['universitas'];
			$alamat				= $_POST['alamat'];
			$kategori 			= $_POST['kategori'];
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

			 	
			 	'judul'	  			=> $judul,
			 	'namapenulis' 		=> $penulis,
			 	'nomerinduk'  		=> $nomer,
			 	'email' 			=> $email,
			 	'programstudi' 		=> $programstudi,
			 	'fakultas' 			=> $fakultas,
			 	'universitas'		=> $universitas,
			 	'alamat' 			=> $alamat,
			 	'idkategori' 		=> $kategori,
			 	'katakunci' 		=> $katakunci,
			 	'abstrak' 			=> $abstrak,
			 	'pendahuluan'		=> $pendahuluan,
			 	'kajianpustaka' 	=> $kajianpustaka,
			 	'landasanteori' 	=> $landasanteori,
			 	'metodepenelitian'	=> $metodepenelitian,
			 	'pembahasan'		=> $pembahasan,
			 	'penutup'			=> $penutup,
			 	'daftarpustaka'		=> $daftarpustaka,



			 	);


			 $this->session->set_userdata('active', 'true');
			 $this->session->set_userdata($datasesion);
			 redirect(site_url('Web/penulis'));

			}
	     }

	     public function hapuspenulis($id)
	     {
	     	$this->webmodel->hapuspenulisbaru($id);
	     	redirect(site_url('web/penulisbaru'));
	     }

	     public function hapus($id)
	     {	
	     	$this->webmodel->hapus($id);
	     	redirect(site_url('web/redaksi'));
	     }

	     public function hapusartikelpenulis($id)
	     {
	     	$this->webmodel->hapus($id);
	     	redirect(site_url('web/dasboard'));

	     }

	     public function aktifkanuser($id)
	     {
	     	$this->webmodel->updateaktifuser($id);
	     	redirect('web/redaksi');

	     	
	     }

	     public function editjurnal($id)
	     {
	     	$idnya = array('id_artikel' => $id);
	     	$dataedit['dataeditjurnal'] = $this->webmodel->editjurnal($idnya,'artikel')->result();

	     	$this->template->kelima('V_editjurnal',$dataedit);
	     }

	     public function penulis()
	     {
	     	
	     	$this->template->kelima('V_halmenuliscoba');
	     }	

	     public function login()
	     {

	     	// Fungsi Login
			$valid = $this->form_validation;
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$valid->set_rules('username','username','required');
			$valid->set_rules('password','Password','required');
			if($valid->run()) {
			$this->simple_login->login($username,$password, site_url('web/dasboard'), site_url('login'));
			}
			$this->load->view('V_login');
			// End fungsi login


	     }
	     public function logout() {
		 $this->simple_login->logout(); 
		 }

	     public function editdraf($id)

	     {	
	     	
	     	$where = array('id_artikel' => $id);
	     	$dataedit['dataeditjurnal'] = $this->webmodel->editdrafjurnal($where,'artikel')->result();
	     	$this->template->kelima('V_editdraf',$dataedit);
	     }

	     public function editrevisi($id)
	     {
	     	$where = array('id_artikel' => $id);
	     	$dataedit['dataeditrevisi'] = $this->webmodel->editrevisijurnal($where,'artikel')->result();
	     	$this->template->kelima('V_editrevisi',$dataedit);
	     }

	     public function foldersave()
	     {
	     	$this->load->database();
			$jumlahdata = $this->webmodel->jumlahdata();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/web/foldersave';
			$config['total_rows'] = $jumlahdata;
			$config['per_page'] = 5;
			$from =$this->uri->segment(3);
			$this->pagination->initialize($config);

	     	$data['datasave'] = $this->webmodel->tampildatasave($config['per_page'],$from);
			$this->template->kelima('V_foldersave',$data);
	     }

	     public function folderreview()
	     {
	     	$this->load->database();
			$jumlahdata = $this->webmodel->jumlahdata();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'index.php/web/foldereview';
			$config['total_rows'] = $jumlahdata;
			$config['per_page'] = 5;
			$from =$this->uri->segment(3);
			$this->pagination->initialize($config);

	     	$data['datareview'] = $this->webmodel->tampilwaitingreview($config['per_page'],$from);
			$this->template->kelima('V_folderreview',$data);
	     }
	  
		public function aksilogin()
		{
			 
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$datalogin = array(

				'username'=>$username,
				'password'=>$password

				);

			$data=$this->mlogin->login($datalogin);
			if ($data!=0) {

			$datalevel=$this->mlogin->level($datalogin);
			$level=$datalevel->level;

				if ($level=='pembaca') {
					
					redirect(site_url('web/pembaca'));

				} elseif ($level=='redaksi') {

					redirect(site_url('web/redaksi'));
				} elseif ($level=='riviewer') {
					
					redirect(site_url('web/riviewer'));
				}else {

					redirect(site_url('web/login'));
				}

				
			} else{
				echo "login gagal";
			}


			
		}

	}



