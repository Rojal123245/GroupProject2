<?php
	require '../../databaseConnect/connectSQL.php';
	$table = new GenerateTableClass();
	$table->settableHeadingToTable(["Id", "First Name", "Middle Name", "Last Name", "Email", "Term Time Address", "Non Term Time Address", "Phone Number", "Course Code", "Qualification", "Gender", "Status", "Dormacy Reason"]);
	$query = new QueryDatabase($pdo, "student");
	$stmt = $query->findAll();
	while ($key = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$table->addRowToTable($key);
	}
	echo $table->getHTMLTemplate();

?>
<br>
<div class="text-center">
	<a data-toggle="collapse" href="#update" class="btn btn-info">Search Record</a>
</div>
<form method="POST" action="" id="update" class="panel-collapse collapse">
	<label for="info">Search by: </label>
	<select name="info">
		<option value="studentFirstName">First Name</option>
		<option value="email">Email</option>
	</select>
	<label></label>
	<input type="text" name="keyword" class="form-control">
	<div class="text-center">
		<br>
		<input type="submit" name="update" value="Update" class="btn btn-success">
		<input type="submit" name="delete" value="Delete" class="btn btn-danger">
		<input type="submit" name="archive" value="Archive" class="btn btn-warning">
	</div>
</form>

<?php 
	require '../../functions/update.php';
	if(isset($_POST['update'])){
		$searchKey = $_POST['keyword'];
		update($_POST['info'], $searchKey, $query);
	}
 ?>