<form method="POST" action="add-module.php" class="add-form z-depth-2">
    <h2 class="text-center form-heading z-depth-1-half">Add Module</h2>
    <?php 
        $formData = [["text","moduleName","Module Name"], ["number", "level", "Level"], ["number", "pts", "Pts"], ["text", "ass1", "Assignment1"], ["text", "ass2", "Assignment2"], ["text", "exam", "Exam"]];
        $getRow = [];
        require '../../functions/form-generate-function.php';
    ?>
    <div>
    <div class="form-group">
        <label for="degreeOption">Select Course</label>
        <select class="form-control" id="moduleOption" name="course_id">
            <?php 
                require '../../databaseConnect/connectSQL.php';
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
        <input type="submit" name="submit" value="Add Module" class="btn btn-primary hoverable">
    </div>
</form>