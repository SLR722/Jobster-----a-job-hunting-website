<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Apply_Job';
  if(!isset($_GET['jid'])) {
    redirect_to(url_for('/student/jobs.php'));
  }
  $jid = $_GET['jid'];
  include(SHARED_PATH . '/student_header.php'); 
  $boolean = Apply_Job($_SESSION['sid'], $jid);
?>

<main role="main" class="container">
<br><br><br>
<div class="starter-template">
<?php if($boolean){ ?>
<h1>Apply Job Sucuessfully</h1>
<?php } else{ ?>
<h1>Apply Job Unsucuessfully</h1>
<?php } ?>
<div class="col-12 col-md-2"> 
  <a class="btn btn-secondary" href="<?php echo url_for('/student/jobs.php')?>" role="button">Back</a>
</div>
</div>

<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>