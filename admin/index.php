<?php

session_start();
if(!isset($_SESSION['user'])) header("location:../index.php");
else{
	$user=$_SESSION['user'];

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Starter Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- styles -->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap.min.css" rel="stylesheet">
    <style> body {padding-top: 60px; } </style>
    <style> h1{margin-left: 36%}</style>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.2/underscore-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.1/bootstrap.min.js"></script>

  </head>
  <body>

    <div class="container">

      <h1>You are logged-in</h1>

    </div> <!-- /container -->

  </body>
</html>