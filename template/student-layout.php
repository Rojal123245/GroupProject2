<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pageTitle; ?></title>
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/studentHome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">LOGO </a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">User <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation" class="dropdown-header">My Sites</li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a href="#">First Item</a></li>
                                <li role="presentation"><a href="#">Second Item</a></li>
                                <li role="presentation"><a href="#">Third Item</a></li>
                            </ul>
                        </li>
                        <li><a href=""><i class="fa fa-power-off" style="font-size: 20px;"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active" role="presentation"><a href="#">Home</a></li>
                        <li role="presentation"><a href="#">Help</a></li>
                        <li role="presentation"><a href="#">Learning Development</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container" style="width: 800px;">
            <div class="panel-group">
                <div class="panel panel-default" style="text-align: center;">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" href="#collapse1">2017/2018</a>
                        </h3>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <ul class="list-group" style="display: inline-flex;flex-direction: row;">
                            <li class="list-group-item"><span>
                                <div class="modulesInfo">
                                    <a href="database.html"><img src="assets/img/data.jpeg" alt="Database" title="Database"></a>
                                    <h4>Database</h4>
                                    <h5>CSY2038</h5>
                                    <h4>"Progress Bar"</h4>
                                    <h6 style="border-top: 2px groove #e9e9e9;padding-top: 3px;">This Week => Topic:08</h6>
                                </div>
                            </span></li>
                            <li class="list-group-item"><span>
                                <div class="modulesInfo">
                                    <a href="#"><img src="assets/img/php.jpeg" alt="Web Programming" title="Web Programming"></a>
                                    <h4>Web Programming</h4>
                                    <h5>CSY2028</h5>
                                    <h6 style="border-top: 2px groove #e9e9e9;padding-top: 3px;">This Week => Topic:09</h6>
                                </div>
                            </span></li>
                            <li class="list-group-item"><span>
                                <div class="modulesInfo">
                                    <a href="#"><img src="assets/img/sys.jpeg" alt="Computer System" title="Computer System"></a>
                                    <h4>Computer System</h4>
                                    <h5>CSY1014</h5>
                                    <h6 style="border-top: 2px groove #e9e9e9;padding-top: 3px;">This Week => Topic:10</h6>
                                </div>
                            </span></li>
                            <li class="list-group-item"><span>
                                <div class="modulesInfo">
                                    <a href="#"><img src="assets/img/webDev.jpeg" alt="Web Development" title="Web Development"></a>
                                    <h4>Web Development</h4>
                                    <h5>CSY14</h5>
                                    <h6 style="border-top: 2px groove #e9e9e9;padding-top: 3px;">This Week => Topic:08</h6>
                                </div>
                            </span></li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" href="#collapse2">2016/2017</a>
                        </h3>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <ul class="list-group" style="display: inline-flex;flex-direction: row;">
                            <li class="list-group-item"><span>
                                <div class="modulesInfo">
                                    <a href="#"><img src="assets/img/sys.jpeg" alt="Computer System" title="Computer System"></a>
                                    <h4>Computer System</h4>
                                    <h5>CSY1014</h5>
                                    <h6 style="border-top: 2px groove #e9e9e9;padding-top: 3px;">This Week => Topic:24</h6>
                                </div>
                            </span></li>
                            <li class="list-group-item"><span>
                                <div class="modulesInfo">
                                    <a href="#"><img src="assets/img/webDev.jpeg" alt="Web Programming" title="Web Programming"></a>
                                    <h4>Web Programming</h4>
                                    <h5>CSY2028</h5>
                                    <h6 style="border-top: 2px groove #e9e9e9;padding-top: 3px;">This Week => Topic:24</h6>
                                </div>
                            </span></li>
                            <li class="list-group-item"><span>
                                <div class="modulesInfo">
                                    <a href="#"><img src="assets/img/data.jpeg" alt="Database" title="Database"></a>
                                    <h4>Database</h4>
                                    <h5>CSY2038</h5>
                                    <h6 style="border-top: 2px groove #e9e9e9;padding-top: 3px;">This Week => Topic:24</h6>
                                </div>
                            </span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="stBody">
            <div class="smallDiv">
                <h3>Attendance</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6 col-sm-6" style="display: inline-flex; flex-direction: row;">
                            <h4 style="margin-top: 0;">Total Attendance: </h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valumax="100" id="myProgressBar"> 
                                    30%<span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 80%;">
                        <table class="table-responsive table">
                            <thead>
                                <tr>
                                    <th>Month:</th>
                                    <th>College Days:</th>
                                    <th>Present Days:</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                    <h3 style="border-top: 2px groove #e9e9e9; padding: 5px; width: 80%;margin:0 40px;">Result</h3>
                    <div style="width: 80%;">
                        <table class="table-responsive table">
                            <thead>
                                <tr>
                                    <th>Subject:</th>
                                    <th>Term I: </th>
                                    <th>Term II:</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="announcement">
                <h3><center>Announcement</center></h3>
                <p><center>There is no announcement at the moment.</center></p>
            </div>
            <div class="events">
                <h3><center>Events</center></h3>
                <p><center><u>Upcoming Events</u></center></p>
                <ol>
                    <li>One</li>
                    <li>Two</li>
                </ol>
            </div>
        </div>
        <script src="../../assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="../../assets/js/student/progressBar.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

</html>
