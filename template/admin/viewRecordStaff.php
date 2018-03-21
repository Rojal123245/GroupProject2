<?php
	require '../../databaseConnect/connectSQL.php';
	$page = $_GET['t'];
	$table = new GenerateTableClass();
	$table->settableHeadingToTable(["Id", "First Name", "Middle Name", "Last Name", "Email", "Edit", "Delete"]);
	$query = new QueryDatabase($pdo, "staff");
	$stmt = $pdo->prepare('SELECT staffId, staffFirstName, staffMiddleName, staffSurName, email FROM staff');
	$stmt->execute();
	while ($key = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$edit = '<a href="page.php?t='.$page.'&id='.$key['staffId'].'" style="padding-left: 10px; text-decoration: underline;">Update</a>';
		$delete = '<a href="page.php?t='.$page.'&iddel='.$key['staffId'].'" style="padding-left: 10px; text-decoration: underline;" onclick="return confirm(\'Do you want to delete this record?\');">Delete</a>';
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
		<option value="staffFirstName">First Name</option>
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
			echo '<li>'.$userList['staffSurName'].', '.$userList['staffFirstName'].' has user id '.$userList['staffId'].'
				<a href="page.php?t='.$page.'&id='.$userList['staffId'].'" style="padding-left: 10px; color: #eee; text-decoration: underline;">Update</a>
				<a href="page.php?t='.$page.'&iddel='.$userList['staffId'].'" style="padding-left: 10px; color: #eee; text-decoration: underline;" onclick="return confirm(\'Do you want to delete this record?\');">Delete</a>
				<a href="page.php?t='.$page.'&idarc='.$userList['staffId'].'" style="padding-left: 10px; color: #eee; text-decoration: underline;">Move To Archive</a>
				</li>
			';
		}
		echo "</ul>";
	}
	$p = "staffId";
	if (isset($_GET['idarc'])) {
		
	}
	if(isset($_GET['iddel'])){
		$delete = $query->delete($p, $_GET['iddel']);
		header("Refresh:0; url=page.php?t=$page");
	}
	if (isset($_GET['id'])) {
		
?>	
 <div>
	<form method="POST" action="<?php echo 'add-staff.php?p='.$p.'' ?>">
	 	<?php
	 		function update($key, $value, $query){
				$querySearch = $query->find($key, $value);
				while ($getRow = $querySearch->fetch()) {
					$formData = [["hidden", "staffId", ""], ["text", "staffFirstName", "First Name"], ["text", "staffMiddleName", "Middle Name"], ["text", "staffSurName", "Last Name"], ["email", "email", "Email"], ["text", "address", "Address"], ["text", "phone", "Phone Number"], ["text", "role", "Role"], ["text", "specialistSubject", "Specialist Subject"], ["text", "status", "Status"], ["text", "dormacyReason", "Dormacy Reason"], ["text", "gender", "Gender"]];
				 	require '../../functions/form-generate-function.php';
				}
			}
	 		update("staffId", $_GET['id'], $query);
	 	?>
 		<input type="submit" name="submit" value="Update" class="btn btn-success">
 	</form>
 </div>
<?php 
	}
 ?>
