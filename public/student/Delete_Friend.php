<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Delete Friend';
  if(!isset($_GET['sid'])) {
    redirect_to(url_for('/student/search.php'));
  }
  $sid = $_GET['sid'];
  include(SHARED_PATH . '/student_header.php'); 
  $boolean = Delete_Friend($_SESSION['sid'], $sid);
?>

<main role="main" class="container">
<br><br><br>
<div class="starter-template">
<?php if($boolean){ ?>
<h1>Delete Friend Sucuessfully</h1>
<?php } else{ ?>
<h1>Delete Friend Unsucuessfully</h1>
<?php } ?>
<div class="col-12 col-md-2"> 
  <a class="btn btn-secondary" href="<?php echo url_for('/student/search.php')?>" role="button">Back</a>
</div>
</div>

<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>