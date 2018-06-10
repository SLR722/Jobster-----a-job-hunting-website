<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Friends';
  include(SHARED_PATH . '/student_header.php'); 
  require_student_login();
  $friend_set = Find_Friends_By_Sid($_SESSION['sid']);
?>

<main role="main" class="container">
  <div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Friends</h6>

    <?php while($friend = mysqli_fetch_assoc($friend_set)) { ?>
    <div class="media text-muted pt-3">
      <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex w-100">
          <strong class="text-gray-dark col-12 col-md-8"><?php echo h($friend['slogname']); ?></strong>
          <div class="col-12 col-md-2"> 
          <a href="<?php echo url_for('/student/Delete_Friend.php?sid=').h(u($friend['sid']))?>">Delete</a>  
          </div>    
          <div class="col-12 col-md-2"> 
            <a href="<?php echo url_for('/student/student.php?sid=').h(u($friend['sid']))?>">Detail</a> 
          </div>       
        </div>
        <span class="d-block col-12 col-md-8"><?php echo h($friend['university']).' . '.h($friend['degree']).' . '.h($friend['major']); ?></span>
      </div>
    </div>
    <?php } ?>
  </div>
</main>


<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>