<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	  class Review extends CI_Controller
	  {
	  	
	  		function __construct() {
			parent::__construct();
			$this->load->model('webmodel');
			$this->load->library('template');
		}

		public function perbaikan()
		{

			$id 			=	$this->input->post('idartikel');
	     	$uraian			=	$this->input->post('perbaikan');

	     	$dataperbaikan 	= array(

	     		'uraianperbaikan' => $uraian,

	     		);

				$where = array(

				'id_artikel' => $id

				);


				$data = $this->webmodel->uraianperbaikan($dataperbaikan,$where);
				$this->session->set_userdata($dataperbaikan);
				redirect(site_url('review/juduljurnal1').'/'.$id );

	     
		}

		// pratinjau 1 kolom



			public function juduljurnal1($id)
		{
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			$this->template->reviewtmp('review/V_juduljurnal',$data);
		}

			public function pendahuluan1($id)
		{	
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			$this->template->reviewtmp('review/V_pendahuluan',$data);	
		}	

			public function kajianpustaka1($id)
		{
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			$this->template->reviewtmp('review/V_kajianpustaka',$data);
		}

			public function landasanteori1($id)
		{
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			$this->template->reviewtmp('review/V_landasanteori',$data);
		}
			public function metodepenelitian1($id)
		{
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			$this->template->reviewtmp('review/V_metodepenelitian',$data);
		}

			public function pembahasan1($id)
		{
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			$this->template->reviewtmp('review/V_pembahasan',$data);
		}

			public function penutup1($id)
		{
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			$this->template->reviewtmp('review/V_penutup',$data);
		}

			public function daftarpustaka1($id)
		{
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
			$this->template->reviewtmp('review/V_daftarpustaka',$data);
		}

		//pratinjau jurnal 2 kolom
		public function Pratinjau($id)

		{
			$data['datajurnal'] = $this->webmodel->tampiljurnal($id);
	
			
			$html = '
			<pageheader name="myHeaderNoNum" content-left="JURNAL" content-center="" content-right="Pratinjau" header-style="font-family:sans-serif; font-size:10pt; color:#000000;" header-style-right="font-size:10pt; font-weight:bold; font-style:italic; color:#000000;" line="on" />
			<setpageheader name="myHeaderNoNum" page="O" value="on" show-this-page="1" />' ;


			$this->load->library('M_pdf');
		    $pdf = $this->m_pdf->load();
    	    $pdf->SetDisplayMode('fullpage');

    	
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
