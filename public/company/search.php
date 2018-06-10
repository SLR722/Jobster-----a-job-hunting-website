<?php 
  require_once('../../private/initialize.php'); 
  if (is_post_request()){
    $keyword=isset($_POST['keyword'])?$_POST['keyword']:''; 
  }else{
    redirect_to(url_for('/company/jobs.php'));;
  }
  $page_title = 'Search';
  include(SHARED_PATH . '/company_header.php'); 
  require_company_login();
  $student_set = Search_Student_By_Keyword($keyword); //change to find_..._by_keyword($keyword)
?>

<main role="main" class="container">
  <div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Students</h6>

    <?php while($student = mysqli_fetch_assoc($student_set)) { ?>
    <div class="media text-muted pt-3">
      <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex w-100">
          <strong class="text-gray-dark col-12 col-md-8"><?php echo h($student['slogname']); ?></strong>
          <div class="col-12 col-md-2">
          <a href="<?php echo url_for('/company/push_to_student.php?sid=').h(u($student['sid']))?>">Push</a> 
          </div>  
          <?php if(See_Applied_Student_Detail($_SESSION['cid'], $student['sid'])){ ?>
            <div class="col-12 col-md-2">
            <a href="<?php echo url_for('/company/student_detail.php?sid=').h(u($student['sid']))?>">Detail</a> 
          </div>  
          <?php } else if(Is_StudentDetail_Available($_SESSION['cid'],$student['sid'])){ ?>
          <div class="col-12 col-md-2">
          <a href="<?php echo url_for('/company/student_detail.php?sid=').h(u($student['sid']))?>">Detail</a> 
          </div>  
          <?php } ?>    
        </div>
        <span class="d-block col-12 col-md-8"><?php echo h($student['university']).' . '.h($student['major']); ?></span>
      </div>
    </div>
    <?php } ?>
  </div>

</main>
<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>