<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'third_party/fpdf181/fpdf.php');

class CustomFPDF extends FPDF {


    public function header(){
        $this->SetFont('Arial','B',10);
        $this->Cell(80);
        $this->Cell(30,10,'Republic of The Philippines',0,0,'C');
        $this->Cell(50,10,'Benguet Provincial Government',0,0,'C');
        $this->Cell(70,10,'Annual Procurement Plan',0,0,'C');
        $this->Ln(20);

        $this->Cell(40,5,' ','LTR',0,'L',0);   // empty cell with left,top, and right borders
		$this->Cell(40,5,'NO.','LR',0,'C',0);
		$this->Cell(40,5,'PROJ. NO.','LR',0,'C',0);
		$this->Cell(40,5,'PROCUREMENT PROGRAMS / PROJECTS','LR',0,'C',0);
		$this->Cell(40,5,'Solid Here','LR',0,'C',0);
		$this->Cell(40,5,'MODE OF PROCUREMENT','LR',0,'C',0);


		                $this->Ln();

		$this->Cell(40,5,'Solid Here','LR',0,'C',0);  // cell with left and right borders
		$this->Cell(50,5,'[ o ] che1','LR',0,'L',0);
		$this->Cell(50,5,'[ x ] che2','LR',0,'L',0);

		                $this->Ln();

		$this->Cell(40,5,'','LBR',0,'L',0);   // empty cell with left,bottom, and right borders
		$this->Cell(50,5,'[ x ] def3','LRB',0,'L',0);
		$this->Cell(50,5,'[ o ] def4','LRB',0,'L',0);

                $this->Ln();
                $this->Ln();
                $this->Ln();
    }


    public function Footer(){
	    // Position at 1.5 cm from bottom
	    $this->SetY(-15);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Page number
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}

    public function getInstance(){
        return new CustomFPDF();
    }


}
?>