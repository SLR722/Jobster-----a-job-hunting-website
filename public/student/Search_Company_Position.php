<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Position';
  if(!isset($_GET['cid'])) {
    redirect_to(url_for('/student/search.php'));
  }
  $cid = $_GET['cid'];
  include(SHARED_PATH . '/student_header.php'); 
  $job_set = Search_Company_Position($cid);
?>

<main role="main" class="container">
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