<?php
	require '../../databaseConnect/connectSQL.php';
	require '../../classes/table-generate-function.php';
	$table = new GenerateTableClass();
	$table->settableHeadingToTable(["Id", "Report Date", "Cause Of Report", "Meeting Deadline", "Complained By (Khoi)"]);
	require '../../classes/databaseQuery.php';
	$query = new QueryDatabase($pdo, "report");
	$stmt = $query->findAll();
	while ($key = $stmt->fetch(PDO::FETCH_ASSOC)) {
		if($key['cause'] == "PAT"){
			$key['cause'] = "Not attending a personal tutorial meeting";
		}
		elseif($key['cause'] == "classIssue"){
			$key['cause'] = "Having poor or no attendance at classes";
		}
		elseif($key['cause'] == "classworkSubmission"){
			$key['cause'] = "Not submitting coursework";
		}
		$table->addRowToTable($key);
	}
	echo $table->getHTMLTemplate();
?>