<form method="POST" action="add-PAT.php">
    <h2 class="text-center">Add Personal Tutor</h2>
    <?php 
        $formData = [["text", "tutorfName", "Tutor First Name"], ["text", "tutorlName", "Tutor Surname"]];
        require '../../functions/form-generate-function.php';
    ?>
    <div>
    <div class="form-group text-center">
        <input type="submit" name="submit" value="Add Course" class="btn btn-primary">
    </div>
</form>