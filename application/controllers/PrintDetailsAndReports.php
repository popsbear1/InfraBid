<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PrintDetailsAndReports extends CI_Controller {
  
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->model('admin_model');
        $this->load->library("Pdf");
    }
  
    public function print_regular_projects() {
        $year = $this->input->get('year_filter');
		$quarter = $this->input->get('quarter_filter');
		$status = $this->input->get('status_filter');
		$municipality = $this->input->get('municipality_filter');
		$source = $this->input->get('source_filter');
		$type = $this->input->get('type_filter');

		if (empty($year)) {
			$year = null;
		}
		if (empty($quarter)) {
			$quarter = null;
		}
		if (empty($status)) {
			$status = null;
		}
		if (empty($municipality)) {
			$municipality = null;
		}
		if(empty($source)) {
			$source = null;
		}
		if(empty($type)){
			$type = null;
		}

		$data['plans'] = $this->admin_model->getRegularProjectPlan($year, $quarter, $status, $municipality, $source, $type);

		$this->load->view('print/projectDetailstoPDF', $data);
    }
}