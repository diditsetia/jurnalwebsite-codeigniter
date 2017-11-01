<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Duakolom extends CI_Controller {


	public function index(){

		$this->load->library('M_pdf');
		$pdf = $this->m_pdf->load();
    	$pdf->SetDisplayMode('fullpage');
    	
    	$pdf->list_indent_first_level = 0;	// 1 or 0 - whether to indent the first level of a list

		$pdf->max_colH_correction = 1.1;

		// consider reducing lineheight when using columns - especially if vAligned justify
		$pdf->SetDefaultBodyCSS('line-height', 1.2);
		$pdf->SetColumns(2,'J');
		$pdf->WriteHTML($this->load->view('duakolom', array(), true),2);
    	$pdf->Output();
	}
}
