<?php
  if(!isset($page_title)) { $page_title = 'Title Area'; }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../monkey.ico">

    <title>Jobster - <?php echo h($page_title); ?></title>

    <!-- Bootstrap core CSS -->
    <link href=<?php echo '../../dist/css/bootstrap.min.css'; ?> rel="stylesheet" >

    <!-- Custom styles for this template -->  
    <link href="<?php echo url_for('/stylesheets/welcome.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo url_for('/stylesheets/register.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo url_for('/stylesheets/post.css'); ?>" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#"> <?php echo 'Hi! '.$_SESSION['slogname'];?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" >
        <ul class="navbar-nav mr-auto">

          <li class="nav-item active">
            <a class="nav-link" href="<?php echo url_for('/student/jobs.php')?>">Jobs <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="<?php echo url_for('/student/following.php')?>">Following <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="<?php echo url_for('/student/friends.php')?>">Friends <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="<?php echo url_for('/student/unread_message.php')?>">Message <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="<?php echo url_for('/student_admin/logout.php')?>">Logout <span class="sr-only">(current)</span></a>
          </li>
        </ul>

        <form class="form-inline my-2 my-lg-0" action="<?php echo url_for('/student/search.php'); ?>" method="post">
          <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search" aria-label="Search" value="<?php echo h($keyword); ?>"required>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Search </button>
        </form>
      </div>
    </nav>

    <div class="nav-scroller bg-white box-shadow">
      <nav class="nav nav-underline">
        <a class="nav-link active" href="<?php echo url_for('/student/homepage.php')?>">My Homepage</a>
        <a class="nav-link" href="<?php echo url_for('/student/friend_request.php')?>"> Friend Request </a>
        <a class="nav-link" href="<?php echo url_for('/student/send_message.php')?>"> Send Message </a>
        <a class="nav-link" href="<?php echo url_for('/student/applied_position.php')?>"> Applied Position </a>
        <a class="nav-link" href="<?php echo url_for('/student/friend_share.php')?>"> Friend's Share </a>
        <a class="nav-link" href="<?php echo url_for('/student/company_push.php')?>"> Company's Push </a>
      </nav>
    </div>