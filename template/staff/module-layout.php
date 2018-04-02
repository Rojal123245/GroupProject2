
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
                    <a class="nav-link" href="#">Announcement</a>
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
                <a class="nav-link active" id="pills-overview-tab" data-toggle="pill" href="#pills-overview" role="tab" aria-controls="pills-overview" aria-selected="true">Module Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-announcement-tab" data-toggle="pill" href="#pills-announcement" role="tab" aria-controls="pills-announcement" aria-selected="false">Announcement</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-content-tab" data-toggle="pill" href="#pills-content" role="tab" aria-controls="pills-content" aria-selected="false">Content</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-assessment-tab" data-toggle="pill" href="#pills-assessment" role="tab" aria-controls="pills-assessment" aria-selected="false">Assessment</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" id="pills-discuss-tab" data-toggle="pill" href="#pills-discuss" role="tab" aria-controls="pills-discuss" aria-selected="false">Discussion Panel</a>
              </li>
            
            </ul>
            <hr>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

              <div class="tab-pane fade" id="pills-announcement" role="tabpanel" aria-labelledby="pills-announcement-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>

              <div class="tab-pane fade materials" id="pills-content" role="tabpanel" aria-labelledby="pills-content-tab">
                  <nav class="term-toggle">
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-term1-tab" data-toggle="tab" href="#nav-term1" role="tab" aria-controls="nav-term1" aria-selected="true">Term 1</a>
                    <a class="nav-item nav-link" id="nav-term2-tab" data-toggle="tab" href="#nav-term2" role="tab" aria-controls="nav-term2" aria-selected="false">Term 2</a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-term1" role="tabpanel" aria-labelledby="nav-term1-tab">
                      <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 1</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                           <?php require '../../controllers/add-lecture-slides'; ?> 
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 2</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 3</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 4</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 5</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 6</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 7</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 8</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 9</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 10</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
              </div>
              <div class="tab-pane fade" id="nav-term2" role="tabpanel" aria-labelledby="nav-term2-tab">
                <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 111</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 12</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 13</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 14</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 15</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 16</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 17</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 18</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 19</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div>
                  <div class="weekly-materials example z-depth-1-half">
                      <h5>Week 20</h5>
                      <h6>Description / Objectives</h6>
                      <hr>
                      <p>
                          <a href="#">Lecture Slides</a> <br>
                          <a href="#">Tutorial Activities</a> <br>
                          <a href="#">Sample Programs</a> <br>
                          <a href="#">Extras</a> <br>
                      </p>
                  </div></div>
            </div>
                  
              </div>

              <div class="tab-pane fade" id="pills-assessment" role="tabpanel" aria-labelledby="pills-assessment-tab">
                <!-- Assessment tabs sub tabs -->
                  <div class="row">
                  <div class="col-4">
                    <div class="list-group" id="list-tab" role="tablist">
                      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Assignment</a>
                      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Submission</a>
                      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Grades</a>
                    </div>
                  </div>
                  <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <p>
                          hyy
                        </p>
                        <p>hey
                        </p>
                      </div>

                      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </div>

                      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </div>                    
                    </div>
                  </div>
                </div>
              </div>
              <!-- Assessment tabs sub tabs -->

            

              <div class="tab-pane fade" id="pills-discuss" role="tabpanel" aria-labelledby="pills-discuss-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
        </div>
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