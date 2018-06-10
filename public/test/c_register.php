<?php
  require_once('../../private/initialize.php'); 
  if(is_post_request()){
    if (!isset($_POST['cname']) and isset($_POST['cpwd'])){
      redirect_to(url_for('/company/register.php'));
    }
    $company = [];
    $company['cname'] = $_POST['cname']??'';
    $company['cpwd'] = $_POST['cpwd']??'';
    $company['clocation'] = $_POST['clocation']??'';
    $company['cindustry'] = $_POST['cindustry']??'';

    company_log_in($company);
    echo $_SESSION['cname'];
    echo Insert_Company($company);
    
  }else{
    redirect_to(url_for('/company/register.php'));
  }

?>