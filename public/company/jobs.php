<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Jobs';
  include(SHARED_PATH . '/company_header.php'); 
  require_company_login();
  $job_set = Find_All_Open_Position();
?>

<main role="main" class="container">
  <div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Open Positions</h6>

    <?php while($job = mysqli_fetch_assoc($job_set)) { ?>
    <div class="media text-muted pt-3">
      <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex w-100">
          <strong class="text-gray-dark col-12 col-md-10"><?php echo h($job['cname']).' - '.h($job['jtitle']); ?></strong> 
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