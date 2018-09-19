<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Reports extends CI_Controller
	{
		
		public function __construct()
	    {
	        parent::__construct();
	        $this->load->add_package_path( APPPATH . 'third_party/fpdf');
	        $this->load->library('pdf');
	        $this->load->model('admin_model');
	    }

		public function printApp()
		{

			$year = $this->input->get('year_value');
			$apptype = $this->input->get('apptype_value');
			$status = $this->input->get('status_value');
			$municipality = $this->input->get('municipality_value');
			$source = $this->input->get('source_value');
			$type = $this->input->get('type_value');

			$data = $this->admin_model->getOngoingProjectPlan($year, $apptype, $status, $municipality, $source, $type);

	        $this->pdf = new Pdf();
	        $this->pdf->Add_Page('L',array(215.9, 330.2),0);
	        $this->pdf->AliasNbPages();

	        $header = array('No.', 'PROJ. NO.', 'PROCUREMENT PROGRAMS/PROJECTS', 'PMO/END USER/LOCATION', 'MODE OF PROCUREMENT', 'ABC/POST OF IB/REI', 'SUB/OPEN OF BIDS', 'NOTICE OF AWARDS', 'CONTRACT SIGNING', 'SOURCE OF FUNDS', 'TOTAL', 'MOOE', 'CO', 'REMARKS');

	        foreach($header as $col)
		        $this->pdf->Cell(22,7,$col,1);
		    $this->pdf->Ln();

		    foreach ($data as $row) {
		    	foreach($row as $col)
		            $this->pdf->Cell(22,6,$col,1);
		        $this->pdf->Ln();
		    }
	        
	        $this->pdf->Output( 'page.pdf' , 'I' );

	        

		}
	}

?>