<?php 
	require '../../databaseConnect/connectSQL.php';
	require '../../classes/databaseQuery.php';
	// If staff => action add-staff.php
	// If student => action add-student.php
	$p = "staffId";
	$query = new QueryDatabase($pdo, "staff");
?>


<!-- 
Bug right over here ahhahahahahahahahhahahhahahahhaha
 -->



<div>
	<form method="POST" action="<?php echo 'profile.php?p='.$p.'' ?>">
	 	<?php
	 		function update($key, $value, $query){
				$querySearch = $query->find($key, $value);
				while ($getRow = $querySearch->fetch()) {
					$formData = [["hidden", "staffId", ""], ["text", "staffFirstName", "First Name"], ["text", "staffMiddleName", "Middle Name"], ["text", "staffSurName", "Last Name"], ["email", "email", "Email"], ["text", "address", "Address"], ["text", "phone", "Phone Number"], ["text", "role", "Role", "disabled"], ["text", "specialistSubject", "Specialist Subject", "disabled"], ["text", "status", "Status", "disabled"], ["text", "dormacyReason", "Dormacy Reason", "disabled"], ["text", "gender", "Gender"], ["password", "pwd", "Password"], ["checkbox", "", "Show Password", "onclick=show()"]];
				 	require '../../functions/form-generate-function.php';
				}
			}
	 		update("staffId", 4501, $query);
	 	?>
 		<input type="submit" name="submit" value="Update" class="btn btn-success">
 	</form>
 </div>