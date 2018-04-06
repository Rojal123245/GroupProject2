<?php
require '../classes/databaseQuery.php';
require '../databaseConnect/connectSQL.php';

if(isset($_GET['wid'])){
	
	$wid = $_GET['wid'];
	$field = 'week';
	
	$reportObj = new QueryDatabase($pdo, 'pdfdata');
	$result = $reportObj->find($field, $wid);

	foreach ($result as $key) {
		 echo'<a href="display-pdf.php?fid=' .$key['pdf_id'] .'">'.$key['pdf_name'].'</a>';

	}
}
?>