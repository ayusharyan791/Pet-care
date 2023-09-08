<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Care</title>
    <link rel="icon" href="image/logo.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];

        $con = mysqli_connect("localhost", "root", "", "petcare");
        $stmt = $con->prepare("SELECT * FROM signup WHERE Email = ? AND Password = ?");
        $stmt->bind_param('ss', $Email, $Password);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            echo ("Login Succesful");
            header("Location: index.php");

            exit();
        } else {
            echo ("Inavlid Credentials");
            header("Location: Signup.php");
        }

        // Close the connection
        $stmt->close();
        $con->close();
    }
    ?>
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class=""></i> Pet Care </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#shop">shop</a>
        <a href="#services">services</a>
        <a href="#plan">plan</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" method="POST" class="login-form">
        <h3>sign in</h3>
        <input type="Email" name="Email" placeholder="enter your email" id="Email" class="box">
        <input type="Password" name="Password" placeholder="enter your password" id="Password" class="box">
        <div class="remember">
            <input type="checkbox" name="checkbox" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" name="submit" value="sign in" class="btn">
        <div class="links">
            <a href="#">forget password</a>
            <a href="SignUp.php">sign up</a>
        </div>
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3> <span>hi!</span> Welcome to our Pet Care Service</h3>
        <a href="petReg.php" class="btn">Book Appointment</a>
    </div>

    <!-- <img src="image/bottom_wave.png" class="wave" alt=""> -->

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="image/117-1179055_group-of-pets.png" alt="">
    </div>

    <div class="content">
        <h3><span>Premium Membership</span></h3>
        <p>1.Exclusive access to a dedicated 24/7 helpline or concierge service for personalized pet care advice and assistance.<br>
2. Customized pet care plans tailored to the specific needs and preferences of each member's pet, including personalized diet and exercise recommendations.
<br>
3. Priority scheduling for appointments with veterinarians, groomers, and other pet care providers to ensure prompt and convenient service.</p>
        <a href="#" class="btn">Explore More</a>
    </div>

</section>

<!-- about section ends -->

<!-- dog and cat food banner section starts -->

<div class="dog-food">

    <div class="image">
        <img src="image/together.jpg" alt="">
    </div>

    <div class="content">
        <h3> <span>Regular Membership</span></h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat iure illo, repudiandae rem porro sunt.</p>
        <!-- <div class="amount">Rs.500/Month</div> -->
        <!-- <a href="#"> <img src="image/shop_now_dog.png" alt=""> </a> -->
        <a href="#" class="btn">Explore More</a>
    </div>

</div>

<!-- dog and cat food banner section ends -->

<!-- shop section starts  -->

<section class="shop" id="shop">

    <h1 class="heading"> our <span> Facilities </span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/dogbathing.jpg" alt="">
            </div>
            <div class="content">
                <h3>Pet Spa and grooming</h3>
                <!-- <div class="amount">Rs.500</div> -->
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/product_02.jpg" alt="">
            </div>
            <div class="content">
                <h3>Pet Food</h3>
                <!-- <div class="amount">Rs.1000</div> -->
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/pasted image 0.png" alt="">
            </div>
            <div class="content">
                <h3>Pet Day Out</h3>
                <!-- <div class="amount"> Rs.1500 </div> -->
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/vector-of-veterinary-doctor-taking-care-of-domestic-animals-2BJWTM2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Pet Routine Checkup</h3>
                <!-- <div class="amount"> Rs.1500 - Rs.2000 </div> -->
            </div>
        </div>

    </div>

</section>

<!-- shop section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-cat"></i>
            <h3>Pet boarding</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-bath"></i>
            <h3>spa & grooming</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-drumstick-bite"></i>
            <h3>healthy meal</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-baseball-ball"></i>
            <h3>acitivities</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>Routine Checkup</h3>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- services section ends -->

<!-- plan section starts  -->

<section class="plan" id="plan">

    <h1 class="heading"> choose a <span>plan</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 1 day </h3>
            <i class="fas fa-bicycle icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet spa & grooming <span class="fas fa-check"></span> </p>
                <p> pet acitivities and routine health checkup <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>Rs.</span>500</div>
            <a href="#" class="btn"> choose plan </a>
        </div>

        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 10 days </h3>
            <i class="fas fa-motorcycle icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet spa & grooming <span class="fas fa-check"></span> </p>
                <p> pet acitivities and routine health checkup <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>Rs.</span>1500</div>
            <a href="#" class="btn"> choose plan </a>
        </div>

        <div class="box">
            <h3 class="title">pet care</h3>
            <h3 class="day"> 30 days </h3>
            <i class="fas fa-car-side icon"></i>
            <div class="list">
                <p> pet room <span class="fas fa-check"></span> </p>
                <p> pet spa & grooming <span class="fas fa-check"></span> </p>
                <p> pet acitivities and routine health checkup <span class="fas fa-check"></span> </p>
                <p> pet meals <span class="fas fa-check"></span> </p>
            </div>
            <div class="amount"><span>Rs.</span>2500</div>
            <a href="#" class="btn"> choose plan </a>
        </div>

    </div>

</section>

<!-- plan section ends -->

<section class="contact" id="contact">

    <div class="image">
        <img src="image/Pet-Sitting-Services.png" alt="">
    </div>

    <form action="">
        <h3>contact us</h3>
        <input type="text" placeholder="your name" class="box">
        <input type="email" placeholder="your email" class="box">
        <input type="tumber" placeholder="your number" class="box">
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>

<section class="footer">

    <!-- <img src="image/top_wave.png" alt=""> -->

    <div class="share">
        <!-- <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> facebook </a> -->
        <!-- <a href="#" class="btn"> <i class="fab fa-twitter"></i> twitter </a> -->
        <!-- <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a> -->
        <!-- <a href="#" class="btn"> <i class="fab fa-linkedin"></i> linkedin </a> -->
        <!-- <a href="#" class="btn"> <i class="fab fa-pinterest"></i> pinterest </a> -->
    </div>

    <div class="credit"> created by <span>AYUSH ARYAN</span> | All Rights Reserved! </div>

</section>








<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>