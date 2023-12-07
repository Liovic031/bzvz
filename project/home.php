<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>početna</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Hotel booking</a>

   <nav class="navbar">
      <a href="home.php">početna</a>
      <a href="about.php">o nama</a>
      <a href="package.php">hoteli</a>
      <a href="book.php">bookiraj</a>
      <a href="login.php">login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-01.jpg) no-repeat">
            <div class="content">
               <span>pronađi idealan boravak</span>
               <h3>otkrij nove hotele</h3>
               <a href="package.php" class="btn">ovdje</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.webp) no-repeat">
            <div class="content">
               <span>pronađi idealan boravak</span>
               <h3>otkrij nove hotele</h3>
               <a href="package.php" class="btn">ovdje</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-0.jpg) no-repeat">
            <div class="content">
               <span>pronađi idealan boravak</span>
               <h3>otkrij nove hotele</h3>
               <a href="package.php" class="btn">ovdje</a>
            </div>
         </div>
         
      </div>

   </div>

</section>

<!-- home section ends -->


<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>o nama</h3>
      <p>Hotel booking stranica pruža jednostavan i praktičan način korisnicima da rezerviraju najbolje hotele diljem Hrvatske. Omogućueno je korisnicima da donesu informirane odluke i pronađu smještaj koji najbolje odgovara njihovim potrebama i željama.</p>
      <a href="about.php" class="btn">pročitaj više</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> hoteli </h1>

   <div class="box-container">

   <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Hotel Osijek</h3>
            <p>Hotel Osijek nalazi se u pješačkoj zoni u centru grada, uz obalu rijeke Drave. Iz hotela se pruža panoramski pogled na okolicu. Sve su sobe prostrane i klimatizirane.</p>
            <p>Adresa: Šamačka 4, 31000, Osijek</p>
            <p>151 €</p>
            <a href="book.php" class="btn">bookiraj sada</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Hotel Waldinger</h3>
            <p>Hotel Waldinger nalazi se na svega 2 minute hoda od glavnog trga u Osijeku. Objekt nudi elegantno uređene sobe s besplatnim pristupom internetu, besplatno parkiralište, 2 restorana i kafić.</p>
            <p>Adresa: Županijska ul. 8, 31000, Osijek</p>
            <p>143 €</p>
            <a href="book.php" class="btn">bookiraj sada</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Sheraton Zagreb Hotel</h3>
            <p>Ovaj elegantni hotel s 5 zvjezdica nalazi se u srcu Zagreba, na 500 metara od Glavnog kolodvora i 1 km od glavnog trga. Objekt nudi klimatizirane sobe s minibarom i TV-om.</p>
            <p>Adresa: Ul. kneza Borne 2, 10000, Zagreb</p>
            <p>115 €</p>
            <a href="book.php" class="btn">bookiraj sada</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">pokaži više</a> </div>

</section>

<!-- home packages section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> početna</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> o nama</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> hoteli</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> bookiraj</a>
      </div>

      <div class="box">
         <h3>kontaktirajte nas</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-envelope"></i> hotelbooking@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> 31200 osijek, hrvatska  </a>
      </div>

      <div class="box">
         <h3>zaprati nas</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      </div>

   </div>


</section>

<!-- footer section ends -->




<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>