<?php
require '../../classes/databaseQuery.php';
require '../../classes/table-generate-function.php';
require '../../databaseConnect/connectSQL.php';
$table = new GenerateTableClass($pdo, 'concernletter');
$table->settableHeadingToTable(["Id", "File Name", "Lecture Week","delete"]);
$query = new QueryDatabase($pdo, "pdfdata");
	$stmt = $query->findAll();
while ($key = $stmt->fetch(PDO::FETCH_ASSOC)) {
	$delete = '<a href="delete-lecture-template.php?iddel='.$key['pdf_id'].'" style="padding-left: 10px; text-decoration: underline;" onclick="return confirm(\'Do you want to delete this record?\');">Delete</a>';
	array_push($key,$delete);
	
$table->addRowToTable($key);
?>


<?php
}
echo $table->getHTMLTemplate();
if(isset($_GET['iddel'])){
$delid = $_GET['iddel'];
$delquery = new QueryDatabase($pdo, "pdfdata");
	$delstmt = $delquery->delete('pdf_id', $delid);
}
?>