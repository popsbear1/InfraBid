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

			$data = $this->admin_model->getOngoingProjectPlanPrinting($year, $apptype, $status, $municipality, $source, $type);

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

	        $count = 1;

		    for ( $i = 0; $i < sizeof($data); $i++) {
		    	
		    	
		    	// if ($this->pdf->GetStringWidth($data[$i]['project_no']) > 11) {
		    	// 	$xPosition = $this->pdf->GetX();
	      //   		$yPosition = $this->pdf->GetY();

	      //   		$this->pdf->MultiCell(11, 5, $data[$i]['project_no'], 1, 'C');
	      //   		$this->pdf->SetXY($xPosition + 11, $yPosition);
		    	// }
		    	$row = array(
		    		$count,
		    		$data[$i]['project_no'], 
		    		$data[$i]['project_title'], 
		    		$data[$i]['municipality'], 
		    		$data[$i]['mode'], 
		    		$data[$i]['abc_post_date'], 
		    		$data[$i]['sub_open_date'], 
		    		$data[$i]['award_notice_date'], 
		    		$data[$i]['contract_signing_date'], 
		    		$data[$i]['source'], 
		    		$data[$i]['abc'], 
		    		'none',
		    		'none',
		    		'none'
		    	);

		    	$rowWidth = array(
		    		10,
		    		11, 
		    		60, 
		    		20, 
		    		20, 
		    		20, 
		    		20, 
		    		20, 
		    		20, 
		    		20, 
		    		20,
		    		20,
		    		20,
		    		25
		    	);

		    	$heightArray = $this->getFinalHight($rowWidth, $row);
		    	//echo json_encode($heightArray);
		    	$height = max($heightArray) * 10;
		    	$yPosition = $this->pdf->GetY();
		    	for ($j=0; $j < sizeof($rowWidth); $j++) { 
	        		if ($heightArray[$j] > 1) {
	        			$xPosition = $this->pdf->GetX();
						//$this->pdf->SetY($height);
						
						$h = $height/$heightArray[$j];	        		

		        		$this->pdf->MultiCell($rowWidth[$j], $h, $row[$j], 1, 'C');

		        		$this->pdf->SetXY($xPosition + $rowWidth[$j], $yPosition);
	        		}else{
	        			$this->pdf->Cell($rowWidth[$j], $height, $row[$j], 1, 0, 'C');
	        		}
		    	}

		    	$count++;

		    	$this->pdf->Ln();
		        	
		    }
	        
	        $this->pdf->Output( 'page.pdf' , 'I' );        

		}

		function getFinalHight($width, $data){
			$this->pdf->setFont('Times', '', '8');
			$rowCount = array();
			for ($i=0; $i < sizeof($data); $i++) { 
				$stringWidth = $this->pdf->GetStringWidth($data[$i]);
				if ($stringWidth > $width[$i]) {
					$count = 0;
					$w = $stringWidth;
					$y = $stringWidth;
					while($y > 0){
						
						$y = $w - $width[$i];
						$w = $y;
						$count++;
					}
					array_push($rowCount, $count);
				}else{
					array_push($rowCount, 1);
				}
			}
			return $rowCount;
		}
	}

?>