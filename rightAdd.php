
<style type="text/css">
 @media screen and (min-width: 320px) {
   .right{
    height: 350px; 
    width: 100%;
    overflow: hidden;
    box-shadow: 5px 5px 10px grey;
  }
}
#slideshow {
 overflow: hidden;
}
#slideshow figure{
  position: relative;
  animation: 20s slideshow infinite;
  box-shadow: 5px 5px 10px grey;
}
#slideshow figure img{
  float: left;
}
.right{
  height: 450px; 
  width: 90%;
  overflow: hidden;
  box-shadow: 5px 5px 10px grey;
}
/*@keyframes slideshow{ 0% {bottom: 0 ;} 20% { bottom: 0; } 27% { bottom: 480px; } 47% { bottom: 480px; } 54% { bottom: 960px; } 74% { bottom: 960px; } 80% { bottom: 1440px; } 100% { bottom: 1440px; } };
*/
</style>

<body>
  <!-- advertisement on right side -->
  <!-- <div class="row" style="margin-top: -2%; "> -->
    <div id="slideshow">
      <figure>
        <img class="right" id="12" src="images/b.png">
      </figure>
    </div>
  </div>
</body>
<!-- </div> -->
