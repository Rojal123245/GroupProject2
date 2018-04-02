<?php 
switch ($active) {
  case '0':
    $activeStatus0 = "active";
    break;
   case '1':
    $activeStatus1 = "active";
    break;
  
   case '2':
    $activeStatus2 = "active";
    break;
  
   case '3':
    $activeStatus3 = "active";
    break;
   case '4':
    $activeStatus4 = "active";
    break;
  
  default:
    $activeStatus0 = "active";
    break;
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../../assets/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../../assets/css/staffstyle.css" rel="stylesheet">
</head>

<body>
    <!-- Start your project here-->
     <!--Double navigation-->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color">
            <!-- Navbar brand -->
            <div>
                <a class="navbar-brand" href="#">
                    <img src="../../assets/images/logo.png" height="70px" alt="University Logo">
                </a>
            </div>

            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="announcement.php?id=<?php echo $_GET['id']; ?>">Announcement</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Modules
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="module.php">Module 1</a>
                        <a class="dropdown-item" href="module.php">Module 2</a>
                        <a class="dropdown-item" href="module.php">Module 3</a>
                        <a class="dropdown-item" href="module.php">Module 4</a>
                        <a class="dropdown-item" href="module.php">Module 5</a>
                        <a class="dropdown-item" href="module.php">Module 6</a>
                    </div>
                </li>
              
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
                <!-- Links -->
            </div>
            <!-- Collapsible content -->

        </nav>
        <!-- /.Navbar -->
    </header>
    
    <main class="module-main example z-depth-1-half">
        <div class="module-page">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link <?php echo $activeStatus0; ?>" id="pills-overview-tab" href='module.php?id=<?php echo $_GET['id']; ?>' role="tab">Module Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $activeStatus1; ?>" id="pills-announcement-tab" href="announcement.php?id=<?php echo $_GET['id']; ?>" role="tab">Announcement</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $activeStatus2; ?>" id="pills-content-tab" href="content.php?id=<?php echo $_GET['id']; ?>" role="tab">Content</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo $activeStatus3; ?>" id="pills-discuss-tab" href="assignment.php?id=<?php echo $_GET['id']; ?>" role="tab">Assessment</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link <?php echo $activeStatus4; ?>" id="pills-discuss-tab" href="discussion.php?id=<?php echo $_GET['id']; ?>" role="tab">Discussion Panel</a>
              </li>
            
            </ul>
            <hr>
        </div>
        <?php echo $content; ?>
    </main>

    <!-- Footer Part -->
    <footer>
        <div class="social-icons">
            <i class="fa fa-facebook-square fa-2x" aria-hidden="true" title="Facebook"></i>
            <i class="fa fa-twitter-square fa-2x" aria-hidden="true" title="Twitter"></i>
            <i class="fa fa-instagram fa-2x" aria-hidden="true" title="Instagram"></i>
            <i class="fa fa-youtube-play fa-2x" aria-hidden="true" title="Youtube"></i>
            <i class="fa fa-linkedin-square fa-2x" aria-hidden="true" title="Linked In"></i>
            <i class="fa fa-medium fa-2x" aria-hidden="true" title="Medium"></i>
            <i class="fa fa-vimeo-square fa-2x" aria-hidden="true" title="Vimeo"></i>
        </div>
        <p>Copyright &copy; Woodlands University College. All rights reserved. </p>
    </footer>
    <!-- Footer Part -->
    <!-- /Start your project here-->


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
</body>

</html>