<?php
$connect = mysqli_connect('localhost','root','','newsever');

// if(isset($_GET['id']))
// {
//   $id = mysql_real_escape_string($GET['id']);
  $query = "SELECT * FROM `images`";
  $data = mysqli_query($connect,$query);
// }

?>

<head>
  <title>Header</title>
</head>
<style type="text/css">
  .bg-dark{
    top: -50px;
    padding-left: 80px;
    font-size: large;
    font-weight: 600;
  }
  /*@media (min-width: 992px)*/
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
</style>
<!-- <?php while($row = mysqli_fetch_array($data)) ?> -->
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- USA news -->
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          USA
        </a>
        <!-- dropdown list for USA news channels -->
        <div class="dropdown-menu filter" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " onclick="document.getElementById('11').src='images/CampoAddImage.jpg',document.getElementById('12').src='images/aaa.png'" href="https://www.youtube.com/embed/gOoTbPssAo4?autoplay=1&rel=0" target="iframe_a">DW News</a>
          <a class="dropdown-item filter" onclick="document.getElementById('11').src='images/HitachiAddImage2.jpg',document.getElementById('12').src='images/b.png'" data- href="https://www.youtube.com/embed/Xu-bZp2OgZM?autoplay=1&rel=0" target="iframe_a">NBC News</a>
          <a class="dropdown-item" onclick="document.getElementById('11').src='images/OneADayImage.jpg', document.getElementById('12').src='images/aa.png'" href="https://www.youtube.com/embed/W1ilCy6XrmI?autoplay=1&rel=0" target="iframe_a">ABC News</a>  
        </li>
        <!-- India news -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> India</a>
          <!-- Dropdown list for India News channels -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" onclick="document.getElementById('11').src='images/libertyImage.jpg',document.getElementById('12').src='images/dd.jpg'" href="https://www.youtube.com/embed/DIk9JXdJKfE?autoplay=1&rel=0" target="iframe_a">Aaj Tak</a>
            <a class="dropdown-item" onclick="document.getElementById('11').src='images/ncino.jpg',document.getElementById('12').src='images/ee.jpg'" href="https://www.youtube.com/embed/l9ViEIip9q4?autoplay=1&rel=0"target="iframe_a">NDTV India</a>
            <a class="dropdown-item" onclick="document.getElementById('11').src='images/OneADayImage.jpg',document.getElementById('12').src='images/ff.jpg'" href="https://www.youtube.com/embed/iRi5y4uBGq0?autoplay=1&rel=0" target="iframe_a">India Today</a> 
            <a class="dropdown-item"  onclick="document.getElementById('11').src='images/ncino.jpg',document.getElementById('12').src='images/e.jpg'" href="https://www.youtube.com/embed/msJyM-2pUN8?autoplay=1&rel=0" target="iframe_a">R Bharat</a> 
          </div>
        </li>

        <!-- Maharashtra News -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Maharashtra
          </a>
          <!-- drpdown list for Maharashtra news channels -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" onclick="document.getElementById('11').src='images/disney.jpg',document.getElementById('12').src='images/e.jpg'" href="https://www.youtube.com/embed/6HNZGyPUEEY?autoplay=1&rel=0" target="iframe_a">ABP Majha</a>
            <a class="dropdown-item" onclick="document.getElementById('11').src='images/amazoneImage.jpg',document.getElementById('12').src='images/aaa.png'" href="https://www.youtube.com/embed/TgkWvSvCzfM?autoplay=1&rel=0" target="iframe_a">TV9 News </a>
            <a class="dropdown-item" onclick="document.getElementById('11').src='images/libertyImage.jpg',document.getElementById('12').src='images/ff.jpg'" href="https://www.youtube.com/embed/M5TIAN8trZc?autoplay=1&rel=0" target="iframe_a">News 18 Lokmat</a>
          </div>
        </li>

        <!-- Sports News -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sports
          </a>
          <!-- Dropdown list foe sports news channel -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" onclick="document.getElementById('11').src='images/wikibuyImage.jpg',document.getElementById('12').src='images/e.jpg'" href="https://www.youtube.com/embed/WRJe4XOV81k?autoplay=1&rel=0" target="iframe_a">News 24 Sports</a>
            <a class="dropdown-item" onclick="document.getElementById('11').src='images/OneADayImage.jpg',document.getElementById('12').src='images/a.png'" href="https://www.youtube.com/embed/UffU4q-WUio?autoplay=1&rel=0" target="iframe_a">Sports Tak</a>
            <a class="dropdown-item" onclick="document.getElementById('11').src='images/card.jpg',document.getElementById('12').src='images/b.png'" href="https://www.youtube.com/embed/6TY-6GSca1A?autoplay=1&rel=0" target="iframe_a"> beIn Sports</a>
          </div>
        </li>

        <!-- Business News -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Business
          </a>
          <!-- Dropdown for Business news channels -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" onclick="document.getElementById('11').src='images/OneADayImage.jpg',document.getElementById('12').src='images/aaa.png'" href="https://www.youtube.com/embed/iNz2lOJwd2g?autoplay=1&rel=0" target="iframe_a">CNBC Awaaz</a>
           <!--  <a class="dropdown-item" onclick="document.getElementById('11').src='images/disney.jpg',document.getElementById('12').src='images/e.jpg'" href="https://www.youtube.com/watch?v=dp8PhLsUcFE?autoplay=1&rel=0" target="iframe_a">Bloomberg Global Financial</a> -->
            <a class="dropdown-item" onclick="document.getElementById('11').src='images/disney.jpg',document.getElementById('12').src='images/e.jpg'" href="https://www.youtube.com/embed/GPKXF3mzAlU?autoplay=1&rel=0" target="iframe_a">NDTV Profit</a>
          </div>
        </li>

        <!-- Local news -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Local News
          </a>
          <!-- Dropdown for Local news Channels -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" onclick="document.getElementById('11').src='images/ncino.jpg',document.getElementById('12').src='images/dd.jpg'" href="https://www.youtube.com/embed/C9itxS6FTDY?autoplay=1&rel=0" target="iframe_a">Pune</a>
            <a class="dropdown-item" onclick="document.getElementById('11').src='images/OneADayImage.jpg',document.getElementById('12').src='images/aaa.png'" href="https://www.youtube.com/embed/C9itxS6FTDY?autoplay=1&rel=0" target="iframe_a">Mumbai</a>
            <a class="dropdown-item" onclick="document.getElementById('11').src='images/wikibuyImage.jpg',document.getElementById('12').src='images/ee.jpg'" href="https://www.youtube.com/embed/Q6QR4979KIQ?autoplay=1&rel=0" target="iframe_a">Bangalore</a>
            <a class="dropdown-item" onclick="document.getElementById('11').src='images/libertyImage.jpg',document.getElementById('12').src='images/ff.jpg'" href="https://www.youtube.com/embed/N5Xn4kQ12-A?autoplay=1&rel=0" target="iframe_a">Kolkata</a>
            <!-- <a class="dropdown-item" onclick="document.getElementById('11').src='images/amazoneImage.jpg',document.getElementById('12').src='images/gg.jpg'" href="https://www.youtube.com/embed/C9itxS6FTDY?autoplay=1&rel=0" target="iframe_a"></a> -->
          </div>
        </li>

        <li class="nav-item">
          <!-- <a class="nav-link" href="contact-us.php">Contact us</a> -->
        </li>

      </ul>
    </div>
  </nav>

<!-- function to change advertisement -->
  <script type="text/javascript">
    function change(option){
      var selectList = document.getElementById("list");
      if(option == 0){
        selectList.selectedIndex++;
      }
      else if(option == 1 && selectList.selectedIndex > 0){
        selectList.selectedIndex--;
      }
    }
  </script>