   <?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	  class Baca extends CI_Controller
	 {
	  	
	  		function __construct() {
			parent::__construct();
			$this->load->model('webmodel');
			$this->load->library('template');
		}


		// Baca 1 kolom no login

		   
		  
		  
			public function juduljurnal1($id)
		{

				
			    $tambah = $this->db->get_where('artikel',array('id_artikel'=>$id))->row();
                $view = $tambah->view;
				$jumlah = $view + 1;
				$this->db->where('id_artikel',$id);
				$this->db->set('view',$jumlah);
			    $this->db->update('artikel');
			    
				
				$cari = $this->input->get('cari');
				$datacari['carikata'] = $this->webmodel->carikata($cari);

			    $data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			      $iduser = $id = $this->session->userdata('id');
			      if ($iduser == 0) {
			      	$this->template->baca('V_navbarnologin1kolom','baca1kolom/V_juduljurnal',$data,$datacari);
			      } else {
			      	$this->template->baca('V_navbarlogin','baca1kolom/V_juduljurnal',$data,$datacari);
			      }
		}

			public function pendahuluan1($id)
		{	
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			 $iduser = $id = $this->session->userdata('id');
			      if ($iduser == 0) {
			      	$this->template->baca('V_navbarnologin1kolom','baca1kolom/V_pendahuluan',$data);
			      } else {
			      	$this->template->baca('V_navbarlogin','baca1kolom/V_pendahuluan',$data);
			      }
    		}	

			public function kajianpustaka1($id)
		{
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			 $iduser = $id = $this->session->userdata('id');
			      if ($iduser == 0) {
			      	$this->template->baca('V_navbarnologin1kolom','baca1kolom/V_kajianpustaka',$data);
			      } else {
			      	$this->template->baca('V_navbarlogin','baca1kolom/V_kajianpustaka',$data);
			      }
		}

			public function landasanteori1($id)
		{
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			 $iduser = $id = $this->session->userdata('id');
			      if ($iduser == 0) {
			      	$this->template->baca('V_navbarnologin1kolom','baca1kolom/V_landasanteori',$data);
			      } else {
			      	$this->template->baca('V_navbarlogin','baca1kolom/V_landasanteori',$data);
			      }
		}
			public function metodepenelitian1($id)
		{
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			 $iduser = $id = $this->session->userdata('id');
			      if ($iduser == 0) {
			      	$this->template->baca('V_navbarnologin1kolom','baca1kolom/V_metodepenelitian',$data);
			      } else {
			      	$this->template->baca('V_navbarlogin','baca1kolom/V_metodepenelitian',$data);
			      }
		}

			public function pembahasan1($id)
		{
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			 $iduser = $id = $this->session->userdata('id');
			      if ($iduser == 0) {
			      	$this->template->baca('V_navbarnologin1kolom','baca1kolom/V_pembahasan',$data);
			      } else {
			      	$this->template->baca('V_navbarlogin','baca1kolom/V_pembahasan',$data);
			      }
		}

			public function penutup1($id)
		{
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			 $iduser = $id = $this->session->userdata('id');
			      if ($iduser == 0) {
			      	$this->template->baca('V_navbarnologin1kolom','baca1kolom/V_penutup',$data);
			      } else {
			      	$this->template->baca('V_navbarlogin','baca1kolom/V_penutup',$data);
			      }
		}

			public function daftarpustaka1($id)
		{
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			 $iduser = $id = $this->session->userdata('id');
			      if ($iduser == 0) {
			      	$this->template->baca('V_navbarnologin1kolom','baca1kolom/V_daftarpustaka',$data);
			      } else {
			      	$this->template->baca('V_navbarlogin','baca1kolom/V_daftarpustaka',$data);
			      }
		}

	

		// baca jurnal 2 kolom

		public function baca2($id)
		{
			$tambah = $this->db->get_where('artikel',array('id_artikel'=>$id))->row();
                $view = $tambah->view;
				$jumlah = $view + 1;
				$this->db->where('id_artikel',$id);
				$this->db->set('view',$jumlah);
			    $this->db->update('artikel');

			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			$iduser = $id = $this->session->userdata('id');
			if ($iduser == 0) {
				$this->template->baca('V_navbarnologin','baca2kolom/V_baca2kolom',$data);
			}else {
			$this->template->baca('V_navbarlogin2kolom','baca2kolom/V_baca2kolom',$data);	
			}
		}

		public function baca2kolom($id)
		{
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);

			$queryjudul   = $this->db->get_where('artikel',array('id_artikel'=>$id))->row();
			$namakategori = $queryjudul->id_kategori;
			$hasil   = $this->db->get_where('kategori',array('id_kategori'=>$namakategori))->row();
			$katjurnal = $hasil->nama_kategori;

			$html = '
			<pageheader name="myHeaderNoNum" content-left="Jurnal '.$katjurnal.'" content-center="" content-right="Vol.'.$queryjudul->vol.' No.'.$queryjudul->nomer.', '.$queryjudul->bulan.' '.$queryjudul->tahun.'"
		    header-style="font-family:sans-serif; font-size:10pt; color:#000000;" header-style-right="font-size:10pt; font-weight:bold; font-style:italic; color:#000000;" line="on" />
			<setpageheader name="myHeaderNoNum" page="O" value="on" show-this-page="1" />' ;


			$this->load->library('M_pdf');
		    $pdf = $this->m_pdf->load();
		     $pdf->SetDisplayMode(160);
    	    

    	
    	    $pdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list

		    $pdf->max_colH_correction = 1.1;

		    $pdf->WriteHTML($html,2);
		   
		     $pdf->WriteHTML($this->load->view('pratinjau2kolom/V_judul',$data, true),2);  
			$pdf->WriteHTML($this->load->view('pratinjau2kolom/V_abstrak',$data, true),2);

		    // consider reducing lineheight when using columns - especially if vAligned justify
		    $pdf->SetDefaultBodyCSS('line-height', 1.2);
		    $pdf->SetColumns(2,'J');

		    $pdf->WriteHTML($this->load->view('pratinjau2kolom/V_pendahuluan',$data, true),2);
		    $pdf->WriteHTML($this->load->view('pratinjau2kolom/V_daftarpustaka',$data, true),2);
    	    $pdf->Output();   
		}

}  

