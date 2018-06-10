<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Send Message Result';
  if(is_post_request()){
    $toslogname=$_POST['slogname']??'';
    $message=$_POST['message']??'';  
    $boolean = Send_Message($_SESSION['sid'], $toslogname, $message);
  }
  include(SHARED_PATH . '/student_header.php'); 
?>


<main role="main" class="container">
<br><br><br>
<div class="starter-template">
<?php if($boolean){ ?>
<h1>Reply Message Successfully</h1>
<?php } else{ ?>
<h1>Reply Message Unsuccessfully</h1>
<?php } ?>
<div class="col-12 col-md-2"> 
  <a class="btn btn-secondary" href="<?php echo url_for('/student/send_message.php')?>" role="button">Back</a>
</div>
</div>

<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>