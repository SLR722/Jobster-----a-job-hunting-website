<?php

  // Performs all actions necessary to log in an admin
  function student_log_in($student) {
  // Renerating the ID protects the admin from session fixation.
    session_regenerate_id();
    $_SESSION['sid'] = $student['sid'];
    $_SESSION['slogname'] = $student['slogname'];
    return true;
  }

  function company_log_in($company) {
  // Renerating the ID protects the admin from session fixation.
    session_regenerate_id();
    $_SESSION['cid'] = $company['cid'];
    $_SESSION['cname'] = $company['cname'];
    return true;
  }

  function student_log_out() {
    unset($_SESSION['sid']);
    unset($_SESSION['slogname']);
    //session_destroy(); 
    return true;
  }

  function company_log_out() {
    unset($_SESSION['cid']);
    unset($_SESSION['cname']);
    // session_destroy(); 
    return true;
  }

  function is_student_logged_in() {
    return isset($_SESSION['sid']);
  }

  function is_company_logged_in() {
    return isset($_SESSION['cid']);
  }

  function require_student_login() {
    if(!is_student_logged_in()) {
      redirect_to(url_for('/index.php'));
    } else {

    }
  }

  function require_company_login() {
    if(!is_company_logged_in()) {
      redirect_to(url_for('/index.php'));
    } else {

    }
  }

?>
