<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Share';
  if(!isset($_GET['jid'])) {
    redirect_to(url_for('/student/jobs.php'));
  }
  $jid = $_GET['jid'];
  include(SHARED_PATH . '/student_header.php'); 
  require_student_login();
?>
<main role="main" class="container">
  <div class="my-3 p-3 bg-white rounded box-shadow">

    <h6 class="border-bottom border-gray pb-2 mb-0">Share</h6>
    <br><br>

    
    <div class="row">
      <div class="col-md-2"></div>
 
      <div class="col-md-8">

      <form class="needs-validation" novalidate action="<?php echo url_for('/student/share_result.php'); ?>" method="post">
        <div class="row">  
          <div class="col-md-6 mb-3">
            <label for="name">Logname</label>
            <input type="text" class="form-control" name="sname" placeholder="" value="<?php echo h($slogname); ?>" required>
            <div class="invalid-feedback">
              Valid logname is required.
            </div>
          </div>
        </div>
        <?php echo "<input type='hidden' name='jid' value='$jid'>"; ?>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Share</button>
      </form>

    
      </div>
    </div>
  </div>
</main>
<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>