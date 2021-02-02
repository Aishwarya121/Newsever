<?php 
session_start();
include('includes/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Index</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>News Portal | Home Page</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  
</head>
<style type="text/css">
  .space{
    margin-right: 30px;
    margin-left: 30px;
  }
  @media screen and (min-width: 320px) {
   .vid{
    height: 350px; 
    width: 100%;
    overflow: hidden;
    box-shadow: 5px 5px 10px grey;
  }
}
</style>

<body>

  <!-- Navigation -->
  <?php include('includes/header.php');?>

  <!-- Page Content -->
  <div class="space">
    <!-- iframe tag to show youtube channels -->
    <div class="row" style="margin-top: -2%; ">
      <div class="col-md-10"> 
      <iframe width="100%" height="450" name="iframe_a" src="https://www.youtube.com/embed/EXk3nQVXSgo?autoplay=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
        <!-- <iframe src="https://www.youtube.com/embed/hTh8XBhOe1E?autoplay=1&rel=0" name="iframe_a" height="450px" width="100%" frameborder="0" ng-show="showvideo">
        </iframe> -->
      </div>

      <!-- Right Advertisement -->
      <div class="col-md-2">
       <?php include('rightAdd.php');?>
     </div>

     <!-- bottom advertisement -->
     <div class="row" style="margin-top:1%; ">
      <?php include('bottomAdd.php');?>
    </div>
  </div>

  <!-- /.container -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
</body>
</html>
