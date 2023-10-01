<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel-Tour</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="header">
        <a href="home.php" class="logo">travel</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>

        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper  ">
                <div class="swiper-slide slide" style="background: url(./images/travel1.jpg)">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel arround the world</h3>
                        <a href="package.php" class="btn">Discover More</a>

                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/travel2.jpg) ">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Discover the new places</h3>
                        <a href="package.php" class="btn">Discover More</a>

                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(./images/travel5.jpg)">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Make your tour worthwhile</h3>
                        <a href="package.php" class="btn">Discover More</a>

                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="services">
        <h1 class="heading-title"> our services </h1>
        <div class="box-container">
            <div class="box" style="background: #d68d8d">
                <img src="images/1adventure.png" alt="">
                <h3>Adventure</h3>
            </div>

            <div class="box" style="background: #ec8566">
                <img src="images/2tourguide.png" alt="">
                <h3>Tour Guid</h3>
            </div>

            <div class="box" style="background: #73ccf0">
                <img src="images/3journey.png" alt="">
                <h3>Trekking</h3>
            </div>

            <div class="box" style="background: #a850dba6">
                <img src="images/4campfire.png" alt="">
                <h3>Camp Fire</h3>
            </div>

            <div class="box" style="background:#d9db46d7 ">
                <img src="images/5off-road.png" alt="">
                <h3>Off Road</h3>
            </div>

            <div class="box" style="background: #ddc695ec">
                <img src="images/6camping.png" alt="" style="">
                <h3>Camping</h3>
            </div>
        </div>
    </section>

    <section class="home-about">
        <div class="image">
            <img src="./images/travel3.jpg" alt="" style="width: 100%;">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipum dolor sit amet consectetur adipisicing elit. Expeditr et, recusande nobis fugit mod1
                quibusdam ea assumenda, nulla quisquam repellat rem aliquid swqul maxime sapiente autem ipsum? nois,
                provident voluptate? </p>
            <a href="about.php" class="btn">Read More</a>
        </div>
    </section>

    <section class="home-packages">
        <h1 class="heading-title"> our package</h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="./images/2package.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>lorem ipsum dolor dit, amet consectetuye adipisicing elit. Eos, sint!</p>
                    <a href="book.php">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./images/1package.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>lorem ipsum dolor dit, amet consectetuye adipisicing elit. Eos, sint!</p>
                    <a href="book.php">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="./images/3package.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>lorem ipsum dolor dit, amet consectetuye adipisicing elit. Eos, sint!</p>
                    <a href="book.php">book now</a>
                </div>
            </div>
        </div>

        <div class="load-more"><a href="package.php" class="btn">Load More</a></div>
    </section>

    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% off</h3>
            <p>lorem ipsum dolor sit, amet consecteture adipisicing elit. iure tempore assumenda, debitis aliqid
                nesciunt maiores quas! magni cumque quaerat saep!
            </p>
            <a href="book.php" class="btn">Book now</a>
        </div>
    </section>







    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
                <a href="book_from.php"><i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>ask question</a>
                <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +211 382 9913</a>
                <a href="#"><i class="fas fa-phone"></i> +111 328 3283</a>
                <a href="#"><i class="fas fa-envelope"></i> admin123@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> mumbai. india - 400123</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook </a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram </a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>

            </div>
        </div>

        <div class="credit">
            created by <span>mr. Anurag</span> | all rights reserved!
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>