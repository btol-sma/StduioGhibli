<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
      <meta charset="UTF-8" />
        <title>Ghibli Studio </title>
        <link rel="stylesheet" href="css/CSSmainpage.css">
    </head>
  <body>

      <div class="ibox">

        <div class="mySlides fade">
          <img src="Photos/HomeBackground/3.jpg" alt=“a” style="width:100%">
        </div>
        <div class="mySlides fade">
          <img src="https://github.com/btol-sma/StduioGhibli/blob/master/Photos/HomeBackground/1.jpg?raw=true" alt=“b” style="width:100%">
        </div>
          <div class="mySlides fade">
            <img src="https://comicyears.com/wp-content/uploads/2019/10/studio-ghibli-movies-featured.png" alt=“c” style="width:100%">
            
          </div>
          
        
          <div class="mySlides fade">
            <img src="https://github.com/btol-sma/StduioGhibli/blob/master/Photos/HomeBackground/5.jpg?raw=true" alt=“d” style="width:100%">
          </div>
          
          <div class="mySlides fade">
            <img src="https://wallpaperaccess.com/full/132185.jpg" alt=“e” style="width:100%">
          </div>
          
          <div class="mySlides fade">
            <img src="https://github.com/btol-sma/StduioGhibli/blob/master/Photos/HomeBackground/4.jpg?raw=true" alt=“f” style="width:100%">
          </div>
      <div class="mySlides fade">
        <img src="https://github.com/btol-sma/StduioGhibli/blob/master/Photos/HomeBackground/6.jpg?raw=true" alt=“g” style="width:100%">
      </div>

          
              <div class="p1"> عروض خُلدت في طفولتنا , فهل تعرف من وراءها ؟</div>
              <div class= "p2">
             <a href="about.php" style="text-align: center;"> !اعرف اكثر </a> 
              </div>
             
        </div>
        
        <div class="mbar">
            <a href="movies.php">  الأفلام  </a>
            <a href="about.php">  نبذة</a>
            <a href="home.php">  <img src="Photos/logo.png" alt="logo" ></a>
            <a href="museum.php">  المتحف  </a>
            <a href="oscar.php">  الأوسكار  </a>

          </div>

          <?php include 'footer.php' ?> 
          
          <script>
            var slideIndex = 0;
            showSlides();
            
            function showSlides() {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = 7;
              for (i = 0; i< slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              slides[slideIndex-1].style.display = "block";  
  
              setTimeout(showSlides, 5000); // Change image every 2 seconds
            }
          
            </script>
        
    </body>
</html>
