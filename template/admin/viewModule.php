<?php
	require '../../databaseConnect/connectSQL.php';
	$table = new GenerateTableClass();
	$table->settableHeadingToTable(["Module Id", "Module Name", "Module Code"]);
	$query = new QueryDatabase($pdo, "module");
	$stmt = $query->findAll();
	while ($key = $stmt->fetch(PDO::FETCH_ASSOC)) {
		unset($key['course_id']);
		unset($key['level']);
		unset($key['pts']);
		unset($key['ass1']);
		unset($key['ass2']);
		unset($key['exam']);
		unset($key['tutor_id']);
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
		<option value="moduleName">Module Name</option>
		<option value="moduleCode">Module Code</option>
	</select>
	<input type="text" name="keyword" class="form-control">
	<input type="submit" name="search" value="Search" class="btn btn-info">
</form>


<?php 
	$page = $_GET['t'];
	if(isset($_POST['search'])){
		$searchKey = $_POST['keyword'];
		$querySearch = $query->find($_POST['info'], $searchKey);
		echo "<ul>";
		foreach ($querySearch as $moduleList) {
			echo '<li>'.$moduleList['moduleName'].' has module id '.$moduleList['module_id'].'
				<a href="page.php?t='.$page.'&id='.$moduleList['module_id'].'" style="padding-left: 10px; text-decoration: underline;">Update</a>
				<a href="page.php?t='.$page.'&iddel='.$moduleList['module_id'].'" style="padding-left: 10px; text-decoration: underline;" onclick="return confirm(\'Do you want to delete this record?\');">Delete</a>
				<a href="page.php?t='.$page.'&idarc='.$moduleList['module_id'].'" style="padding-left: 10px; text-decoration: underline;">Move To Archive</a>
				</li>
			';
		}
		echo "</ul>";
	}
	$p = "module_id";
	if (isset($_GET['idarc'])) {
		
	}
	if(isset($_GET['iddel'])){
		$delete = $query->delete($p, $_GET['iddel']);
		header("Refresh:0; url=page.php?t=$page");
	}
	if (isset($_GET['id'])) {
		
?>	
 <div>
	<form method="POST" action="<?php echo 'add-module.php?p='.$p.'' ?>">
	 	<?php
	 		function update($key, $value, $query){
				$querySearch = $query->find($key, $value);
				// $getRow = $querySearch->fetch();
				// print_r($getRow);
		// 		unset($getRow['course_id']);
		// unset($getRow['level']);
		// unset($getRow['pts']);
		// unset($getRow['ass1']);
		// unset($getRow['ass2']);
		// unset($getRow['exam']);
		// unset($getRow['tutor_id']);
				while ($getRow = $querySearch->fetch()) {
					$formData = [["hidden", "module_id", ""], ["hidden", "course_id", ""], ["text","moduleName","Module Name"], ["number", "level", "Level"], ["number", "pts", "Pts"], ["text", "ass1", "Assignment1"], ["text", "ass2", "Assignment2"], ["text", "exam", "Exam"]];
				 	require '../../functions/form-generate-function.php';
				}
			}
	 		update("module_id", $_GET['id'], $query);
	 	?>
 		<input type="submit" name="submit" value="Update" class="btn btn-success">
 	</form>
 </div>
<?php 
	}
 ?>