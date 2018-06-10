<?php 
  require_once('../../private/initialize.php'); 
  $page_title = 'Job Infomation';
  if(!isset($_GET['jid'])) {
    redirect_to(url_for('/company/jobs.php'));
  }
  $jid = $_GET['jid'];
  include(SHARED_PATH . '/company_header.php'); 
  $job_set = Find_Job_By_Jid($jid);
?>


<main role="main" class="container">
<div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Job Information</h6>
    <p></p>
    <?php $job = mysqli_fetch_assoc($job_set); ?>        
        <a>Company: </a><?php echo h($job['cname']); ?><br/>
        <a>Job Title: </a><?php echo h($job['jtitle']); ?><br/>
        <a>Job Location: </a><?php echo h($job['jlocation']); ?><br/>
        <a>Salary: </a><?php echo h($job['salary']); ?><br/>
        <a>Required Degree: </a><?php echo h($job['degree']); ?><br/>
        <a>Required Major: </a><?php echo h($job['major']); ?><br/>
        <a>Job Description: </a><?php echo h($job['description']); ?><br/>
        <a>Post Date: </a><?php echo h($job['postdate']); ?><br/>
        <a>Due Date: </a><?php echo h($job['duedate']); ?><br/>
    <div class="col-12 col-md-2"> 
    <a class="btn btn-secondary" href="<?php echo url_for('/company/jobs.php')?>" role="button">Back</a>
    </div>
</div>


</main><!-- /.container -->

<?php
  include(SHARED_PATH . '/company_footer.php'); 
?>