<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Message Detail';
  if(!isset($_GET['mid'])) {
    redirect_to(url_for('/student/unread_message.php'));
  }
  $mid = $_GET['mid'];
  include(SHARED_PATH . '/student_header.php'); 
  $message =  Read_The_Unread_Message($mid);
?>

<main role="main" class="container">
<br><br><br>
<div class="starter-template">
<?php echo $message['mcontent']; ?>
<div class="col-12 col-md-2"> 
  <a class="btn btn-secondary" href="<?php echo url_for('/student/unread_message.php')?>" role="button">Back</a>
</div>
</div>

<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>