<?php 
  require_once('../../private/initialize.php'); 
  if (is_post_request()){
    $keyword=isset($_POST['keyword'])?$_POST['keyword']:''; 
  }else{
    redirect_to(url_for('/student/jobs.php'));;
  }
  $page_title = 'Search';
  include(SHARED_PATH . '/student_header.php'); 
  require_student_login();
  $company_set = Search_Company_By_Keyword($keyword); //change to find_..._by_keyword($keyword)
  $student_set = Search_Student_By_Keyword($keyword); //change to find_..._by_keyword($keyword)
  $job_set = Search_Job_By_Keyword($keyword);
?>

<main role="main" class="container">
  <div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Companys</h6>

    <?php while($company = mysqli_fetch_assoc($company_set)) { ?>
    <div class="media text-muted pt-3">
      <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex w-100">
          <strong class="text-gray-dark col-12 col-md-8"><?php echo h($company['cname']); ?></strong>
          <?php if(Is_Follow($_SESSION['sid'], $company['cid'])){?>
          <div class="col-12 col-md-2"> 
            <a href="<?php echo url_for('/student/Unfollow_Company.php?cid=').h(u($company['cid']))?>">UnFollow</a> 
          </div>    
          <?php }else{?>
          <div class="col-12 col-md-2"> 
          <a href="<?php echo url_for('/student/follow_Company.php?cid=').h(u($company['cid']))?>">Follow</a> 
          </div>  
          <?php } ?>
          <div class="col-12 col-md-2"> 
            <a href="<?php echo url_for('/student/Search_Company_Position.php?cid=').h(u($company['cid']))?>">Position</a> 
          </div>       
        </div>
        <span class="d-block col-12 col-md-8"><?php echo h($company['cindustry']).' . '.h($company['clocation']); ?></span>
      </div>
    </div>
    <?php } ?>
  </div>

  <div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Students</h6>

    <?php while($student = mysqli_fetch_assoc($student_set)) { ?>
    <div class="media text-muted pt-3">
      <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex w-100">
          <strong class="text-gray-dark col-12 col-md-8"><?php echo h($student['slogname']); ?></strong>
          <?php if($_SESSION['sid']==$student['sid']){ ?>
            <div class="col-12 col-md-2"> 
            <a>Yourself</a> 
          </div>
          <?php }else if(Is_Friend($_SESSION['sid'], $student['sid'])){?>
          <div class="col-12 col-md-2"> 
            <a href="<?php echo url_for('/student/Delete_Friend.php?sid=').h(u($student['sid']))?>">Delete</a> 
          </div>
          <?php }else if(If_FriendRequest_Pending($_SESSION['sid'], $student['sid'])){ ?>
            <div class="col-12 col-md-2"> 
            <a> Pending</a> 
            </div>
          <?php }else if(If_FriendRequest_Reject($_SESSION['sid'], $student['sid'])){ ?>
            <div class="col-12 col-md-2"> 
            <a> Reject</a> 
            </div>
          <?php } else{ ?>   
            <div class="col-12 col-md-2"> 
            <a href="<?php echo url_for('/student/Add_Friend.php?sid=').h(u($student['sid']))?>">Add</a> 
          </div>
          <?php }?> 
          <?php if(Is_FriendDetail_Available($_SESSION['sid'],$student['sid'])){ ?>
          <div class="col-12 col-md-2">
          <a href="<?php echo url_for('/student/student.php?sid=').h(u($student['sid']))?>">Detail</a> 
          </div>  
          <?php } ?>    
        </div>
        <span class="d-block col-12 col-md-8"><?php echo h($student['university']).' . '.h($student['major']); ?></span>
      </div>
    </div>
    <?php } ?>
  </div>

  <div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Open Positions</h6>

    <?php while($job = mysqli_fetch_assoc($job_set)) { ?>
    <div class="media text-muted pt-3">
      <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex w-100">
          <strong class="text-gray-dark col-12 col-md-8"><?php echo h($job['cname']).' - '.h($job['jtitle']); ?></strong>
          <?php if(Apply_Status($_SESSION['sid'], $job['jid'])=='empty'){ ?>
          <div class="col-12 col-md-2"> 
          <a href="<?php echo url_for('/student/Apply_Job.php?jid=').h(u($job['jid']))?>">Apply</a> 
          </div>    
          <?php } else if(Apply_Status($_SESSION['sid'], $job['jid'])=='pending'){ ?>
          <div class="col-12 col-md-2"> 
            <a>Pending</a> 
          </div>   
          <?php } else if(Apply_Status($_SESSION['sid'], $job['jid'])=='approve'){ ?>
            <div class="col-12 col-md-2"> 
            <a>Approve</a> 
           </div> 
          <?php } else{ ?>
            <div class="col-12 col-md-2"> 
            <a>Reject</a> 
           </div> 
          <?php } ?>
          <div class="col-12 col-md-2"> 
          <a href="<?php echo url_for('/student/job_detail.php?jid=').h(u($job['jid']))?>">Detail</a> 
          </div>       
        </div>
        <span class="d-block col-12 col-md-8"><?php echo h($job['jlocation']).' . '.h($job['degree']).' . '.h($job['major']); ?></span>
      </div>
    </div>
    <?php } ?>
  </div>

</main>
<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>