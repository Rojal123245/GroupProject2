<?php
require '../classes/databaseQuery.php';
require '../databaseConnect/connectSQL.php';

if(isset($_GET['fid'])){
	echo "hyy";
$fid = $_GET['fid'];
$reportObj = new QueryDatabase($pdo, 'pdfdata');
	$result = $reportObj->find('pdf_id', $fid);
	foreach ($result as $key) {
		$wid = $key['week'];
		$name = $key['pdf_name'];
	}
$pdffile = '../files/'.$wid.'/'.$name;
echo $pdffile;
$pdfname = $name;
?>
<iframe <?php echo 'src='.$pdffile .''?> target="blank" style ="height: 650px;width:600px;"'></iframe>
<?php
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $pdfname . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($pdffile);


}


?>
