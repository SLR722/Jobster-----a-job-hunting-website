<?php
  require_once('../../private/initialize.php'); 
  if(is_post_request()) {
    $slogname=isset($_POST['slogname'])?$_POST['slogname']:'NULL';
    $spwd=isset($_POST['spwd'])?$_POST['spwd']:''; 
    
    if(!Slogname_Exist($slogname)){
      redirect_to(url_for('/student_admin/login.php'));
    }

    if(!Spwd_Correct($slogname, $spwd)){
      redirect_to(url_for('/student_admin/login.php'));
    }
    echo $slogname, $spwd;

    $student = Find_Student_By_Slogname($slogname);
    echo $student['GPA'];
    echo $student['resume'];
    student_log_in($student);
    echo $_SESSION['slogname'];

  }else{
    redirect_to(url_for('/student_admin/login.php'));
  }

?>