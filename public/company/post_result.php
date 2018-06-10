<?php 
  require_once('../../private/initialize.php'); 
  if(!is_post_request()) { 
    redirect_to(url_for('/company/post.php'));
  }
  require_company_login();
  $cid        = $_SESSION['cid'];
  $jtitle     = $_POST['jtitle']??'';
  $jlocation  = $_POST['jlocation']??''; 
  $salary     = $_POST['salary']??''; 
  $degree     = $_POST['degree']??''; 
  $major      = $_POST['major']??''; 
  $description= $_POST['description']??''; 
  include(SHARED_PATH . '/company_header.php');  
  $boolean = Post_Job($cid, $jtitle, $jlocation, $salary, $degree, $major, $description);


?>


<main role="main" class="container">
<br><br><br>
<div class="starter-template">
<?php if($boolean){ ?>
<h1>Post Job Successfully</h1>
<?php } else{ ?>
<h1>Fail to post</h1>
<?php } ?>
<div class="col-12 col-md-2"> 
  <a class="btn btn-secondary" href="<?php echo url_for('/company/post.php')?>" role="button">Back</a>
</div>
</div>


<?php
  include(SHARED_PATH . '/company_footer.php'); 
?>