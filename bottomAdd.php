<?php
//store images into table(images)
if(isset($_POST['upload']))
{
  $imagename = $_FILES['img']['name'];
  $tmpimg = $_FILES['img']['tmp_name'];
  $conn = mysqli_connect('localhost','root','','newsever');
  move_uploaded_file($tmpimg, "images/$imagename");
  $sql = "INSERT INTO `images`(`image`) VALUES ('$imagename')";
  $result = mysqli_query($conn, $sql);
}
?>

<style type="text/css">
  #slider{
    overflow: hidden;
  }
  #slider figure{
    position: relative;
    margin: 0;
    animation: 20s slider infinite;
    width: 700%;
    left: 0;
    box-shadow: 5px 5px 10px grey;
  }
  #slider figure img{
    float: left;
    box-shadow: 5px 5px 10px grey;
  }
  .bottom{
    /*margin-left: 2.5%;
    margin-right: 3%;*/
    width: 1300px;
    height: 90px;
  }
  
</style>
<body>
  <!-- Form to upload images to database -->

 <!-- <form method="post" enctype="multipart/form-data"><br>
  <input type="file" name="img"></br></br>
  <input type="submit" name="upload" value="upload">
</form> -->
<!-- advertisement on bottom side -->
<div class="col-md-12 ">
 <div id="slider">
   <figure>
     <img class="bottom" id="11" src="images/OlaAddImage1.png" >
   </figure>
 </div>   
</div>
</body>