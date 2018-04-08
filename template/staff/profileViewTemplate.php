<?php 
	session_start();
	require '../../databaseConnect/connectSQL.php';
	// require '../../classes/databaseQuery.php';
	$p = "staffId";
	$query = new QueryDatabase($pdo, "staff");
?>
<div>
	<form method="POST" action="<?php echo 'profile.php?p='.$p.'' ?>&id=1">
	 	<?php
	 		function update($key, $value, $query){
				$querySearch = $query->find($key, $value);
				while ($getRow = $querySearch->fetch()) {
					$formData = [["hidden", "staffId", ""], ["text", "staffFirstName", "First Name"], ["text", "staffMiddleName", "Middle Name"], ["text", "staffSurName", "Last Name"], ["email", "email", "Email"], ["text", "address", "Address"], ["text", "phone", "Phone Number"], ["text", "role", "Role", "disabled"], ["text", "specialistSubject", "Specialist Subject", "disabled"], ["text", "status", "Status", "disabled"], ["text", "dormacyReason", "Dormacy Reason", "disabled"], ["text", "gender", "Gender"], ["password", "pwd", "Password"]];
				 	require '../../functions/form-generate-function.php';
				 	echo '<input type="checkbox" onclick="show()">Show Password <br>';
				}
			}
	 		update("staffId", $_SESSION['StaffID'], $query);
	 	?>
 		<input type="submit" name="submit" value="Update" class="btn btn-success">
 	</form>
 </div>