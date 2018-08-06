<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PrintDetailsAndReports extends CI_Controller {
  
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->model('admin_model');
        $this->load->model('session_model');
        $this->load->library("Pdf");
    }
  
    public function create_pdf() {
        
    }
}
 