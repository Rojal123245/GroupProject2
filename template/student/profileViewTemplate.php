<?php 
	require '../../databaseConnect/connectSQL.php';
	require '../../classes/databaseQuery.php';
	// If staff => action add-staff.php
	// If student => action add-student.php
	$p = "Stid";
	$query = new QueryDatabase($pdo, "student");
?>
<div>
	<form method="POST" action="<?php echo 'profile.php?p='.$p.'' ?>&id=1">
	 	<?php
	 		function update($key, $value, $query){
				$querySearch = $query->find($key, $value);
				while ($getRow = $querySearch->fetch()) {
					$formData = [["hidden", "Stid", ""], ["text", "studentFirstName", "First Name"], ["text", "studentMiddleName", "Middle Name"], ["text", "studentSurName", "Last Name"], ["email", "email", "Email", "disabled"], ["text", "addressTermTime", "Term Time Address"], ["text", "addressNonTT", "Non Term Time Address", "disabled"], ["text", "phone", "Phone Number"], ["text", "currentCoursCode", "Current Course Code", "disabled"], ["text", "entryQualification", "Qualification", "disabled"], ["text", "gender", "Gender ", "disabled"], ["text", "status", "Status", "disabled"], ["text", "dormacyReason", "Dormacy Reason", "disabled"], ["password", "pwd", "Password"]];
				 	require '../../functions/form-generate-function.php';
				 	echo '<input type="checkbox" onclick="show()">Show Password <br>';
				}
			}
	 		update("Stid", 1, $query);
	 	?>
 		<input type="submit" name="submit" value="Update" class="btn btn-success">
 	</form>
 </div>