<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class m_pdf {
    function __construct()
    {
        $CI = & get_instance();
    }

    function load()
    {

      include_once APPPATH.'/third_party/vendor/autoload.php';
      $mpdf = new mPDF();
      
      // $mpdf = new mPDF([
      //       'mode' => 'c',
      //       'margin_left' => 32,
      //       'margin_right' => 25,
      //       'margin_top' => 27,
      //       'margin_bottom' => 25,
      //       'margin_header' => 16,
      //       'margin_footer' => 13
      //   ]);
      return $mpdf;
    }
}
