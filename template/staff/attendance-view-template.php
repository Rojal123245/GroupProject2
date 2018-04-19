<form method="POST" action="">
    <label for="file-input" class="control-label">Upload Attendance Sheet</label>
    <input type="file" name="file-input" class="form-control" />
    <input type="submit" name="upload" value="Submit" class="btn btn-primary">
</form>
<?php 
require '../../databaseConnect/connectSQL.php';
if(isset($_POST['upload'])){
    unset($_POST['upload']);
    print_r($_POST);
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
                        $week1=$myData[1];
                        $week2=$myData[2];
                        $week3=$myData[3];
                        $week4=$myData[4];
                        $week5=$myData[5];
                        $week6=$myData[6];
                        $week7=$myData[7];
                        $week8=$myData[8];
                        $week9=$myData[9];
                        $week10=$myData[10];
                        $week11=$myData[11];
                        $week12=$myData[12];
                        $query="INSERT INTO attendance(student_id, week1, week2, week3, week4, week5, week6, week7, week8, week9, week10, week11, week12)
                            VALUES(:student_id, 
                                :week1, 
                                :week2, 
                                :week3, 
                                :week4, 
                                :week5,
                                :week6,
                                :week7, 
                                :week8, 
                                :week9, 
                                :week10,
                                :week11,
                                :week12)";

                        $valuesGiven = [
                            "student_id" => $student_id,
                            "week1" => $week1, 
                            "week2" => $week2, 
                            "week3" => $week3, 
                            "week4" => $week4, 
                            "week5" => $week5,
                            "week6" => $week6,
                            "week7" => $week7, 
                            "week8" => $week8, 
                            "week9" => $week9,
                            "week10" => $week10,
                            "week11" => $week11,
                            "week12" => $week12
                        ];
                        $statement = $pdo->prepare($query);
                        $run = $statement->execute($valuesGiven);
                        }
                        if(!$run){
                            die("error in uploading file");
                        }else{?>
                            <div class="alert alert-sucess">
                                file uploaded Successfully!!!
                                
                            </div>
                    <?php  }

                    }
                }   
?>