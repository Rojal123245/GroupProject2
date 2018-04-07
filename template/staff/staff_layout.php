<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
       <?php echo $title ?>
    </title>
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
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Modules
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
    <?php 
        $moduleInfo = $module->find('tutor_id', 4503);
        while($moduleName = $moduleInfo->fetch()){
            echo '<a class="dropdown-item" href="../../public_html/staff/module.php?id='.$moduleName['module_id'].'">'.$moduleName['moduleName'].'</a>';
        }
    ?>
                    </div>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../../public_html/staff/profile.php">Profile</a>
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
    <main>
        <!-- Announcement and calender -->
        <div class="section-1">
            <div class="announce example z-depth-1-half">
                <div class="announce-header">
                    <h3>Announcements</h3> 
                </div>
                <hr>
                <div class="announce-body">
                    <?php 
                        $announcementInfo = $announcement->findAll();
                    while ($announcementFetch = $announcementInfo->fetch())  {
                        $staffInfo = $staff->find('staffId', $announcementFetch['staffId']);
                        $staffName = $staffInfo->fetch();
                        echo '
                        <div class="announcement">
                            <h6><strong>'.$announcementFetch['title'].'</strong> by '.$staffName['staffFirstName'].' '.$staffName['staffSurName'].'</h6>
                            <p>'.$announcementFetch['descript'].' </p></div>
                        ';
                    }
                    ?>
                </div>
            </div>
            <div class="calender example z-depth-1-half">
                <img src="img/calender.png" alt="Calender" height="300px">
            </div>
        </div>
        <!-- Announcement and calender -->
        <!-- Courses and Modules -->
        <div class="modules example z-depth-1-half">
            <div class="modules-header">
                <h3>My Modules (<?php 
                    $staffInfo = $staff->find('staffId', 4503);
                    $staffFetch = $staffInfo->fetch();
                    $moduleInfo = $module->find('tutor_id', $staffFetch['staffId']);
                    $moduleName = $moduleInfo->fetch();
                    echo $moduleName['moduleName'];


                 ?>)</h3>
            </div>
            <!--Accordion wrapper-->
            <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                    <div class="card-header" role="tab" id="headingOne">
                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h5 class="mb-0">
                                My modules <i class="fa fa-angle-down rotate-icon float-right"></i>
                            </h5>
                        </a>
                    </div>

                    <!-- Card body -->
                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx" >
                        <div class="card-body">
<?php 
    $moduleInfo = $module->find('tutor_id', $staffFetch['staffId']);
    while($moduleName = $moduleInfo->fetch()){
        echo '
            <div class="module-card example hoverable">
                <div class="module-card-header">
                    <h4>'.$moduleName['moduleCode'].' <br> '.$moduleName['moduleName'].'</h4>
                </div>
                <div class="module-card-body">
                    <a href="module.php?id='.$moduleName['module_id'].'" role="button" class="btn btn-primary">Go Here</a>
                </div>
            </div>
        ';
    }
?>
                            
                        </div>                    
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">

                    <!-- Card header -->
                   

                    <!-- Card body -->
                
                </div>
            </div>
            <!--/.Accordion wrapper-->
        </div>
        <!-- Courses and Modules -->

        <div class="section-3">
            <!-- Discussion Board -->
            <div class="announce example z-depth-1-half discussion" style="width: 55%">
                    <div class="announce-header">
                        <h3>Discussion Board</h3>
                    </div>
                    <hr>
                    <div class="announce-body">
        <?php 
            $dis = $discussion->findAll();
            while ($key = $dis->fetch()) {
                $studentqs = $student->find('Stid', $key['qs_student_id']);
                $stQs = $studentqs->fetch();
                echo '<div class="announcement" id="qs">
                        <h5>'.$key['question'].'</h5>
                        <p>By: '.$stQs['studentFirstName'].' '.$stQs['studentSurName'].'</p>
                    </div>';
            }
        ?>
                </div>
                </div>
            <!-- Discussion Board -->

            <!-- Latest Articles -->
            <div class="example z-depth-1-half articles" style="width: 45%;">
                <div class="announce-header">
                    <h3>Latest Articles</h3>                     
                </div>
                <hr>
                <div class="announce-body">
                    
                </div>
            </div>
            <!-- Latest Articles -->
        </div>
    </main>
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
