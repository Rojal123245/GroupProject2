<form method="POST" action="" enctype="multipart/form-data">
    <label for="file-input" class="control-label">Upload Attendance Sheet</label>
    <input type="file" name="file-input" class="form-control" />
    <input type="submit" name="upload" value="Submit" class="btn btn-primary">
</form>
<?php 
$module_id = $_GET['id'];
require '../../databaseConnect/connectSQL.php';
if(isset($_POST['upload'])){
    unset($_POST['upload']);
    $fileName=$_FILES['file-input']['name'];
           $fileTmpName=$_FILES['file-input']['tmp_name'];
            $fileExtension = pathinfo($fileName,PATHINFO_EXTENSION);
            $allowedType = array('csv');
            if(!in_array($fileExtension, $allowedType)){?>
                <div class = "alert alert-danger">
                    Invalid File Extension
                </div>
        <?php } else{
                    $handle= fopen($fileTmpName, 'r');
                    while (($myData=fgetcsv($handle,1000,','))!=FALSE) {
                        $student_id=$myData[0];
                        for ($i=1; $i < sizeof($myData); $i++) { 
                            $week = $myData[$i];
                            if (sizeof($myData) <=2 ) {
                            $query='INSERT INTO attendance(student_id, module_id, week'.$i.') VALUES(:student_id, :module_id, :week)';
                            } 
                            else{
                                $query='UPDATE attendance SET  week'.$i.'= :week WHERE 
                                student_id= :student_id AND module_id=:module_id';
                                }
                                 $valuesGiven = [
                                    "student_id" => $student_id,
                                    "module_id" => $module_id,
                                    "week" => $week
                                ];
                                $statement = $pdo->prepare($query);
                                $run = $statement->execute($valuesGiven);
                            }
                        }

                        if(!$run){
                            die("error in uploading file");
                        }else{?>
                            <script type="text/javascript">alert(" file uploaded Successfully!!!");</script>
                    <?php  }

                    }
                }   
?>