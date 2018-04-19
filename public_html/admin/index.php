<?php 
	session_start();
	if (!isset($_SESSION['admin'])) { $title = "Admin Login"; ?>
		<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../../assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/adminstyle.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
</head>

<body> 
    <!-- Header -->
    <header class="z-depth-1-half">        
        <div class="logo">
            <img src="../../assets/images/logo.png" height="60px">
        </div>
        
    </header>
    <!-- Header -->
   
    <!-- Main Content -->
    <main style="width: 40%; margin: 20px auto; background: lightgrey; padding: 3% 5%; border-radius: 10px;" class="z-depth-1-half">
    		<h2 class="text-center">Woodland University College</h2>
    		<h3 class="text-center" style="font-weight: bold; margin-bottom: 20px;">Secure Admin Login System</h3>
          <form method="POST" action="../../template/adminloginCheck.php">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="email" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username" name="username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
            <input type="submit" name="login" class="btn btn-primary" value="Login">
          </form>
        </main>
    <!-- Main Content -->
    
    <!-- Footer -->
    <footer>
        <p>Copyright &copy; All Rights Reserved!</p>
    </footer>
    <!-- Footer -->

    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="../../assets/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../../assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../../assets/js/mdb.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>

</html>

		
			
	<?php }
	else {
		$title = "Dashboard";
		$status = "active";
		$content = "
				<h3>Welcome to Woodland University Dashboard</h3><br>
				<p>This is the control panel of e-learning site of woodland university college. Here, you can alter the site.</p>
				<p>This is the control panel of e-learning site of woodland university college. Here, you can alter the site.</p>
				<p>This is the control panel of e-learning site of woodland university college. Here, you can alter the site.</p>
				<p>This is the control panel of e-learning site of woodland university college. Here, you can alter the site.</p>
				<p>This is the control panel of e-learning site of woodland university college. Here, you can alter the site.</p>
				<p>This is the control panel of e-learning site of woodland university college. Here, you can alter the site.</p>
				<p>This is the control panel of e-learning site of woodland university college. Here, you can alter the site.</p>
			";
		require '../../template/admin/admin-layout.php';
	}

?>