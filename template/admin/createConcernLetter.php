<script type="text/javascript">
	function validateForm(){
		var fields = $("input[name='cause']").serializeArray(); 
		if (fields.length === 0) 
	    { 
	        alert("Cause/s for the report has not been ticked."); 
	        return false;
	    } 
	    else 
	    { 
	        return true;
	    }
	}
</script>
<form method="POST" action="add-concerLetter.php" onsubmit="return validateForm();">
	<h3>PRIVATE & CONFIDENTIAL</h3>			

	<input type="date" name="reportDate" required>
	<br><br>
	Dear <br>
	<p>Your name has been referred as a possible cause for concern by your module co-ordinator because you are recorded as:</p>

	<input type="checkbox" name="cause" value="PAT">Not attending a personal tutorial meeting	<br>	
	<input type="checkbox" name="cause" value="classIssue">Having poor or no attendance at classes	<br>
	<input type="checkbox" name="cause" value="classworkSubmission">Not submitting coursework	<br>

	<p>It is essential that you see me as soon as possible.  You must do this by</p>
	<input type="date" name="day" placeholder="Deadline" required>.

	 The meeting will provide an opportunity to check and review your progress and find a means of resolving any difficulties you may be experiencing.  You are reminded that all students enrolling on a course at UCN are expected to meet the academic requirements of their programme.  The Student Code details the implications of 'failure to meet academic, professional or vocational requirements' and whilst there may be mitigating circumstances not known to us at this time, you should regard this letter as an informal warning that your continuation on the course may be at risk. Failure to make contact may result in us deeming you to be withdrawn from your course.
	<p>If for any reason you are experiencing difficulties which impact on your academic work, you should contact your personal tutor for advice.  You must however see me as instructed by the 

	<input type="text" name="instruct" placeholder=".............." required>.</p>

	<p>
	Yours sincerely	<br>
	Module Co-Ordinater	<br>
	CC	Student file / Course Leader	<br>
	CAUSE FOR CONCERN LETTER	
	</p>

	<input type="text" name="toStudent" placeholder="To: Student Email">
	
	<div class="form-group text-center">
        <input type="submit" name="submit" value="Create" class="btn btn-primary">
    </div>
</form>
	

