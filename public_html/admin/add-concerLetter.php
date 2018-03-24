<?php 
	require '../../classes/databaseQuery.php';
	require '../../databaseConnect/connectSQL.php';
	if (isset($_POST['submit'])) {
		$title = "Successful";
		$reportObj = new QueryDatabase($pdo, 'concernletter');
		unset($_POST['submit']);
		$record = $_POST;
		$result = $reportObj->saveQuery($record);
		$receiver = $record['toStudent'];
		$mailSubject = $record['cause'];
		$mailText = '<h3>PRIVATE & CONFIDENTIAL</h3>			

		'.$record['reportDate'].'
		<br><br>
		Dear <br>
		<p>Your name has been referred as a possible cause for concern by your module co-ordinator because you are recorded as:</p>

		<p>'.$record['cause'].'</p>

		<p>It is essential that you see me as soon as possible.  You must do this by</p>
		'.$record['day'].'.

		 The meeting will provide an opportunity to check and review your progress and find a means of resolving any difficulties you may be experiencing.  You are reminded that all students enrolling on a course at UCN are expected to meet the academic requirements of their programme.  The Student Code details the implications of "failure to meet academic, professional or vocational requirements" and whilst there may be mitigating circumstances not known to us at this time, you should regard this letter as an informal warning that your continuation on the course may be at risk. Failure to make contact may result in us deeming you to be withdrawn from your course.
		<p>If for any reason you are experiencing difficulties which impact on your academic work, you should contact your personal tutor for advice.  You must however see me as instructed by the 

		'.$record['instruct'].'.</p>

		<p>
		Yours sincerely	<br>
		Module Co-Ordinater	<br>
		CC	Student file / Course Leader	<br>
		CAUSE FOR CONCERN LETTER	
		</p>';

		$mailHeader = "From: webmaster@example.com" . "\r\n";
		mail($receiver,$mailSubject,$mailText,$mailHeader);
		$content = "<h3>Report has been created.</h3>";
	}
	else{
		$title = "Error";
		$content = "Few Errors";
	}

	require '../../template/admin/admin-layout.php';
?>