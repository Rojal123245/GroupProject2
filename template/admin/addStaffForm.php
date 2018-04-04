<form method="POST" action="add-staff.php" enctype="multipart/form-data" class="add-form z-depth-2">
    <h2 class="text-center form-heading z-depth-1-half">Add Staff Record</h2>
    <?php 
        $formData = [["text", "staffFirstName", "First Name"], ["text", "staffMiddleName", "Middle Name"], ["text", "staffSurName", "Last Name"], ["email", "email", "Email"], ["text", "address", "Address"], ["text", "phone", "Phone Number"], ["text", "role", "Role"], ["text", "specialistSubject", "Specialist Subject"]];
        $getRow = [];
        require '../../functions/form-generate-function.php';
    ?>
    <div class="form-group">
        <label for="statusOption">Status</label>
        <select class="form-control" id="statusOption" name="status">
          <option value="live">Live</option>
          <option value="dormant">Dormant</option>
        </select>
    </div>
    <div class="form-group">
        <label for="dormacyReason">Dormacy Reason</label>
        <select class="form-control" name="dormacyReason">
          <option value="none">None</option>
          <option value="retired">Retired</option>
          <option value="resigned">Resigned</option>
          <option value="misconduct">Misconduct</option>
        </select>
    </div>
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
//$pwd has been updated
                    while (($myData=fgetcsv($handle,1000,','))!=FALSE) {
                        $staffFirstName=$myData[0];
                        $staffMiddleName=$myData[1];
                        $staffSurName=$myData[2];
                        $email=$myData[3];
                        $address=$myData[4];
                        $phone=$myData[5];
                        $role=$myData[6];
                        $specialistSubject=$myData[7];
                        $status=$myData[8];
                        $dormacyReason=$myData[9];
                        $gender=$myData[10];
                        $pwd = strtolower($myData[0].$myData[2]);
                        $query="INSERT INTO staff(staffFirstName, staffMiddleName, staffSurName, email, address, phone, role, specialistSubject, status, dormacyReason, gender, pwd)
                            VALUES(:staffFirstName, 
                                :staffMiddleName, 
                                :staffSurName, 
                                :email, 
                                :address, 
                                :phone,
                                :role,
                                :specialistSubject, 
                                :status, 
                                :dormacyReason, 
                                :gender,
                                :pwd)";

                        $valuesGiven = [
                            "staffFirstName" => $staffFirstName,
                            "staffMiddleName" => $staffMiddleName, 
                            "staffSurName" => $staffSurName, 
                            "email" => $email, 
                            "address" => $address, 
                            "phone" => $phone,
                            "role" => $role,
                            "specialistSubject" => $specialistSubject, 
                            "status" => $status, 
                            "dormacyReason" => $dormacyReason,
                            "gender" => $gender,
                            "pwd" => $pwd

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