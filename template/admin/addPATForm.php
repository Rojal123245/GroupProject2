<?php 
    require '../../databaseConnect/connectSQL.php';
?>
<form method="POST" action="add-PAT.php">
    <h2 class="text-center">Add Personal Tutor</h2>
    <div class="form-group">
        <label for="studentOption">Select Student</label>
<<<<<<< HEAD
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

=======
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
>>>>>>> 97a012958e944b94e4ff1f690f61bb9a058a613a
    </div>
    <div class="form-group">
        <label for="staffOption">Select Staff</label>
        <select class="form-control" id="staffOption" name="staffId">
            <?php 
<<<<<<< HEAD
=======
               // require '../../databaseConnect/connectSQL.php';
>>>>>>> 97a012958e944b94e4ff1f690f61bb9a058a613a
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