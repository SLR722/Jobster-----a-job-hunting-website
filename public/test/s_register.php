<?php
  require_once('../../private/initialize.php'); 
  if(is_post_request()){

    $student = [];
    $student['sname'] = $_POST['sname']??'';
    $student['slogname'] = $_POST['slogname']??'';
    $student['spwd'] = $_POST['spwd']??'';
    $student['university'] = $_POST['university']??'';
    $student['major'] = $_POST['major']??'';
    $student['degree'] = $_POST['degree']??'';
    $student['GPA'] = $_POST['GPA']??'';   
    $student['sinfo'] = $_POST['sinfo']??'';
    $student['resume'] = $_POST['resume']??'';
    $student['restrict'] = $_POST['restrict']??'';
    echo $student['slogname'];
    Insert_Student($student);
    $inserted = Find_Student_By_Slogname($student['slogname']);

    student_log_in($inserted);

    echo $_SESSION['sid'];
    Insert_Student($student);
    echo $student['sname'];
    echo $_SESSION['sid'];
  }else{
    redirect_to(url_for('/student_admin/register.php'));
  }

?>