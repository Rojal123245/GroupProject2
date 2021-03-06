<?php
	require '../../databaseConnect/connectSQL.php';
	$page = $_GET['t'];
	$table = new GenerateTableClass();
	$query = new QueryDatabase($pdo, "student");
	$table->settableHeadingToTable(["Id", "First Name", "Middle Name", "Last Name", "Email", "Edit", "Delete"]);
	$stmt = $pdo->prepare('SELECT Stid, studentFirstName, studentMiddleName, studentSurName, email FROM student');
	$stmt->execute();
	while ($key = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$edit = '<a href="page.php?t='.$page.'&id='.$key['Stid'].'" style="padding-left: 10px; text-decoration: underline;">Update</a>';
		$delete = '<a href="page.php?t='.$page.'&iddel='.$key['Stid'].'" style="padding-left: 10px; text-decoration: underline;" onclick="return confirm(\'Do you want to delete this record?\');">Delete</a>';
		array_push($key, $edit, $delete);
		$table->addRowToTable($key);
	}
	echo $table->getHTMLTemplate();

?>
<br>
<div class="text-center">
	<a data-toggle="collapse" href="#form" class="btn btn-info">Search Record</a>
</div>
<form method="POST" action="" id="form" class="panel-collapse collapse">
	<label for="info">Search by: </label>
	<select name="info">
		<option value="studentFirstName">First Name</option>
		<option value="email">Email</option>
	</select>
	<input type="text" name="keyword" class="form-control">
	<input type="submit" name="search" value="Search" class="btn btn-info">
</form>


<?php 
	if(isset($_POST['search'])){
		$searchKey = $_POST['keyword'];
		$querySearch = $query->find($_POST['info'], $searchKey);
		echo "<ul>";
		foreach ($querySearch as $userList) {
			echo '<li>'.$userList['studentSurName'].', '.$userList['studentFirstName'].' has user id '.$userList['Stid'].'
				<a href="page.php?t='.$page.'&id='.$userList['Stid'].'" style="padding-left: 10px; text-decoration: underline;">Update</a>
				<a href="page.php?t='.$page.'&iddel='.$userList['Stid'].'" style="padding-left: 10px; text-decoration: underline;" onclick="return confirm(\'Do you want to delete this record?\');">Delete</a>
				<a href="page.php?t='.$page.'&idarc='.$userList['Stid'].'" style="padding-left: 10px; text-decoration: underline;">Move To Archive</a>
				</li>
			';
		}
		echo "</ul>";
	}
	$p = "Stid";
	if (isset($_GET['idarc'])) {
		
	}
	if(isset($_GET['iddel'])){
		$delete = $query->delete($p, $_GET['iddel']);
		header("Refresh:0; url=page.php?t=$page");
	}
	if (isset($_GET['id'])) {
		
?>	
 <div>
	<form method="POST" action="<?php echo 'add-student.php?p='.$p.'' ?>">
	 	<?php
	 		function update($key, $value, $query){
				$querySearch = $query->find($key, $value);
				while ($getRow = $querySearch->fetch()) {
					$formData = [["hidden", "Stid", ""], ["text", "studentFirstName", "First Name"], ["text", "studentMiddleName", "Middle Name"], ["text", "studentSurName", "Last Name"], ["email", "email", "Email"], ["text", "addressTermTime", "Term Time Address"], ["text", "addressNonTT", "Non Term Time Address"], ["text", "phone", "Phone Number"], ["number", "currentCoursCode", "Course Code"], ["text", "entryQualification", "Qualification"], ["text", "gender", "Gender"], ["text", "status", "Status"], ["text", "dormacyReason", "Dormacy Reason"]];
				 	require '../../functions/form-generate-function.php';
				}
			}
	 		update("Stid", $_GET['id'], $query);
	 	?>
 		<input type="submit" name="submit" value="Update" class="btn btn-success">
 	</form>
 </div>
<?php 
	}
 ?>
