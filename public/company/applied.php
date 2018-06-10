<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Jobs';
  include(SHARED_PATH . '/company_header.php'); 
  require_company_login();
  $apply_set = Find_Applied_Job_By_Cid($_SESSION['cid']);
?>

<main role="main" class="container">
  <div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Applied</h6>

    <?php while($apply = mysqli_fetch_assoc($apply_set)) { ?>
    <div class="media text-muted pt-3">
      <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex w-100">
          <strong class="text-gray-dark col-12 col-md-8"><?php echo h($apply['slogname']).' apply '.h($apply['jtitle']); ?></strong> 
          <?php if($apply['status']=='pending'){ ?>
          <div class="col-12 col-md-2"> 
            <a href="<?php echo url_for('/company/offer_invitation_result.php?aid=').h(u($apply['aid']))?>">Offer Invitation</a> 
          </div>    
          <?php }else if($apply['status']=='approve'){ ?>
          <div class="col-12 col-md-2"> 
            <a>Approve</a> 
          </div> 
          <?php } else{ ?> 
            <div class="col-12 col-md-2"> 
            <a>Reject</a> 
          </div>
          <?php } ?>
          <?php if($apply['status']=='pending'){ ?>
          <div class="col-12 col-md-2"> 
          <a href="<?php echo url_for('/company/decline_result.php?aid=').h(u($apply['aid']))?>">Decline</a> 
          </div>
          <?php } ?>
        </div>
        <span class="d-block col-12 col-md-8"><?php echo h($apply['time']); ?></span>
      </div>
    </div>
    <?php } ?>
  </div>
</main>

<?php
  include(SHARED_PATH . '/company_footer.php'); 
?>