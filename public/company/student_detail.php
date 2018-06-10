<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Student Infomation';
  if(!isset($_GET['sid'])) {
    redirect_to(url_for('/company/followed.php'));
  }
  $sid = $_GET['sid'];
  include(SHARED_PATH . '/company_header.php'); 
  $student_set = Find_Student_By_Sid($sid);
?>


<main role="main" class="container">
<div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Student Information</h6>
    <p></p>
    <?php $student = mysqli_fetch_assoc($student_set); ?>        
        <a>Student Name: </a><?php echo h($student['sname']); ?><br/>
        <a>Student Logname: </a><?php echo h($student['slogname']); ?><br/>
        <a>University: </a><?php echo h($student['university']); ?><br/>
        <a>Major: </a><?php echo h($student['major']); ?><br/>
        <a>Degree: </a><?php echo h($student['degree']); ?><br/>
        <a>GPA: </a><?php echo h($student['GPA']); ?><br/>
        <a>Other Information: </a><?php echo h($student['sinfo']); ?><br/>
        <a>Resume: </a><?php echo h($student['resume']); ?><br/>
    <div class="col-12 col-md-2"> 
    <a class="btn btn-secondary" href="<?php echo url_for('/company/followed.php')?>" role="button">Back</a>
    </div>
</div>


</main><!-- /.container -->

<?php
  include(SHARED_PATH . '/company_footer.php'); 
?>