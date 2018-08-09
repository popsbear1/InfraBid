<?php

/**
* 
*/
class MYPDF extends TCPDF
{
	public function Header(){
		$this->SetFont('helvetica', 'B', 20);
		$this->Cell(0, 15, 'Goldust Creations', 0, false, 'C', 0, '', 0, false, 'M', 'M');
	}

	public function Footer(){
		$this->SetY(-15);
		$this->SetFont('helvetica', 'I', 8);
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Event Details');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// Set font
$pdf->SetFont('times', '', 12);

// Add a page
// This method has several options, check the source code documentation for more information.


// Set some content to prin

//print plans


$pdf->AddPage('L', 'MONARCH');

$plan_tbl_header = '<table style="width: 638px;" cellspacing="0">';
$plan_tbl_footer = '</table>';
$plan_tbl = '';

$html = <<<EOD
	<tr>
		<td style="border: 1px solid #000000; width: 150px;"> NO. </td>
		<td style="border: 1px solid #000000; width: 150px;"> PROJ. NO. </td>
		<td style="border: 1px solid #000000; width: 150px;"> PROCURMENT PROGRAMS/PROJECTS </td>
		<td style="border: 1px solid #000000; width: 150px;"> PMO/END USER/LOCATION </td>
		<td style="border: 1px solid #000000; width: 150px;"> MODE OF PROCUREMENT </td>
		<td style="border: 1px solid #000000; width: 150px;"> ADS/POST OF IB/REI </td>
		<td style="border: 1px solid #000000; width: 150px;"> SUB/OPEN OF BIDS </td>
		<td style="border: 1px solid #000000; width: 150px;"> NOTICE OF AWARD </td>
		<td style="border: 1px solid #000000; width: 150px;"> CONTRACT SIGNING </td>
		<td style="border: 1px solid #000000; width: 150px;"> SOURCE OF FUNDS </td>
		<td style="border: 1px solid #000000; width: 150px;"> TOTAL </td>
		<td style="border: 1px solid #000000; width: 150px;"> MOOE </td>
		<td style="border: 1px solid #000000; width: 150px;"> CO </td>
		<td style="border: 1px solid #000000; width: 150px;"> REMARKS </td>
	</tr>
EOD;

foreach ($plans as $plan) {
	$plan_tbl .= '

		<tr>	
			<td style="border: 1px solid #000000; width: 150px;">' . $plan['project_no'] . '</td>
			<td style="border: 1px solid #000000; width: 150px;">' . $plan['project_no'] . '</td>
			<td style="border: 1px solid #000000; width: 150px;">' . $plan['project_no'] . '</td>
			<td style="border: 1px solid #000000; width: 150px;">' . $plan['project_no'] . '</td>
			<td style="border: 1px solid #000000; width: 150px;">' . $plan['project_no'] . '</td>
			<td style="border: 1px solid #000000; width: 150px;">' . $plan['project_no'] . '</td>
			<td style="border: 1px solid #000000; width: 150px;">' . $plan['project_no'] . '</td>
			<td style="border: 1px solid #000000; width: 150px;">' . $plan['project_no'] . '</td>
			<td style="border: 1px solid #000000; width: 150px;">' . $plan['project_no'] . '</td>
			<td style="border: 1px solid #000000; width: 150px;">' . $plan['project_no'] . '</td>
			<td style="border: 1px solid #000000; width: 150px;">' . $plan['project_no'] . '</td>
			<td style="border: 1px solid #000000; width: 150px;">' . $plan['project_no'] . '</td>
			<td style="border: 1px solid #000000; width: 150px;">' . $plan['project_no'] . '</td>
			<td style="border: 1px solid #000000; width: 150px;">' . $plan['project_no'] . '</td>
		</tr>
	';



// Print text using writeHTMLCell()
$pdf->writeHTML($plan_tbl_header . $html . $plan_tbl . $plan_tbl_footer, true, false, false, false, '');

}


// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output(' Project_Details.pdf', 'D');

//============================================================+
// END OF FILE
//============================================================+
