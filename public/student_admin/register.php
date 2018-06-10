
<?php 
  require_once('../../private/initialize.php'); 
  if(is_post_request()){
    if (Slogname_Exist($slogname)){
      redirect_to(url_for('/student_admin/register.php'));
    }
    $student = [];
    $student['sname'] = $_POST['slogname']??'';
    $student['slogname'] = $_POST['slogname']??'';
    $student['spwd'] = $_POST['spwd']??'';
    $student['university'] = $_POST['university']??'';
    $student['major'] = $_POST['major']??'';
    $student['degree'] = $_POST['degree']??'';
    $student['GPA'] = $_POST['GPA']??'';   
    $student['sinfo'] = $_POST['sinfo']??'';
    $student['resume'] = $_POST['resume']??'';
    $student['res'] = $_POST['res']??'';
    if ($student['res'] != 'No' and $student['res'] != 'Yes') {
      $_SESSION['message'] = 'Restrict Input Error!';
      redirect_to(url_for('/student_admin/register.php'));
    } else {
      $_SESSION['message'] = ''; 
      Insert_Student($student);
      $inserted = Find_Student_By_Slogname($student['slogname']);
      student_log_in($inserted);
      redirect_to(url_for('/student/jobs.php'));
    }
  }
  $page_title = 'Student Register';
  include(SHARED_PATH . '/register_header.php'); 
  $res = "";
?>

<div class="py-5 text-center">
  <img class="d-block mx-auto mb-4" src="../../monkey.ico" alt="" width="144" height="144">
  <h2>Student Register</h2>
  <p class="lead">Your personal information will be protected</p>
</div>

<div class="row">
  <div class="col-md-2"></div>
 
  <div class="col-md-8">
  
    <h4 class="mb-3">Your Information</h4>

    <form class="needs-validation" novalidate action="<?php echo url_for('/student_admin/register.php'); ?>" method="post">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="sname" placeholder="" value="<?php echo h($sname); ?>" required>
          <div class="invalid-feedback">
            Valid name is required.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="logName">Logname</label>
          <input type="text" class="form-control" name="slogname" placeholder="" value="<?php echo h($slogname); ?>" required>
          <div class="invalid-feedback">
            Valid log name is required.
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="username">Password</label>
        <div class="input-group">
          <input type="password" class="form-control" name="spwd" placeholder="Password" value="<?php echo h($spwd); ?>" required>
          <div class="invalid-feedback">
            Password is required.
          </div>
        </div>
      </div>

      <hr class="mb-4">
            
      <div class="mb-3">
        <label for="username">University<span class="text-muted">(Optional)</span></label>
        <input type="text" class="form-control" name="university" value="<?php echo h($university); ?>" placeholder="University">
      </div>


      <div class="row">
        <div class="col-md-5 mb-3">
          <label for="country">Major</label>
          <input type="text" class="form-control" name="major" value="<?php echo h($major); ?>" placeholder="Major">
        </div>
        <div class="col-md-4 mb-3">
          <label for="state">Degree</label>
          <select class="custom-select d-block w-100" name="degree">
            <option value="">Choose...</option>
            <option value="BS">BS</option>
            <option value="MS">MS</option>
            <option value="PHD">PHD</option>
          </select>
        </div>
        <div class="col-md-3 mb-3">
          <label for="zip">GPA</label>
          <input type="text" class="form-control" name="GPA" value="<?php echo h($GPA); ?>" placeholder="GPA">
        </div>
      </div>

      <div class="mb-3">
        <label for="sinfo">Other Information<span class="text-muted">(Interest, Hobby...)</span></label>
        <textarea type="text" class="form-control" name="sinfo" placeholder="Other Infomation" value="<?php echo h($resume); ?>" rows="1"> </textarea>
      </div>

      <div class="mb-3">
        <label for="username">Resume<span class="text-muted">(Optional)</span></label>
        <textarea type="text" class="form-control" name="resume" placeholder="Resume" value="<?php echo h($resume); ?>" rows="5"> </textarea>
      </div>

      <div class="mb-3">      
        <label >Security Question: My Information can only be viewed by my friends and followed companys <span class="text-muted">('Yes' or 'No')</span></label>
      </div>
      
      <div class="mb-3">      
        <input type="text" class="form-control" name="res" value="<?php echo h($res); ?>" >
      </div>
      
      <hr class="mb-4">
      
      <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
    </form>

<?php include(SHARED_PATH . '/register_footer.php'); ?>