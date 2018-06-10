<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Message';
  include(SHARED_PATH . '/student_header.php'); 
  require_student_login();
  $message_set = Find_Unread_Message_By_Sid($_SESSION['sid']);
?>

<main role="main" class="container">
  <div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Meassage</h6>

    <?php while($message = mysqli_fetch_assoc($message_set)) { ?>
    <div class="media text-muted pt-3">
      <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
      <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
        <div class="d-flex w-100">
          <strong class="text-gray-dark col-12 col-md-8"><?php echo h($message['fromsname']).' to you'; ?></strong>
          <?php if($message['status']=='unread'){ ?>
          <div class="col-12 col-md-2"> 
            <a href="<?php echo url_for('/student/read_the_unread_message.php?mid=').h(u($message['mid']))?>">Read the message</a>  
          </div>    
          <?php } else{ ?>
            <div class="col-12 col-md-2"> 
            <a>Have Read</a> 
            </div>
          <?php } ?>
          <div class="col-12 col-md-2"> 
            <a href="<?php echo url_for('/student/reply_message.php?mid=').h(u($message['mid']))?>">Reply</a>  
          </div>       
        </div>
        <span class="d-block col-12 col-md-8"><?php echo h($message['time']); ?></span>
        <span class="d-block col-12 col-md-8"><?php echo h($message['mcontent']); ?></span>
      </div>
    </div>
    <?php } ?>

  </div>
</main>

<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>