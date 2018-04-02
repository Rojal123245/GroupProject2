
<?php
if(isset($_POST['upload'])){
 $targetfolder = "../testupload/";

 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['file']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }
}

 ?>

<form action="add-lecture-slides.php" method="post" enctype="multipart/form-data">
<label>Title </label>
<input type="text" name="ltitle">
<input type="file" name="file" size="50" />

<br />

<input type="submit" name="upload" value="Upload" />

</form>