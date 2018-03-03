<form method="POST" action="add-module.php">
    <h2 class="text-center">Add Module</h2>
    <?php 
        $formData = [["number","level","Level"], ["number", "pts", "Pts"], ["text", "title", "Module Name"], ["number", "ass1", "Assignment1"], ["number", "ass2", "Assignment2"], ["number", "exam", "Exam"]];
        require '../../functions/form-generate-function.php';
    ?>
    <div>
    <div class="form-group">
        <label for="degreeOption">Select Module</label>
        <select class="form-control" id="moduleOption" name="course_id">
            <?php 
                require '../../databaseConnect/connectSQL.php';
                require'../../classes/databaseQuery.php';
                $courseObj = new QueryDatabase($pdo, 'course');
                $stmt=$courseObj->findAll();
                echo '<ul>';
                foreach($stmt as $row){?>
                    <option value="<?php echo $row['course_id']; ?>">
                       <?php echo $row['courseName'];?>
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