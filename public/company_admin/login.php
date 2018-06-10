<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Company Login';
  if(is_post_request()){
    $cname=isset($_POST['cname'])?$_POST['cname']:'NULL';
    $cpwd=isset($_POST['cpwd'])?$_POST['cpwd']:''; 
    
    if(!Cname_Exist($cname)){
      redirect_to(url_for('/company_admin/login.php'));
    }
    if(!Cpwd_Correct($cname, $cpwd)){
      redirect_to(url_for('/company_admin/login.php'));
    }
    
    $company = Find_Company_By_Cname($cname);
    company_log_in($company);
    redirect_to(url_for('/company/jobs.php'));
  }
  include(SHARED_PATH . '/login_header.php'); 
?>

<body class="text-center">
  <form class="form-signin" action=" <?php echo url_for('/company_admin/login.php'); ?>" method="post"> 

    <img class="mb-4" src="../../monkey.ico" alt="" width="80" height="80">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="loginname" class="sr-only">Company Name</label>
    <input type="txt" name="cname" class="form-control" placeholder="Company Name" value="<?php echo h($cname); ?>" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="cpwd" class="form-control" placeholder="Password" value="<?php echo h($cpwd); ?>" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

<?php include(SHARED_PATH . '/login_footer.php'); ?>
