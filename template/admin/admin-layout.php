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
        <div class="admin-dropdown">
            <ul class="navbar-nav mr-auto">
                <!-- Dropdown -->            
                <li class="nav-item dropdown">
                    <?php 
                        $dropDown = "Admin Username";
                        $dropDownContent = ["Profile", "Settings", "Logout"];
                        require '../../functions/dropDownCode.php';
                     ?>
                </li>

            </ul>
        </div>
    </header>
    <!-- Header -->
   
    <!-- Main Content -->
    <main>
        <div class="container">
            <div class="row col-md-12">
                <div class="col-md-3 left" id="sidebar">
                    <ul class="nav flex-column">
                        <li><a href="index.php">Dashboard</a></li>
                        <?php 
                            $sidebar = ["Student", "Staff", "Courses", "Modules", "Personal Tutor Management", "Attendance Records", "Concern Letter", "Report", "Time Table Management", "Diary Management"];
                            require '../../functions/listGenerate.php';
                            listGenerate($sidebar);
                        ?>
                    </ul>
                </div>
                <div class="col-md-9 right content" >
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
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
