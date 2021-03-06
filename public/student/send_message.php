<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Message';
  include(SHARED_PATH . '/student_header.php'); 
  require_student_login();
?>
<main role="main" class="container">
  <div class="my-3 p-3 bg-white rounded box-shadow">

    <h6 class="border-bottom border-gray pb-2 mb-0">Send Message</h6>
    <br><br>

    
    <div class="row">
      <div class="col-md-2"></div>
 
      <div class="col-md-8">

      <form class="needs-validation" novalidate action="<?php echo url_for('/student/send_message_result.php'); ?>" method="post">
        <div class="row">  
          <div class="col-md-6 mb-3">
            <label for="name">Logname</label>
            <input type="text" class="form-control" name="sname" placeholder="" value="<?php echo h($slogname); ?>" required>
            <div class="invalid-feedback">
              Valid logname is required.
            </div>
          </div>
        </div>
                
        <div class="mb-3">
          <label for="username">Message</label>
          <textarea type="text" class="form-control" name="message" value="<?php echo h($message); ?>"  rows="5">
          </textarea>
        </div>

        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
      </form>

    
      </div>
    </div>
  </div>
</main>
<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>