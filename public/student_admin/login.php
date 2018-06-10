<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Student Login';
  if(is_post_request()){
    $slogname=isset($_POST['slogname'])?$_POST['slogname']:'NULL';
    $spwd=isset($_POST['spwd'])?$_POST['spwd']:''; 
    
    if(!Slogname_Exist($slogname)){
      redirect_to(url_for('/student_admin/login.php'));
    }
    if(!Spwd_Correct($slogname, $spwd)){
      redirect_to(url_for('/student_admin/login.php'));
    }
    
    $student = Find_Student_By_Slogname($slogname);
    student_log_in($student);
    redirect_to(url_for('/student/jobs.php'));
  }
  include(SHARED_PATH . '/login_header.php'); 
?>

<body class="text-center">
  <form class="form-signin" action="<?php echo url_for('/student_admin/login.php'); ?>" method="post"> 

    <img class="mb-4" src="../../monkey.ico" alt="" width="80" height="80">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="loginname" class="sr-only">Login Name</label>
    <input type="txt" name="slogname" class="form-control" placeholder="Login Name" value="<?php echo h($slogname); ?>" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="spwd" class="form-control" placeholder="Password" value="<?php echo h($spwd); ?>" required>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>


<?php include(SHARED_PATH . '/login_footer.php'); ?>
