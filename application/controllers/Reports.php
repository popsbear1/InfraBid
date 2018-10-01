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

	    public function printOngoingAPP(){
	    	$year = $this->input->get('year_value');
			$apptype = $this->input->get('apptype_value');
			$status = $this->input->get('status_value');
			$municipality = $this->input->get('municipality_value');
			$source = $this->input->get('source_value');
			$type = $this->input->get('type_value');

			$data = $this->admin_model->getOngoingProjectPlanPrinting($year, $apptype, $status, $municipality, $source, $type);

			$this->printApp($data);
	    }

	    public function printRegularAPP(){
	    	$year = $this->input->get('year_value');
			$mode = $this->input->get('mode_value');
			$status = $this->input->get('status_value');
			$municipality = $this->input->get('municipality_value');
			$source = $this->input->get('source_value');
			$type = $this->input->get('type_value');

			$data = $this->admin_model->getRegularPlanForPrinting($year, $mode, $status, $municipality, $source, $type);

			$this->printApp($data);
	    }

	    public function printSupplementalAPP(){
	    	$year = $this->input->get('year_value');
			$mode = $this->input->get('mode_value');
			$status = $this->input->get('status_value');
			$municipality = $this->input->get('municipality_value');
			$source = $this->input->get('source_value');
			$type = $this->input->get('type_value');

			$data = $this->admin_model->getSupplementalPlanForPrinting($year, $mode, $status, $municipality, $source, $type);

			$this->printApp($data);
	    }


		public function printApp($data)
		{

			for ($i=0; $i < sizeof($data); $i++) { 
				if ($data[$i]['classification'] == 'Capital Outlay') {
					$data[$i]['mooe'] = 0;
					$data[$i]['co'] = $data[$i]['abc'];
				}
				if ($data[$i]['classification'] == 'MOOE'){
					$data[$i]['mooe'] = $data[$i]['abc'];
					$data[$i]['co'] = 0;
				}
			}

	        $this->pdf = new Pdf();
	        $this->pdf->Add_Page('L',array(215.9, 330.2),0);
	        $this->pdf->AliasNbPages();

	        $this->tablehead();

	        $this->pdf->setFont('Times', '', '8');

	        $count = 1;
	        $currentProjectType = $data[0]['project_type'];
	        $this->projectTypeRow($data[0]['project_type']);
	        $currentAccountClass = $data[0]['fund_id'];
	        $this->fundNameRow($data[0]['source']);
	        $mooeTotal = 0; 
	        $coTotal = 0;
	        $totalAbc = 0;
	        $totalMOOE = 0;
	        $totalCO = 0;
	        $overallTotalAbc = 0;
	        $overallTotalMOOE = 0;
	        $overallTotalCO = 0;

		    for ( $i = 0; $i < sizeof($data); $i++) {

		    	if ($data[$i]['project_type'] != $currentProjectType) {
		    		$this->subTotalRow($mooeTotal, $coTotal);
		    		$this->totalRow($totalAbc, $totalMOOE, $totalCO);
		    		$this->projectTypeRow($data[$i]['project_type']);
		    		$currentProjectType = $data[$i]['project_type'];
		    		$totalAbc = 0;
			        $totalMOOE = 0;
			        $totalCO = 0;
			        $currentAccountClass = $data[$i]['fund_id'];
		    		$mooeTotal = 0;
		    		$coTotal = 0;
		    	}else{
		    		if ($data[$i]['fund_id'] != $currentAccountClass) {
		    		
			    		$this->subTotalRow($mooeTotal, $coTotal);
			    		$this->fundNameRow($data[$i]['source']);

			    		$currentAccountClass = $data[$i]['fund_id'];
			    		$mooeTotal = 0;
			    		$coTotal = 0;
			    	}
		    	}

		    	if ($data[$i]['mooe'] <= 0) {
		    		$mooe = '-';
		    	}else{
		    		$mooe = number_format($data[$i]['mooe'], 2);
		    	}

		    	if ($data[$i]['co'] <= 0) {
		    		$co = '-';
		    	}else{
		    		$co = number_format($data[$i]['co'], 2);
		    	}

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
		    		number_format($data[$i]['abc'],2), 
		    		$mooe,
		    		$co,
		    		$data[$i]['remark']
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
		    		30
		    	);

		    	$heightArray = $this->getFinalHight($rowWidth, $row, 'Times', '', '8');
		    	$height = max($heightArray) * 5;
		    	$lastCell = 'cell';
		    	
		    	for ($j=0; $j < sizeof($rowWidth); $j++) { 
	        		if ($heightArray[$j] > 1) {
	        			$yPosition = $this->pdf->GetY();
	        			$xPosition = $this->pdf->GetX();
						
						$h = $height/$heightArray[$j];	        		

		        		$this->pdf->MultiCell($rowWidth[$j], $h, $row[$j], 1, 'C');

		        		
		        		if (sizeof($rowWidth) - $j == 1) {
		        			$lastCell = 'multiCell';
		        		}else{
		        			$this->pdf->SetXY($xPosition + $rowWidth[$j], $yPosition);
		        		}
	        		}else{
	        			$this->pdf->Cell($rowWidth[$j], $height, $row[$j], 1, 0, 'C');
	        		}
		    	}

		    	$count++;

		    	if ($lastCell == 'cell') {
		    		$this->pdf->Ln();
		    	}

		    	$mooeTotal = $mooeTotal + $data[$i]['mooe'];
		    	$coTotal = $coTotal + $data[$i]['co'];

		    	$totalAbc = $totalAbc + $data[$i]['abc'];
		    	$totalMOOE = $totalMOOE + $data[$i]['mooe'];
		    	$totalCO = $totalCO + $data[$i]['co'];

		    	$overallTotalAbc = $overallTotalAbc + $data[$i]['abc'];
		        $overallTotalMOOE = $overallTotalMOOE + $data[$i]['mooe'];
		        $overallTotalCO = $overallTotalCO + $data[$i]['co'];

		        	
		    }

		    $this->subTotalRow($mooeTotal, $coTotal);
		    $this->totalRow($totalAbc, $totalMOOE, $totalCO);
		    $this->grandTotalRow($overallTotalAbc, $overallTotalMOOE, $overallTotalCO);
	        
	        $this->pdf->Output( 'page.pdf' , 'I' );        

		}

		function tablehead(){
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

	        $this->pdf->Cell(30, 20, 'REMARKS', 1, 0, 'C');

	        $this->pdf->Ln();
		}

		function subTotalRow($mooeTotal, $coTotal){
			
			if ($mooeTotal > 0) {
				$formatedMooeTotal = number_format($mooeTotal, 2);
			}else{
				$formatedMooeTotal = '-';
			}

			if ($coTotal > 0) {
				$formatedCoTotal = number_format($coTotal, 2);
			}else{
				$formatedCoTotal = '-';
			}

			$row = array(
	    		'',
	    		'',
	    		'SUB TOTAL',
	    		'',
	    		'',
	    		'',
	    		'',
	    		'',
	    		'',
	    		'',
	    		'',
	    		$formatedMooeTotal,
	    		$formatedCoTotal,
	    		''
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
	    		30
	    	);				

    		$heightArray = $this->getFinalHight($rowWidth, $row, 'Times', 'B', '8');
	    	$height = max($heightArray) * 5;
	    	
	    	for ($j=0; $j < sizeof($rowWidth); $j++) { 
        		if ($heightArray[$j] > 1) {
        			$yPosition = $this->pdf->GetY();
        			$xPosition = $this->pdf->GetX();
					
					$h = $height/$heightArray[$j];	        		

	        		$this->pdf->MultiCell($rowWidth[$j], $h, $row[$j], 1, 'R');

	        		$this->pdf->SetXY($xPosition + $rowWidth[$j], $yPosition);
        		}else{
        			$this->pdf->Cell($rowWidth[$j], $height, $row[$j], 1, 0, 'R');
        		}
	    	}
	    	$this->pdf->setFont('Times', '', '8');
    		$this->pdf->Ln();
		}

		function totalRow($totalAbc, $totalMOOE, $totalCO){
			
			if ($totalMOOE > 0) {
				$formatedMooeTotal = number_format($totalMOOE, 2);
			}else{
				$formatedMooeTotal = '-';
			}

			if ($totalCO > 0) {
				$formatedCoTotal = number_format($totalCO, 2);
			}else{
				$formatedCoTotal = '-';
			}			

    		$row = array(
	    		'',
	    		'',
	    		'TOTAL',
	    		'',
	    		'',
	    		'',
	    		'',
	    		'',
	    		'',
	    		'',
	    		number_format($totalAbc),
	    		$formatedMooeTotal,
	    		$formatedCoTotal,
	    		''
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
	    		30
	    	);

	    	$heightArray = $this->getFinalHight($rowWidth, $row, 'Times', 'B', '8');
	    	$height = max($heightArray) * 5;
	    	
	    	for ($j=0; $j < sizeof($rowWidth); $j++) { 
        		if ($heightArray[$j] > 1) {
        			$yPosition = $this->pdf->GetY();
        			$xPosition = $this->pdf->GetX();
					
					$h = $height/$heightArray[$j];	        		

	        		$this->pdf->MultiCell($rowWidth[$j], $h, $row[$j], 1, 'R');

	        		$this->pdf->SetXY($xPosition + $rowWidth[$j], $yPosition);
        		}else{
        			$this->pdf->Cell($rowWidth[$j], $height, $row[$j], 1, 0, 'R');
        		}
	    	}

	    	$this->pdf->setFont('Times', '', '8');
    		$this->pdf->Ln();	
		}

		function grandTotalRow($overallTotalAbc, $overallTotalMOOE, $overallTotalCO){
			
			if ($overallTotalMOOE > 0) {
				$formatedMooeTotal = number_format($overallTotalMOOE, 2);
			}else{
				$formatedMooeTotal = '-';
			}

			if ($overallTotalCO > 0) {
				$formatedCoTotal = number_format($overallTotalCO, 2);
			}else{
				$formatedCoTotal = '-';
			}			


    		$row = array(
	    		'',
	    		'',
	    		'Grand TOTAL',
	    		'',
	    		'',
	    		'',
	    		'',
	    		'',
	    		'',
	    		'',
	    		number_format($overallTotalAbc),
	    		$formatedMooeTotal,
	    		$formatedCoTotal,
	    		''
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
	    		30
	    	);

	    	$heightArray = $this->getFinalHight($rowWidth, $row, 'Times', 'B', '10');
	    	$height = max($heightArray) * 5;
	    	
	    	for ($j=0; $j < sizeof($rowWidth); $j++) { 
        		if ($heightArray[$j] > 1) {
        			$yPosition = $this->pdf->GetY();
        			$xPosition = $this->pdf->GetX();
					
					$h = $height/$heightArray[$j];	        		

	        		$this->pdf->MultiCell($rowWidth[$j], $h, $row[$j], 1, 'R');

	        		$this->pdf->SetXY($xPosition + $rowWidth[$j], $yPosition);
        		}else{
        			$this->pdf->Cell($rowWidth[$j], $height, $row[$j], 1, 0, 'R');
        		}
	    	}

    		$this->pdf->setFont('Times', '', '8');
    		$this->pdf->Ln();
		}

		function fundNameRow($fund){
			$this->pdf->setFont('Times', 'B', '8');
						
			$this->pdf->Cell(10, 5, '', 1, 0, 'C');
			$this->pdf->Cell(11, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(60, 5, $fund, 1, 0, 'L');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(30, 5, '', 1, 0, 'C');
    		$this->pdf->setFont('Times', '', '8');
    		$this->pdf->Ln();
		}

		function projectTypeRow($project_type){
			$this->pdf->setFont('Times', 'B', '10');
						
			$this->pdf->Cell(10, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(71, 5, ucwords($project_type), 1, 0, 'L');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(20, 5, '', 1, 0, 'C');
    		$this->pdf->Cell(30, 5, '', 1, 0, 'C');
    		$this->pdf->setFont('Times', '', '8');
    		$this->pdf->Ln();
		}

		function getFinalHight($width, $data, $font, $emphasis, $size){
			$this->pdf->setFont($font, $emphasis, $size);
			$rowCount = array();
			for ($i=0; $i < sizeof($data); $i++) { 
				$stringWidth = $this->pdf->GetStringWidth($data[$i]);
				if ($stringWidth > $width[$i]) {
					$count = 0;
					$w = $stringWidth;
					$y = $stringWidth;
					while($y >= 0 || $y > -5){		
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