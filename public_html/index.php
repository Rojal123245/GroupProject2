<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Woodland University Online Learning Site</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../assets/css/style.css">

        <!-- Font-awesome icons -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    </head>
    <body class="login-page-body">
        <!-- Index Page Code -->
        <!-- Header and navbar -->
        <header>
            <!-- Just an image -->
            <nav class="navbar navbar-light bg-light justify-content-between">
                <a class="navbar-brand" href="#">
                    <img src="../assets/images/logo.png">
                    <img src="../assets/images/name.png">
                </a>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  <i class="fas fa-sign-in-alt"></i> Sign In
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Student / Staff Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <!-- Modal Header -->
                      <!-- Modal Body -->
                      <div class="modal-body">
                        <!-- Login Form -->
                        <form action="../template/loginCheck.php" method="POST">
                          <div class="form-group">
                            <label for="username"><i class="fas fa-user"></i> Username</label>
                            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username" name="username" required>
                            <small id="emailHelp" class="form-text text-muted">Students: Log in with University ID | Staffs: Log in with Staff ID</small>
                          </div>
                          <div class="form-group">
                            <label for="password"><i class="fas fa-key"></i> Password</label>
                            <input type="password" class="form-control" id="password" name="pwd" placeholder="Password" required>
                          </div>
                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                          <p><a href="#">Forgot Password?</a></p>
                        </form>
                        <!-- Login Form -->
                      </div>
                      <!-- Modal Body -->
                      <!-- Modal Footer -->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                      </div>
                      <!-- Modal Footer -->
                    </div>
                  </div>
                </div>
                <!-- Modal -->
            </nav>
        </header>
        <!-- Header and navbar -->

        <!-- Main Section -->
        <main>
            <!-- Introduction of the site -->
            <section class="first-section">
                <div class="intro">
                    <h4>Welcome to Woodlands University Online Learning Site!</h4>
                    <h5>Students and Staffs Please log in to access the service.</h5>
                    <h6>Guest Login is not available at the moment.</h6>
                </div>
            </section>
            <!-- Buttons for main-contents -->
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="#" class="btn btn-secondary" role="button">Notices</a>
              <a href="#" class="btn btn-secondary" role="button">Events</a>
              <a href="#" class="btn btn-secondary" role="button">FAQs</a>
              <a href="#" class="btn btn-secondary" role="button">Extras</a>
            </div>

            <!-- Video and main contents of the page -->
            <section class="second-section">
                <!-- For video -->
                <div class="intro-vid">
                    <video src="vid.mp4" loop controls width="100%"></video>
                    <h5>Video Caption or Title</h5>
                    <hr>
                    <h6>Description of the video(optional)</h6>
                </div>
                <!-- For video -->

                <!-- For other contents -->
                <div class="main-contents">
                    <div id="accordion">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Important Notices
                            </button>
                          </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              News And Events
                            </button>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Frequently Asked Questions
                            </button>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Extra Information
                            </button>
                          </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <!-- For other contents -->
            </section>
        </main>
        <!-- Main Section -->

        <!-- Footer and Contact Part -->
        <footer>
            <div class="contacts">
                <h4>Contacts Information</h4>
                <h5>And Social media links</h5>
                <br>
                <br>
                <br>
                <br>
            </div>
            <p>Copyright &copy; Woodlands University College. 2018</p>
        </footer>
        <!-- Footer and Contact Part -->
        <!-- Index Page Code -->




        <!-- For popper.js and JQuery -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
