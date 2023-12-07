<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>o nama</title>

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

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>o nama</h1>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>zašto baš mi?</h3>
      <p>Hotel booking stranica pruža jednostavan i praktičan način korisnicima da rezerviraju najbolje hotele diljem Hrvatske. Omogućueno je korisnicima da donesu informirane odluke i pronađu smještaj koji najbolje odgovara njihovim potrebama i željama.</p>
      <p>Stranica često pruža fleksibilnost u vezi s plaćanjem i otkazivanjem rezervacija, prilagođavajući se potrebama različitih korisnika. To znači da putnici mogu rezervirati svoj omiljeni hotel s povjerenjem, znajući da imaju određenu slobodu prilagodbe svojih planova ako se neočekivane situacije pojave.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>hoteli u najvećim gradovima</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>prihvatljive cijene</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>pristupačnost</span>
         </div>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading-title"> Recenzije </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            
            <p>Odsjeo sam u Sheraton Hotelu. Sve je bilo u najboljem mogućem izdanju. Usluga je bila vrhunska.</p>
            <p>Ocjena: 5</p>
            <h3>Ivan Ivić</h3>
            <img src="images/noimage.gif" alt="">
         </div>

         <div class="swiper-slide slide">
            
            <p>Vrhunska usluga!</p>
            <p>Ocjena: 4</p>
            <h3>Marko Marić</h3>
            <img src="images/noimage.gif" alt="">
         </div>

         <div class="swiper-slide slide">
            <p>Po preporuci sam iznajmio Hotel Osijek. Sve je bilo kako je i opisano. Svaka čast!</p>
            <p>Ocjena: 5</p>
            <h3>Petar Perić</h3>
            <img src="images/noimage.gif" alt="">
         </div>

         
   </div>

</section>

<!-- reviews section ends -->















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