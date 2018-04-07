<?php 
$id = $_GET['id'];
	require '../../databaseConnect/connectSQL.php';
?>
<form method="POST" action="announcement.php?id=<?php echo $id; ?>" enctype="multipart/form-data" class="add-form z-depth-2">
    <h2 class="text-center form-heading z-depth-1-half">Add Announcement</h2>
    <?php 
        $formData = [["text", "title", "Announcement Title"], ["text", "descript", "Announcement Description"]];
        $getRow = [];
        require '../../functions/form-generate-function.php';
    ?>
    <div class="form-group text-center">
        <input type="submit" name="submit" value="Add Record" class="btn btn-primary">
    </div>
</form><hr>
