<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Jobs';
  include(SHARED_PATH . '/student_header.php'); 
  require_student_login();
  $request_set = Find_Unread_Friend_Request_By_Sid($_SESSION['sid']);
?>

<main role="main" class="container">
  <div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Friend Request</h6>

    <?php while($request = mysqli_fetch_assoc($request_set)) { ?>
    <div class="media text-muted pt-3">
      <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex w-100">
          <strong class="text-gray-dark col-12 col-md-8"><?php echo h($request['slogname']).' '. h(' invites you to be friend'); ?></strong>
          <div class="col-12 col-md-2"> 
          <a href="<?php echo url_for('/student/accept_result.php?sid=').h(u($request['sid']))?>">Accept</a> 
          </div>    
          <div class="col-12 col-md-2"> 
          <a href="<?php echo url_for('/student/decline_result.php?sid=').h(u($request['sid']))?>">Decline</a> 
          </div>       
        </div>
        <span class="d-block col-12 col-md-8"><?php echo h($request['time']); ?></span>
      </div>
    </div>
    <?php } ?>
  </div>
</main>

<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>