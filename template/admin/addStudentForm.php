<form method="POST" action="add-student.php" enctype="multipart/form-data">
    <h2 class="text-center">Add Student Record</h2>
    <?php 
        $formData = [["text", "studentFirstName", "First Name"], ["text", "studentMiddleName", "Middle Name"], ["text", "studentSurName", "Last Name"], ["email", "email", "Email"], ["text", "addressTermTime", "Term Time Address"], ["text", "addressNonTT", "Non Term Time Address"], ["text", "phone", "Phone Number"], ["number", "currentCoursCode", "Course Code"], ["text", "entryQualification", "Qualification"], ["text", "status", "Status"], ["text", "dormacyReason", "Dormacy Reason"]];
        require '../../functions/form-generate-function.php';
    ?>
    <div class="form-group">
        <label>Gender</label>
        <div class="radio">
            <label class="control-label">
            <input type="radio" name="gender" value="M" checked />Male</label>
        </div>
        <div class="radio">
            <label class="control-label">
            <input type="radio" name="gender" value="F" />Female</label>
        </div>
    </div>
    <div class="form-group text-center">
        <input type="submit" name="submit" value="Add Record" class="btn btn-primary">
    </div>
</form><hr>
<form action="" method="POST" enctype="multipart/form-data">
    <h3>You can upload excel file here:</h3>
    <label for="file-input" class="control-label">File Input</label>
    <input type="file" name="file-input" class="form-control" />
    

<input type="submit" name="upload" value="Upload" class="btn btn-primary">
</form>

<?php
require '../../databaseConnect/connectSQL.php';
if(isset($_POST['upload'])){
    unset($_POST['upload']);


        $fileName=$_FILES['file-input']['name'];
           $fileTmpName=$_FILES['file-input']['tmp_name'];
           //echo $fileName;

            $fileExtension = pathinfo($fileName,PATHINFO_EXTENSION);
            $allowedType = array('csv');
            if(!in_array($fileExtension, $allowedType)){?>
                <div class = "alert alert-danger">
                    Invalid File Extension
                </div>
        <?php } else{
                    $handle= fopen($fileTmpName, 'r');
                   // $myData=fgetcsv($handle,1000,',');

                    while (($myData=fgetcsv($handle,1000,','))!=FALSE) {
                        $studentFirstName=$myData[0];
                        $studentMiddleName=$myData[1];
                        $studentSurName=$myData[2];
                        $email=$myData[3];
                        $addressTermTime=$myData[4];
                        $addressNonTT=$myData[5];
                        $phone=$myData[6];
                        $currentCoursCode=$myData[7];
                        $entryQualification=$myData[8];
                        $gender=$myData[9];
                        $status=$myData[10];
                        $dormacyReason=$myData[11];
                        
                        $query="INSERT INTO student(studentFirstName, studentMiddleName, studentSurName, email, addressTermTime, addressNonTT, phone, currentCoursCode, entryQualification, gender, status, dormacyReason)
                            VALUES(:studentFirstName, 
                                :studentMiddleName, 
                                :studentSurName, 
                                :email, 
                                :addressTermTime, 
                                :addressNonTT, 
                                :phone,
                                :currentCoursCode,
                                :entryQualification, 
                                :gender, 
                                :status, 
                                :dormacyReason)";

                        $valuesGiven = [
                            "studentFirstName" => $studentFirstName,
                            "studentMiddleName" => $studentMiddleName, 
                            "studentSurName" => $studentSurName, 
                            "email" => $email, 
                            "addressTermTime" => $addressTermTime, 
                            "addressNonTT" => $addressNonTT, 
                            "phone" => $phone,
                            "currentCoursCode" => $currentCoursCode,
                            "entryQualification" => $entryQualification, 
                            "gender" => $gender, 
                            "status" => $status, 
                            "dormacyReason" => $dormacyReason

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