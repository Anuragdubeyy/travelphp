<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel-Tour</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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


    <div class="heading" style="background:url(./images/back4.jpeg) ">
        <h1>Book Now</h1>

    </div>

    <section class="booking">
        <div class="heading-title">Book your Trip</div>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" placeholder="Enter Your Name" name="Name">
                </div>
                <div class="inputBox">
                    <span>Email ID :</span>
                    <input type="email" placeholder="Enter Your Email" name="Email">
                </div>
                <div class="inputBox">
                    <span>Phone No. :</span>
                    <input type="number" placeholder="Enter Your Number" name="Phone">
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="Enter Your Address" name="Address">
                </div>
                <div class="inputBox">
                    <span>Where to :</span>
                    <input type="text" placeholder="Place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>Guests :</span>
                    <input type="number" placeholder="Number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>Arrivals :</span>
                    <input type="date"  name="Arrivals">
                </div>
                <div class="inputBox">
                    <span>Leaving :</span>
                    <input type="Date"  name="Leaving">
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>
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






    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>