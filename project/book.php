<?php

$db_name = 'mysql:host=localhost;dbname=book_db';
$db_user_name = 'root';
$db_user_pass = '';

$conn = new PDO($db_name, $db_user_name, $db_user_pass);

function create_unique_id(){
   $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $characters_lenght = strlen($characters);
   $random_string = '';
   for($i = 0; $i < 20; $i++){
      $random_string .= $characters[mt_rand(0, $characters_lenght - 1)];
   }
   return $random_string;
}

if(isset($_POST['send'])){

   $id = create_unique_id();
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

   $insert_book = $conn->prepare("INSERT INTO `book_form`(id, name, email, phone, address, location, guests, arrivals, leaving) VALUES(?,?,?,?,?,?,?,?,?)");
   $insert_book->execute([$id, $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving]);

   $success_msg[] = 'booked successfully!'; 

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>bookiraj</title>

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

<div class="heading" style="background:url(images/header-bg-03.jpg) no-repeat">
   <h1>bookiraj</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">bookirajte</h1>

   <form action="" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>ime :</span>
            <input type="text" placeholder="unesite vaše ime i prezime" maxlength="30" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" maxlength="50" placeholder="unesite vašu e-mail adresu" name="email">
         </div>
         <div class="inputBox">
            <span>broj mobitela :</span>
            <input type="number" maxlength="10" min="0" max="9999999999" placeholder="unesite broj telefona" name="phone">
         </div>
         <div class="inputBox">
            <span>adresa :</span>
            <input type="text" maxlength="50" placeholder="unesite vašu adresu" name="address">
         </div>
         <div class="inputBox">
            <span>Ime hotela :</span>
            <input type="text" placeholder="unesite ime željenog hotela" name="location" maxlength="50">
         </div>
         <div class="inputBox">
            <span>Broj gostiju :</span>
            <input type="number" min="1" max="99" maxlength="2" placeholder="unesite broj gostiju" name="guests">
         </div>
         <div class="inputBox">
            <span>dolazak :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>odlazak :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="book" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

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
         <a href="#"> <i class="fas fa-map"></i> 31200 osijek, hrvatska </a>
      </div>

      <div class="box">
         <h3>zaprati nas</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      </div>

   </div>


</section>


<!-- footer section ends -->






<!-- sweetalert cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php
if(isset($success_msg)){
   foreach($success_msg as $success_msg){
      echo '<script>swal("'.$success_msg.'", "", "success");</script>';
   }
}
?>

</body>
</html>