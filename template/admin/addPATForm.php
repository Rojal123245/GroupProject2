<?php 
    require '../../databaseConnect/connectSQL.php';
?>
<form method="POST" action="add-PAT.php">
    <h2 class="text-center">Add Personal Tutor</h2>
    <div class="form-group">
        <label for="studentOption">Select Student</label>
        <select class="form-control" id="studentOption" name="Stid" >
            <?php 
                $query = new QueryDatabase($pdo, "student");
                $stmt = $query->findAll();
                foreach($stmt as $row){
                    echo '<option value="'.$row['Stid'].'">'.$row['studentFirstName'].'
                    </option>';
                }
            ?>
        </select>

    </div>
    <div class="form-group">
        <label for="staffOption">Select Staff</label>
        <select class="form-control" id="staffOption" name="staffId">
            <?php 
                $staffObj = new QueryDatabase($pdo, 'staff');
                $stmt=$staffObj->findAll();
                echo '<ul>';
                foreach($stmt as $row){?>
                    <option value="<?php echo $row['staffId']; ?>">
                       <?php echo $row['staffFirstName'].' '.$row['staffSurName'];?>
                    </option>
             <?php   }
                echo '</ul>';
            ?>
        </select>
    </div>
     
    <div class="form-group text-center">
        <input type="submit" name="submit" value="Add Module" class="btn btn-primary">
    </div>
   
</form>