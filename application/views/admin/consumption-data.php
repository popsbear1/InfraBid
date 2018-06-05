<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pvet";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 =>'municipality', 
	1 => 'barangay',
	2=> 'sitio',
	3=> 'hsn',
	4=> 'househead',
	5=> 'respondent',
	6=> 'hmember'
);

// getting total number records without any search
$sql = "SELECT * ";
$sql.=" FROM hconsumption";
$query=mysqli_query($conn, $sql) or die("consumption-data.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT * ";
$sql.=" FROM employee WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( municipality LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR barangay LIKE '".$requestData['search']['value']."%' ";

	$sql.=" OR sitio LIKE '".$requestData['search']['value']."%' )";
	$sql.=" OR hsn LIKE '".$requestData['search']['value']."%' )";
	$sql.=" OR househead LIKE '".$requestData['search']['value']."%' )";
	$sql.=" OR respondent LIKE '".$requestData['search']['value']."%' )";
	$sql.=" OR hmember LIKE '".$requestData['search']['value']."%' )";
}
$query=mysqli_query($conn, $sql) or die("consumption-data.php: get employees");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("consumption.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["municipality"];
	$nestedData[] = $row["barangay"];
	$nestedData[] = $row["sitio"];
	$nestedData[] = $row["hsn"];
	$nestedData[] = $row["househead"];
	$nestedData[] = $row["respondent"];
	$nestedData[] = $row["hmember"];
	
	$data[] = $nestedData;
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
