<?php
require '../classes/databaseQuery.php';
require '../databaseConnect/connectSQL.php';

if(isset($_FILES['pdf_name'])){
	
	$pdf = $_FILES['pdf_name'];
	$weeks = $_POST['week'];
	$pdf_name = $pdf['name'];
	$pdf_tmp = $pdf['tmp_name'];
	$pdf_size = $pdf['size'];
	$pdf_error = $pdf['error'];

	$pdf_ext = explode('.', $pdf_name);
	$pdf_ext = strtolower(end($pdf_ext));

	$allow = array('pdf');

	if(in_array($pdf_ext, $allow)){
		if($pdf_error === 0){
			if($pdf_size <=20971529843){
				$pdf_new_name = uniqid('',true) . $pdf_name;
				$pdf_folder = '../files/'.$weeks.'/' . $pdf_new_name;
				
					$reportObj = new QueryDatabase($pdo, 'pdfdata');
					unset($_POST['upload']);
					$critera = $_POST;
					$critera['pdf_name'] = $pdf_new_name;
					print_r($critera);
					unset($critera['submit']);
					$result = $reportObj->saveQuery($critera);


		if($result == true){
					echo "<script type='text/javascrip'>alert('pdf has been added');</script>";
				}
				else{
					echo "<script type='text/javascrip'>alert('pdf hasnot been added');</script>";
				}

				if(move_uploaded_file($pdf_tmp, $pdf_folder)){
					echo "<script type='text/javascrip'>alert('pdf has been added');</script>";
				}
				else{
					echo "<script type='text/javascrip'>alert('pdf hasnot been added');</script>";
				}
				header('location:../public_html/staff/content.php');
			}
		}
	}
}
?>