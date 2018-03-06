<?php 
	function update($key, $value, $query){
		$querySearch = $query->find($key, $value);
		while ($getRow = $querySearch->fetch()) {
			$formData = [["hidden", "Stid", ""], ["text", "studentFirstName", "First Name"], ["text", "studentMiddleName", "Middle Name"], ["text", "studentSurName", "Last Name"], ["email", "email", "Email"], ["text", "addressTermTime", "Term Time Address"], ["text", "addressNonTT", "Non Term Time Address"], ["text", "phone", "Phone Number"], ["number", "currentCoursCode", "Course Code"], ["text", "entryQualification", "Qualification"], ["text", "gender", "Gender"], ["text", "status", "Status"], ["text", "dormacyReason", "Dormacy Reason"]];
		 	require '../../functions/form-generate-function.php';
		}
	}
?>