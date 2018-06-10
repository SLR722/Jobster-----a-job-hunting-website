<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Push';
  if(!isset($_GET['sid'])) {
    redirect_to(url_for('/company/jobs.php'));
  }
  $sid = $_GET['sid'];
  include(SHARED_PATH . '/company_header.php'); 
  require_company_login();
  $job_set = Find_Open_Position_By_Cid($_SESSION['cid']);
?>

<main role="main" class="container">
  <div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">My Positions</h6>

    <?php while($job = mysqli_fetch_assoc($job_set)) { ?>
    <div class="media text-muted pt-3">
      <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex w-100">
          <strong class="text-gray-dark col-12 col-md-8"><?php echo h($job['cname']).' - '.h($job['jtitle']); ?></strong> 
          <?php if(Push_Status($job['jid'], $sid)=="unpush"){ 
              $result=Push($job['jid'], $sid); ?>
          <div class="col-12 col-md-2"> 
          <a href="<?php echo url_for('/company/push_result.php?boolean=').h(u($boolean))?>">Push</a>  
          </div>
          <?php }else{ ?>
        <div class="col-12 col-md-2"> 
          <a>Have Pushed</a>  
          </div>
          <?php } ?>
          <div class="col-12 col-md-2"> 
          <a href="<?php echo url_for('/company/job_detail.php?jid=').h(u($job['jid']))?>">Detail</a>  
          </div>       
        </div>
        <span class="d-block col-12 col-md-8"><?php echo h($job['jlocation']).' . '.h($job['degree']).' . '.h($job['major']); ?></span>
      </div>
    </div>
    <?php } ?>
  </div>
</main>

<?php
  include(SHARED_PATH . '/company_footer.php'); 
?>