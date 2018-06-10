<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Jobs';
  include(SHARED_PATH . '/company_header.php'); 
  require_company_login();
?>
<main role="main" class="container">
  <div class="my-3 p-3 bg-white rounded box-shadow">

    <h6 class="border-bottom border-gray pb-2 mb-0">Send Message</h6>
    <br><br>

    
    <div class="row">
      <div class="col-md-2"></div>

      <div class="col-md-8">

      <form class="needs-validation" novalidate action="<?php echo url_for('/company/post_result.php'); ?>" method="post">
        <div class="row">  
          <div class="col-md-6 mb-3">
            <label for="name">Title</label>
            <input type="text" class="form-control" name="jtitle" placeholder="" value="<?php echo h($jtitle); ?>" required>
            <div class="invalid-feedback">
              Valid logname is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="name">Location</label>
            <input type="text" class="form-control" name="jlocation" placeholder="" value="<?php echo h($jlocation); ?>" required>
            <div class="invalid-feedback">
              Valid logname is required.
            </div>
          </div>
        </div>

        <div class="row">  
          <div class="col-md-6 mb-3">
            <label for="name">Degree</label>
            <input type="text" class="form-control" name="degree" placeholder="" value="<?php echo h($slogname); ?>">
          </div>
          <div class="col-md-6 mb-3">
            <label for="name">Major</label>
            <input type="text" class="form-control" name="major" placeholder="" value="<?php echo h($slogname); ?>">
          </div>
        </div>

        <div class="mb-3">
            <label for="name">Salary</label>
            <input type="text" class="form-control" name="salary" placeholder="" value="<?php echo h($slogname); ?>">
        </div>
                
        <div class="mb-3">
          <label for="username">Description</label>
          <textarea type="text" class="form-control" name="description" value="<?php echo h($message); ?>"  rows="5">
          </textarea>
        </div>

        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
      </form>

    
      </div>
    </div>
  </div>
</main>
<?php
  include(SHARED_PATH . '/company_footer.php'); 
?>