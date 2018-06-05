<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
include( "DataTables.php" );
include( "../databaseconnect.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'datatables_demo' )
	->fields(
		Field::inst( 'businessname' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'owner' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'address' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'contactnumber' )->validator( 'Validate::notEmpty' )
		
	->process( $_POST )
	->json();
