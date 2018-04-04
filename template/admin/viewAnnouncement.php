<?php
	require '../../databaseConnect/connectSQL.php';
	$table = new GenerateTableClass();
	$table->settableHeadingToTable(["Id", "Announcement", "Description"]);
	$query = new QueryDatabase($pdo, "announcement");
	$stmt = $query->findAll();
	while ($key = $stmt->fetch(PDO::FETCH_ASSOC)) {
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
		<option value="title">Announcement</option>
		
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
		foreach ($querySearch as $announceList) {
			echo '<li>'.$announceList['title'].' has announcement id '.$announceList['announcement_id'].'
				<a href="page.php?t='.$page.'&id='.$announceList['announcement_id'].'" style="padding-left: 10px; text-decoration: underline;">Update</a>
				<a href="page.php?t='.$page.'&iddel='.$announceList['announcement_id'].'" style="padding-left: 10px; text-decoration: underline;" onclick="return confirm(\'Do you want to delete this record?\');">Delete</a>
				<a href="page.php?t='.$page.'&idarc='.$announceList['announcement_id'].'" style="padding-left: 10px; text-decoration: underline;">Move To Archive</a>
				</li>
			';
		}
		echo "</ul>";
	}
	$p = "announcement_id";
	if (isset($_GET['idarc'])) {
		
	}
	if(isset($_GET['iddel'])){
		$delete = $query->delete($p, $_GET['iddel']);
		header("Refresh:0; url=page.php?t=$page");
	}
	if (isset($_GET['id'])) {
		
?>	
 <div>
	<form method="POST" action="<?php echo 'add-announcement.php?p='.$p.'' ?>">
	 	<?php
	 		function update($key, $value, $query){
				$querySearch = $query->find($key, $value);
				while ($getRow = $querySearch->fetch()) {
					$formData = [["hidden", "announcement_id", ""], ["text", "title", "Announcement"], ["text", "descript", "Description"]];
				 	require '../../functions/form-generate-function.php';
				}
			}
	 		update("announcement_id", $_GET['id'], $query);
	 	?>
 		<input type="submit" name="submit" value="Update" class="btn btn-success">
 	</form>
 </div>
<?php 
	}
 ?>