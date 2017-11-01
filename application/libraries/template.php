<?php

	class Template {
		protected $_ci ;

		function __construct()
		{
			$this->_ci = &get_instance();
		}

				
		public function reviewtmp($konten, $data = NULL)
		{
			$data['navbar']		= $this->_ci->load->view('template/navbarreviewer', $data, TRUE);
			$data['konten'] 	= $this->_ci->load->view( $konten, $data, TRUE);
			$data['sidebar']	= $this->_ci->load->view('template/sidebarreview',$data, TRUE);
		
			

			$this->_ci->load->view('template/mainkoreksi', $data);
		}
		 function riviewtmp($konten, $data = NULL)
		{
			$data['navbar']  = $this->_ci->load->view('template/navbarriview',$data, TRUE);
			$data['konten']  = $this->_ci->load->view($konten, $data, TRUE);
			

			$this->_ci->load->view('template/mainriview', $data);

		}

		 function utama($konten, $data = NULL)
		{	

			$data['navbar']= $this->_ci->load->view('template/navbar',$data, TRUE);
			$data['konten']= $this->_ci->load->view($konten, $data, TRUE);
			$data['footer']= $this->_ci->load->view('template/footer',$data,TRUE);

			$this->_ci->load->view('template/main', $data);
		}


		function kedua($konten, $data = NULL)
		{
			$data['navbar']	= $this->_ci->load->view('template/navbarlogin',$data, TRUE);
			$data['konten']	= $this->_ci->load->view($konten, $data, TRUE);
			$data['footer']	= $this->_ci->load->view('template/footer',$data,TRUE);

			$this->_ci->load->view('template/main', $data);
		}

		 function ketiga($konten, $data = NULL)
		{
			$data['navbar'] = $this->_ci->load->view('template/navbardasboard',$data, TRUE);
			$data['konten']	= $this->_ci->load->view($konten, $data, TRUE);
			$data['footer']	= $this->_ci->load->view('template/footer',$data,TRUE);

			$this->_ci->load->view('template/main',$data);
		}
		
		public function keempat($konten, $data = NULL)
		{
			$data['navbar']		= $this->_ci->load->view('template/navbarpratinjau', $data, TRUE);
			$data['konten'] 	= $this->_ci->load->view( $konten, $data, TRUE);
			$data['sidebar']	= $this->_ci->load->view('template/sidebarpratinjau',$data, TRUE);
			

			$this->_ci->load->view('template/mainpratinjau', $data);
		} 

		public function kelima($konten, $data = NULL)
		{
			$data['navbar']		= $this->_ci->load->view('template/navbardasboard', $data, TRUE);
			$data['konten']		= $this->_ci->load->view($konten, $data , TRUE);

			$this->_ci->load->view('template/maintuliscoba', $data);

		}

		public function keenam($konten, $data = NULL)
		{
			$data['navbar']		= $this->_ci->load->view('template/navbarredaksi', $data, TRUE);
			$data['detail']	= $this->_ci->load->view('template/detailpenulis', $data, TRUE);
			$data['konten']		= $this->_ci->load->view($konten, $data, TRUE);

			$this->_ci->load->view('template/maindasboard',$data);
		}

		public function baca( $navbar,$konten, $data = NULL)
		{
			$data['navbar']		= $this->_ci->load->view($navbar, $data, TRUE);
			$data['komentar']	= $this->_ci->load->view('template/komentar', $data, TRUE);
			$data['konten'] 	= $this->_ci->load->view( $konten, $data, TRUE);
			$data['sidebar']	= $this->_ci->load->view('template/sidebar',$data, TRUE);
			
			$this->_ci->load->view('template/mainbaca', $data);
		}
	
	}
?>