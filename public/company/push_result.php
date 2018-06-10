<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Push Result';
  if(!isset($_GET['boolean'])) {
    redirect_to(url_for('/company/push_to_student.php'));
  }
  $boolean = $_GET['boolean'];
  include(SHARED_PATH . '/login_header.php'); 
?>


<main role="main" class="container">
<br><br><br>
<div class="starter-template">
<?php if($boolean){ ?>
<h1>Push Successfully</h1>
<?php } else{ ?>
<h1>Push Unsuccessfully</h1>
<?php } ?>
<div class="col-12 col-md-2"> 
  <a class="btn btn-secondary" href="<?php echo url_for('/company/jobs.php')?>" role="button">Back</a>
</div>
</div>

<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>