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
	        $this->load->add_package_path(APPPATH. 'controllers/cellfit');
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

	        
	        $this->pdf->setFont('Times', 'B', '8');
	        
	        $this->pdf->Cell(10, 20, 'No.', 1, 0, 'C');
	        $xPosition = $this->pdf->GetX();
	        $yPosition = $this->pdf->GetY();
	        
	        $this->pdf->MultiCell(11, 10, 'PROJ. NO.', 1, 'C');
	        $this->pdf->SetXY($xPosition + 11, $yPosition);
	        
	        $this->pdf->Cell(60, 20, 'PROCUREMENT PROGRAMS/PROJECTS', 1, 0, 'C');
	        $xPosition = $this->pdf->GetX();
	        $yPosition = $this->pdf->GetY();
	        
	        $this->pdf->MultiCell(20, 20/3, 'PMO/END USER/ LOCATION', 1, 'C');
	        $this->pdf->SetXY($xPosition + 20, $yPosition);
	        $xPosition = $this->pdf->GetX();
	        $yPosition = $this->pdf->GetY();
	        
	        $this->pdf->MultiCell(20, 20/3, 'MODE OF PROCURE -MENT', 1, 'C');
	        $this->pdf->SetXY($xPosition + 20, $yPosition);
	        
	        $this->pdf->Cell(80, 10, 'SCHEDULE FOR EACH PROCUREMENT ACTIVITY', 1, 0, 'C');
	        $this->pdf->SetXY($xPosition + 20, $yPosition + 10);
	        $xPosition = $this->pdf->GetX();
	        $yPosition = $this->pdf->GetY();
	        
	        $this->pdf->MultiCell(20, 5, 'ADS/POST OF IB/REI', 1, 'C');
	        $this->pdf->SetXY($xPosition + 20, $yPosition);
	        $xPosition = $this->pdf->GetX();
	        $yPosition = $this->pdf->GetY();

	        $this->pdf->MultiCell(20, 5, 'SUB/OPEN OF BIDS', 1, 'C');
	        $this->pdf->SetXY($xPosition + 20, $yPosition);
	        $xPosition = $this->pdf->GetX();
	        $yPosition = $this->pdf->GetY();

	        $this->pdf->MultiCell(20, 5, 'NOTICE OF AWARD', 1, 'C');
	        $this->pdf->SetXY($xPosition + 20, $yPosition);
	        $xPosition = $this->pdf->GetX();
	        $yPosition = $this->pdf->GetY();

	        $this->pdf->MultiCell(20, 5, 'CONTRACT SIGNING', 1, 'C');
	        $this->pdf->SetXY($xPosition + 20, $yPosition - 10);
	        $xPosition = $this->pdf->GetX();
	        $yPosition = $this->pdf->GetY();
	        

	        $this->pdf->MultiCell(20, 10, 'SOURCE OF FUNDS', 1, 'C');
	        $this->pdf->SetXY($xPosition + 20, $yPosition);

	        $this->pdf->Cell(60, 10, 'ESTIMATED BUDGET (PhP)', 1, 0, 'C');
	        $this->pdf->SetXY($xPosition + 20, $yPosition + 10);
	        $xPosition = $this->pdf->GetX();
	        $yPosition = $this->pdf->GetY();
	        
	        $this->pdf->Cell(20, 10, 'TOTAL', 1, 0, 'C');
	        $this->pdf->SetXY($xPosition + 20, $yPosition);
	        $xPosition = $this->pdf->GetX();
	        $yPosition = $this->pdf->GetY();

	        $this->pdf->Cell(20, 10, 'MOOE', 1, 0, 'C');
	        $this->pdf->SetXY($xPosition + 20, $yPosition);
	        $xPosition = $this->pdf->GetX();
	        $yPosition = $this->pdf->GetY();

	        $this->pdf->Cell(20, 10, 'CO', 1, 0, 'C');
	        $this->pdf->SetXY($xPosition + 20, $yPosition - 10);
	        $xPosition = $this->pdf->GetX();
	        $yPosition = $this->pdf->GetY();

	        $this->pdf->Cell(25, 20, 'REMARKS', 1, 0, 'C');

	        $this->pdf->Ln();

	        $this->pdf->setFont('Times', '', '8');

		    foreach ($data as $row) {
		    	$count = 1;
		    	$this->pdf->Cell(10,10,$count,1,0,'C');
		    	$count++;
		    	$this->pdf->Cell(11, 10, $row['project_no'], 1, 0, 'C');
		    	$this->pdf->Cell(60, 10, $row['project_title'], 1, 0, 'C');
		    	$this->pdf->Cell(20, 10, $row['municipality'], 1, 0, 'C');
		    	$this->pdf->Cell(20, 10, $row['mode'], 1, 0, 'C');
		    	$this->pdf->Cell(20, 10, $row['abc_post_date'], 1, 0, 'C');
		    	$this->pdf->Cell(20, 10, $row['sub_open_date'], 1, 0, 'C');
		    	$this->pdf->Cell(20, 10, $row['award_notice_date'], 1, 0, 'C');
		    	$this->pdf->Cell(20, 10, $row['contract_signing_date'], 1, 0, 'C');
		    	$this->pdf->Cell(20, 10, $row['source'], 1, 0, 'C');
		    	$this->pdf->Cell(20, 10, $row['abc'], 1, 0, 'C');
		    	$this->pdf->Cell(20, 10, 'none', 1, 0, 'C');
		    	$this->pdf->Cell(20, 10, 'none', 1, 0, 'C');
		    	$this->pdf->Cell(25, 10, 'none', 1, 0, 'C');

		    	$this->pdf->Ln();
		        	
		    }
	        
	        $this->pdf->Output( 'page.pdf' , 'I' );

	        

		}
	}

?>