<form method="POST" action="add-course.php">
    <h2 class="text-center">Add Course</h2>
    <?php 
        $formData = [["text", "courseName", "Course Name"]];
        $getRow = [];
        require '../../functions/form-generate-function.php';
    ?>
    <div class="form-group">
        <label for="degreeOption">Select Degree</label>
        <select class="form-control" id="degreeOption" name="degree">
          <option value="Bsc.(Hons)">Bsc.(Hons)</option>
          <option value="BBA(Hons)">BBA(Hons)</option>
          <option value="MBA">MBA</option>
        </select>
    </div>
    <div class="form-group text-center">
        <input type="submit" name="submit" value="Add Course" class="btn btn-primary">
    </div>
</form>