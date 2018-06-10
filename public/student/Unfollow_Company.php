<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Unfollow Company';
  if(!isset($_GET['cid'])) {
    redirect_to(url_for('/student/following.php'));
  }
  $cid = $_GET['cid'];
  include(SHARED_PATH . '/student_header.php'); 
  $boolean = Unfollow_Company($_SESSION['sid'], $cid);
?>

<main role="main" class="container">
<br><br><br>
<div class="starter-template">
<?php if($boolean){ ?>
<h1>Unfollow Company Sucuessfully</h1>
<?php } else{ ?>
<h1>Unfollow Company Unsucuessfully</h1>
<?php } ?>
<div class="col-12 col-md-2"> 
  <a class="btn btn-secondary" href="<?php echo url_for('/student/following.php')?>" role="button">Back</a>
</div>
</div>