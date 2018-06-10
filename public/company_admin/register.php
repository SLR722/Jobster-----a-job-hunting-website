
<?php 
  require_once('../../private/initialize.php'); 
  if(is_post_request()){
    if (!isset($_POST['cname']) and isset($_POST['cpwd'])){
      redirect_to(url_for('/company_admin/register.php'));
    }
    $company = [];
    $company['cname'] = $_POST['cname']??'';
    $company['cpwd'] = $_POST['cpwd']??'';
    $company['clocation'] = $_POST['clocation']??'';
    $company['cindustry'] = $_POST['cindustry']??'';
    Insert_Company($company);
    $inserted = Find_Company_By_Cname($company['cname']);
    company_log_in($inserted);
    redirect_to(url_for('/company/jobs.php'));   
  }

  $page_title = 'Company Register';
  include(SHARED_PATH . '/register_header.php'); 
?>

<div class="py-5 text-center">
  <img class="d-block mx-auto mb-4" src="../../monkey.ico" alt="" width="144" height="144">
  <h2>Company Register</h2>
  <p class="lead">Your company information will be protected</p>
</div>

<div class="row">
  <div class="col-md-2"></div>
 
  <div class="col-md-8">
    <h4 class="mb-3">Company Information</h4>

    <form class="needs-validation" novalidate action="<?php echo url_for('/company_admin/register.php'); ?>" method="post">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="name">Company Name</label>
          <input type="text" class="form-control" name="cname" placeholder="Name" value="<?php echo h($cname); ?>" required>
          <div class="invalid-feedback">
            Valid company name is required.
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="username">Password</label>
        <div class="input-group">
          <input type="password" class="form-control" name="cpwd" placeholder="Password" value="<?php echo h($cpwd); ?>" required>
          <div class="invalid-feedback">
            Password is required.
          </div>
        </div>
      </div>

      <hr class="mb-4">
            
      <div class="mb-3">
        <label for="location">Location<span class="text-muted">(Optional)</span></label>
        <input type="text" class="form-control" name="clocation" value="<?php echo h($clocation); ?>" placeholder="Location">
      </div>

      <div class="mb-3">
        <label for="industry">Industry<span class="text-muted">(Optional)</span></label>
        <input type="text" class="form-control" name="cindustry" value="<?php echo h($cindustry); ?>" placeholder="Industry">
      </div>
      
      <hr class="mb-4">
      
      <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
    </form>

<?php include(SHARED_PATH . '/register_footer.php'); ?>