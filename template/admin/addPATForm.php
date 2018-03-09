<form method="POST" action="add-PAT.php">
    <h2 class="text-center">Add Personal Tutor</h2>
    <div class="form-group">
        <label for="studentOption">Select Student</label>
        <select class="form-control" id="studentOption" name="Stid">
            <?php 
                require '../../databaseConnect/connectSQL.php';
                require'../../classes/databaseQuery.php';
                $studentObj = new QueryDatabase($pdo, 'student');
                $stmt=$studentObj->findAll();
                echo '<ul>';
                foreach($stmt as $row){?>
                    <option value="<?php echo $row['Stid']; ?>">
                       <?php echo $row['studentFirstName'].' '.$row['studentSurName'];?>
                    </option>
             <?php   }
                echo '</ul>';
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="staffOption">Select Staff</label>
        <select class="form-control" id="staffOption" name="staffId">
            <?php 
               // require '../../databaseConnect/connectSQL.php';
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