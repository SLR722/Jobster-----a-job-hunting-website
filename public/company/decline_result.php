<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Decline Result';
  if(!isset($_GET['aid'])) {
    redirect_to(url_for('/company/applied.php'));
  }
  $aid = $_GET['aid'];
  include(SHARED_PATH . '/company_header.php'); 
  $boolean=Decline($aid);
?>

<main role="main" class="container">
<br><br><br>
<div class="starter-template">
<?php if($boolean){ ?>
<h1>Decline Successfully</h1>
<?php } else{ ?>
<h1>Decline Unsuccessfully</h1>
<?php } ?>
<div class="col-12 col-md-2"> 
  <a class="btn btn-secondary" href="<?php echo url_for('/company/applied.php')?>" role="button">Back</a>
</div>
</div>

<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>