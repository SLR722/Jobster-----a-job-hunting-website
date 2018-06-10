<?php 
  require_once('../private/initialize.php'); 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../monkey.ico">

    <title>Jobster - Welcome</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo url_for('/stylesheets/welcome.css')?>"rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Jobster</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo url_for('/index.php')?>">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Welcome!</h1>
          <p>Jobster is a job hunting web application.
          To student, we support personal information management, 
          social network, following top companys, privacy protection.
          To company, we support job posting, student search...
          </p>

        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-6">
            <h2>Student</h2>
            <h5>Find The Job That Fits Your Life.</h5>
            <p>See hundreds of job posts, apply and get interview invitation. 
            Build your own social network and get job recommendations.
            Let top companies know your work experience and education background and hire you
            </p>            
            <p>
              <a class="btn btn-secondary" href="<?php echo url_for('/student_admin/login.php')?>" role="button">Login</a>
              <a class="btn btn-secondary" href="<?php echo url_for('/student_admin/register.php')?>" role="button">Register</a>
            </p>           
          </div>

          <div class="col-md-6">
            <h2>Company</h2>
            <h5>Hire the right people.Find them here.</h5>
            <p>Advertise your jobs and promote your employer brand to the candidates you want.
            Post open positions across web.
            Tell your company story to the candidates researching you.
            Flexible packages based on your budget.</p>
            <p>
              <a class="btn btn-secondary" href="<?php echo url_for('/company_admin/login.php')?>" role="button">Login</a>
              <a class="btn btn-secondary" href="<?php echo url_for('/company_admin/register.php')?>" role="button">Register</a>
            </p>
          </div>
          
        </div>
        <hr>
      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; <?php echo date('Y'); ?> Jobster, Inc.</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
  </body>
</html>

<?php
  db_disconnect($db);
?>