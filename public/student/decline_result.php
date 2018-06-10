<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Decline Result';
  if(!isset($_GET['sid'])) {
    redirect_to(url_for('/student/friend_request.php'));
  }
  $tosid = $_GET['sid'];
  include(SHARED_PATH . '/student_header.php'); 
  $boolean = Decline_Friend_Request($tosid, $_SESSION['sid']);
?>

<main role="main" class="container">
<br><br><br>
<div class="starter-template">
<?php if($boolean){ ?>
<h1>Decline Sucuessfully</h1>
<?php } else{ ?>
<h1>Decline Unsucuessfully</h1>
<?php } ?>
<div class="col-12 col-md-2"> 
  <a class="btn btn-secondary" href="<?php echo url_for('/student/friend_request.php')?>" role="button">Back</a>
</div>
</div>

<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>