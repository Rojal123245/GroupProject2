<?php 
    require '../../databaseConnect/connectSQL.php';
?>
<form method="POST" action="add-time-table.php" class="add-form z-depth-2">
    <h2 class="text-center form-heading z-depth-1-half">Add Time Table</h2>
    <div class="form-group">
        <label for="staffOption">Select Tutor</label>
        <select class="form-control" id="staffOption" name="tutorId" >
            <?php 
                $query = new QueryDatabase($pdo, "staff");
                $stmt = $query->findAll();
                foreach($stmt as $row){
                    echo '<option value="'.$row['staffId'].'">'.$row['staffFirstName'].' '.$row['staffSurName'].'
                    </option>';
                }
            ?>
        </select>

    </div>
    
     <div class="form-group">
        <label for="moduleOption">Select Module</label>
        <select class="form-control" id="moduleOption" name="moduleId" >
            <?php 
                $query = new QueryDatabase($pdo, "module");
                $stmt = $query->findAll();
                foreach($stmt as $row){
                    echo '<option value="'.$row['module_id'].'">'.$row['moduleName'].'
                    </option>';
                }
            ?>
        </select>

    </div>
     
    <?php 
        $formData = [["text", "time","Time"],["number", "roomNo","Room No"],["text", "day", "Day"],["number","level","Level"]];
        $getRow = [];
        require '../../functions/form-generate-function.php';

     ?>
     
     <div class="form-group">
        <label for="studyOption">Lecture or Tutorial</label>
        <select class="form-control" id="studyOption" name="lectureOrTutorial" >
            <option value="lecture">Lecture</option>
            <option value="turorial">Tutorial</option>
        </select>


    </div>
     
     
    <div class="form-group text-center">
        <input type="submit" name="submit" value="Add Time Table" class="btn btn-primary">
    </div>
   
</form>