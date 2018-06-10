<?php
  require_once('../../private/initialize.php'); 

  $operation = $_GET['operation'];


  if (is_post_request()) {
    require_student_login();
    $sid = $_SESSION['sid'];
    $content = $_POST['content'];
    if ($operation == 0){
      Edit_Sname($sid, $content); 
    } else if ($operation == 1){
      Edit_Slogname($sid, $content);
    } else if ($operation == 2){
      Edit_University($sid, $content);
    } else if ($operation == 3){
      Edit_Major($sid, $content);
    } else if ($operation == 4){
      Edit_Degree($sid, $content);
    } else if ($operation == 5){
      Edit_GPA($sid, $content);
    } else if ($operation == 6){
      Edit_Sinfo($sid, $content);
    } else if ($operation == 7){
      Edit_Resume($sid, $content);
    } 
    redirect_to(url_for('/student/homepage.php'));
  }

  $page_title = 'Edit';
  include(SHARED_PATH . '/student_header.php'); 

  

?>
<main role="main" class="container">
  <div class="my-3 p-3 bg-white rounded box-shadow">

    <h6 class="border-bottom border-gray pb-2 mb-0">Edit</h6>
    <br><br>

    
    <div class="row">
      <div class="col-md-2"></div>
 
      <div class="col-md-8">

      <form class="needs-validation" novalidate action="<?php echo url_for('/student/info_edit.php?operation='.h(u($operation))); ?>" method="post">
        <div class="row">  
          <div class="col-md-6 mb-3">
            <label for="name">New content</label>
            <input type="text" class="form-control" name="content" placeholder="" value="<?php echo h($content); ?>" required>
            <div class="invalid-feedback">
              Valid info is required.
            </div>
          </div>
        </div>
                
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
      </form>

    
      </div>
    </div>
  </div>
</main>

<?php
  include(SHARED_PATH . '/student_footer.php'); 
?>