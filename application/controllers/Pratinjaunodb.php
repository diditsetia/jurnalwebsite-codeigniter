<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Pratinjaunodb extends CI_Controller
	{

			function __construct() {
			parent::__construct();
			$this->load->library('template');
			$this->load->library('session');
		}

		
		// pratinjau no db 2 kolom 

		public function Pratinjau()
		{
			     $idkategori = $this->session->userdata('idkategori');
				 $querykategori = $this->db->get_where('kategori',array('id_kategori'=>$idkategori))->row();
				$hasil = $querykategori->nama_kategori;
				
			if ($session_id = $this->session->userdata('status') == 'Waiting' && $session_id = $this->session->userdata('status') == 'post') {

				$html = '
			<pageheader name="myHeaderNoNum" content-left="Pratinjau Jurnal '.$hasil.'" content-center="" content-right="Vol.'.$this->session->userdata('vol').' No.'.$this->session->userdata('nomer').', '.$this->session->userdata('bulan').' '.$this->session->userdata('tahun').'" header-style="font-family:sans-serif; font-size:10pt; color:#000000;" header-style-right="font-size:10pt; font-weight:bold; font-style:italic; color:#000000;" line="on" />
			<setpageheader name="myHeaderNoNum" page="O" value="on" show-this-page="1" />' ;


			$this->load->library('M_pdf');
		    $pdf = $this->m_pdf->load();
    	    $pdf->SetDisplayMode(200);

    	
    	    $pdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list

		    $pdf->max_colH_correction = 1.1;

		    $pdf->WriteHTML($html,2);
		     $pdf->WriteHTML($this->load->view('pratinjau2nodb/V_judul', array(), true),2);  
			$pdf->WriteHTML($this->load->view('pratinjau2nodb/V_abstrak', array(), true),2);

		    // consider reducing lineheight when using columns - especially if vAligned justify
		    $pdf->SetDefaultBodyCSS('line-height', 1.2);
		    $pdf->SetColumns(2,'J');
		    $pdf->WriteHTML($this->load->view('pratinjau2nodb/V_pendahuluan', array(), true),2);
		    $pdf->WriteHTML($this->load->view('pratinjau2nodb/V_daftarpustaka', array(), true),2);
    	    $pdf->Output();

			}else {
			$html = '
			<pageheader name="myHeaderNoNum" content-left="JURNAL" content-center="" content-right="Pratinjau" header-style="font-family:sans-serif; font-size:10pt; color:#000000;" header-style-right="font-size:10pt; font-weight:bold; font-style:italic; color:#000000;" line="on" />
			<setpageheader name="myHeaderNoNum" page="O" value="on" show-this-page="1" />' ;


			$this->load->library('M_pdf');
		    $pdf = $this->m_pdf->load();
    	    $pdf->SetDisplayMode(200);

    	
    	    $pdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list

		    $pdf->max_colH_correction = 1.1;

		    $pdf->WriteHTML($html,2);
		     $pdf->WriteHTML($this->load->view('pratinjau2nodb/V_judul', array(), true),2);  
			$pdf->WriteHTML($this->load->view('pratinjau2nodb/V_abstrak', array(), true),2);

		    // consider reducing lineheight when using columns - especially if vAligned justify
		    $pdf->SetDefaultBodyCSS('line-height', 1.2);
		    $pdf->SetColumns(2,'J');
		    $pdf->WriteHTML($this->load->view('pratinjau2nodb/V_pendahuluan', array(), true),2);
		    $pdf->WriteHTML($this->load->view('pratinjau2nodb/V_daftarpustaka', array(), true),2);
    	    $pdf->Output();

    	   }

		}
		// pratinjau 1 kolom

		public function judul1()
		{
			$this->template->keempat('pratinjau1nodb/V_juduljurnal');
		}
		public function pendahuluan1()
		{
			
			$this->template->keempat('pratinjau1nodb/V_pendahuluan');
		}

			public function kajianpustaka1()
		{
			$this->template->keempat('pratinjau1nodb/V_kajianpustaka');
		}

			public function landasanteori1()
		{
			$this->template->keempat('pratinjau1nodb/V_landasanteori');
		}
			public function metodepenelitian1()
		{
			$this->template->keempat('pratinjau1nodb/V_metodepenelitian');
		}

			public function pembahasan1()
		{
			$this->template->keempat('pratinjau1nodb/V_pembahasan');
		}

			public function penutup1()
		{
			$this->template->keempat('pratinjau1nodb/V_penutup');
		}

			public function daftarpustaka1()
		{

			$this->template->keempat('pratinjau1nodb/V_daftarpustaka');
		}

		

	}
