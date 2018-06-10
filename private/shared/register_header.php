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
    <link href='../../dist/css/bootstrap.min.css' rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="<?php echo url_for('/stylesheets/register.css'); ?>" rel="stylesheet" type="text/css">
  </head>

  <body class="bg-light">

<div class="container">