
<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
	<title></title>
	<script scr="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$('#display_btn').off().on()({
				click:function(){
					$('#display_pdf').prop('src',<?php require'../../controllers/display-pdf.php';?>);
					/*$bool = true;
					if(bool ==true){
						 if(isset[$_GET['fid']]){
						 	$fid =$_GET['fid'];
						 	 echo'<a href="../../controllers/display-pdf.php?fid =' .$fid .'">id</a>';
						 }
					}
					document.getElementById("link").click()*/

				}
			});
		});
	</script>
</head>
<body>
<input type="button" id="display_btn" value="click to display pdf">
<br>
<iframe id="display-pdf" style="width: 600px;height: 650px">
</body>
</html>