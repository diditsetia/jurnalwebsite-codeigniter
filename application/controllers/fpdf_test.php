<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fpdf_test extends CI_Controller {

	/**
	 * Example: FPDF 
	 *
	 * Documentation: 
	 * http://www.fpdf.org/ > Manual
	 *
	 */
	public function index() {	
		$this->load->view('pratinjau2kolom/V_pdfcoba');
	}
}
