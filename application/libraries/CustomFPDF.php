<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'third_party/fpdf181/fpdf.php');

class CustomFPDF extends FPDF {


    public function header(){
    	$this->SetFont('Times','',12);
    	$this->Cell(276,5,'Republic of The Philippines	',0,0,'C');
    	$this->Ln();
    	$this->Cell(276,10,'Benguet Provincial Government',0,0,'C');
    	$this->Ln();
    	$this->SetFont('Arial','B',14);
    	$this->Cell(276,10,'ANNUAL PROCUREMENT PLAN',0,0,'C');
    	$this->Ln();
    }


    public function Footer(){
	    $this->SetY(-15);
	    $this->SetFont('Arial','I',8);
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}

	public function headerTable(){
		$this->SetFont('Times','B',10);
		$this->Cell(20,20,'PROJ NO.',1,0,'C');
		$this->Cell(40,20,'PROJ TITLE',1,0,'C');
		$this->Cell(40,20,'LOCATION',1,0,'C');
		$this->Cell(60,20,'Mode of Procurement',1,0,'C');
		$this->Cell(60,20,'ADS/POST of IB/REI',1,0,'C');
		$this->Cell(40,20,'SUB/OPEN OF BIDS',1,0,'C');
		$this->Cell(40,20,'NOTICE OF AWARD',1,0,'C');
		$this->Cell(40,20,'CONTRACT SIGNING',1,0,'C');
		$this->Cell(40,20,'SOURCE OF FUND',1,0,'C');
		$this->Cell(40,20,'TYPE OF PROJECT',1,0,'C');
		$this->Cell(40,20,'APPROVED BUDGET COST',1,0,'C');
		$this->Cell(40,20,'PROJECT YEAR',1,0,'C');	
		$this->Ln();	
	}

    public function getInstance(){
        return new CustomFPDF();
    }


}
?>