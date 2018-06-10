<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Homepage';
  require_student_login();
  $sid = $_SESSION['sid'];
  include(SHARED_PATH . '/student_header.php'); 
  $student_set = Find_Student_By_Sid($sid);
?>
<main role="main" class="container">
<div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">My Homepage</h6>
    <p></p>
    <?php $student = mysqli_fetch_assoc($student_set); ?>     
    <div class="media text-muted pt-3">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex w-100">
          <div class="col-12 col-md-8">Student Name: <?php echo h($student['sname']); ?></div><br/><br/>
          <div class="col-12 col-md-4">
            <a href="<?php echo url_for('/student/info_edit.php?operation=0');?>">EDIT</a> 
          </div>
        </div>
        <div class="d-flex w-100">
          <div class="col-12 col-md-8">Student Logname: <?php echo h($student['slogname']); ?></div><br/><br/>
          <div class="col-12 col-md-4">
            <a href="<?php echo url_for('/student/info_edit.php?operation=1');?>">EDIT</a> 
          </div>
        </div>
        <div class="d-flex w-100">
          <div class="col-12 col-md-8">University: <?php echo h($student['university']); ?></div><br/><br/>
          <div class="col-12 col-md-4">
            <a href="<?php echo url_for('/student/info_edit.php?operation=2');?>">EDIT</a> 
          </div>
        </div>
        <div class="d-flex w-100">
          <div class="col-12 col-md-8">Major: <?php echo h($student['major']); ?></div><br/><br/>
          <div class="col-12 col-md-4">
            <a href="<?php echo url_for('/student/info_edit.php?operation=3');?>">EDIT</a> 
          </div>
        </div>
        <div class="d-flex w-100">
          <div class="col-12 col-md-8">Degree: <?php echo h($student['degree']); ?></div><br/><br/>
          <div class="col-12 col-md-4">
            <a href="<?php echo url_for('/student/info_edit.php?operation=4');?>">EDIT</a> 
          </div>
        </div>
        <div class="d-flex w-100">
          <div class="col-12 col-md-8">GPA: <?php echo h($student['GPA']); ?></div><br/><br/>
          <div class="col-12 col-md-4">
            <a href="<?php echo url_for('/student/info_edit.php?operation=5');?>">EDIT</a> 
          </div>
        </div>
        <div class="d-flex w-100">
          <div class="col-12 col-md-8">Information: <?php echo h($student['sinfo']); ?></div><br/><br/>
          <div class="col-12 col-md-4">
            <a href="<?php echo url_for('/student/info_edit.php?operation=6');?>">EDIT</a> 
          </div>
        </div>
        <div class="d-flex w-100">
          <div class="col-12 col-md-8">Resume: <?php echo h($student['resume']); ?></div><br/><br/>
          <div class="col-12 col-md-4">
            <a href="<?php echo url_for('/student/info_edit.php?operation=7');?>">EDIT</a> 
          </div>
        </div>

      </div>
    </div>

</div>
<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>