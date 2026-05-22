<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>We provide fresh, hand-picked flowers with same-day delivery across Addis Ababa. 
               Quality, beauty, and care — all in every bouquet.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>From birthdays to weddings, we offer unique floral arrangements, personalized gifts, and timely delivery to make your moments unforgettable.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>We are a passionate flower shop in Addis Ababa, dedicated to creating beautiful floral arrangements that make every occasion special. 
               Our mission is to deliver freshness, elegance, and happiness in every bouquet.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>I ordered a beautiful bouquet for my friend's birthday, and it exceeded my expectations! 
                The flowers were fresh, vibrant, and delivered on time. Exceptional service and quality. Highly
                recommend this shop for any occasion!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John Deo</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>I recently purchased a stunning floral arrangement for my anniversary, and it was absolutely 
               perfect! The delivery was prompt, and the flowers were fresh and beautifully arranged. I will 
               definitely order again for future events!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Emily Rose</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>I bought flowers for my best friend’s birthday, but they looked so good I almost kept them for 
               myself! They were fresher than my last date! Great service and blooms that make me look like a 
               thoughtful friend-definitely ordering again!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>James Carter</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>The bouquets from this flower shop are absolutely stunning! Every arrangement feels fresh and thoughtfully designed. 
               I surprised my friend with flowers from here, and she couldn’t stop smiling. Highly recommended!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Chloe Robinson</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>These flowers are absolutely amazing! Even my cat stopped knocking over my vases just to admire them. 
               The bouquets made my home feel so cheerful, and Highly recommend if you want your home to smell and look like heaven.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jasper Sinclair</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>I ordered a bouquet just to brighten up my living room, and wow—it worked better than I expected! The flowers were fresh, vibrant, 
               and lasted for days. Even my neighbors stopped by to ask where I got them.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Aurora Montgomery</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>