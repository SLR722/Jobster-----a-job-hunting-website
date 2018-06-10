<?php
  require_once('../../private/initialize.php'); 
  if(is_post_request()) {
    $cname=isset($_POST['cname'])?$_POST['cname']:'NULL';
    $cpwd=isset($_POST['cpwd'])?$_POST['cpwd']:''; 

    if(!Cname_Exist($cname)){
      redirect_to(url_for('/company/login.php'));
    }
    if(!Cpwd_Correct($cname, $cpwd)){
      redirect_to(url_for('/company/login.php'));
    }
    echo $cname, $cpwd;
    $company = Find_Company_By_Cname($cname);
    echo $company['clocation'];
    company_log_in($company);
    echo $_SESSION['cname'];
  }else{
    redirect_to(url_for('/company/login.php'));
  }
?>