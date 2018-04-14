<form method="POST" action="add-report.php" enctype="multipart/form-data" class="add-form z-depth-2">
    <h2 class="text-center form-heading z-depth-1-half">Add Report Management</h2>
    <?php 
        $formData = [["date","reportDate", "Report Date"],["text","cause", "Cause", "Cause"],["text","day", "Day"],["text", "instruct", "Instruction"]];
        $getRow = [];
        require '../../functions/form-generate-function.php';
    ?>
    
<div class="form-group text-center">
        <input type="submit" name="submit" value="Assign Report" class="btn btn-primary">
 </div>
</form>

