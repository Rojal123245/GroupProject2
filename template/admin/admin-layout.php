<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../../assets/css/admin/style.css" />
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-inverse" style="margin:0;">
            <div class="container-fluid">
                <div class="navbar-header"><a href="index.php" class="navbar-brand navbar-link"><h3>Dashboard</h3></a>
                    <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php 
                            $dropDown = "Admin";
                            $dropDownContent = ["settings", "logout"];
                            require '../../functions/dropDownCode.php';
                         ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row col-md-12">
                <div class="col-md-3 left">
                    <ul class="nav flex-column">
                        <li><a href="index.php">Dashboard</a></li>
                        <?php 
                            $sidebar = ["Student", "Staff", "Courses", "Modules", "Personal Tutor Management", "Report"];
                            require '../../functions/listGenerate.php';
                            listGenerate($sidebar);
                        ?>
                    </ul>
                </div>
                <div class="col-md-9 right">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </body>

</html>
