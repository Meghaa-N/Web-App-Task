<?php
session_start();
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'task');
$sql="select * from menu where category='special'; ";
$temp1=mysqli_query($conn,$sql);

$sql="select * from menu where category='starter'; ";
$temp2=mysqli_query($conn,$sql);

$sql="select * from menu where category='rice'; ";
$temp3=mysqli_query($conn,$sql);

$sql="select * from menu where category='bread'; ";
$temp4=mysqli_query($conn,$sql);

$sql="select * from menu where category='gravy'; ";
$temp5=mysqli_query($conn,$sql);



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    #start
    {
      position:relative;
      vertical-align: center;

    }
    .menu-img
    {
      height:150px;
      width:200px;
    }
    .round_image
  {
    cursor:pointer;
    height:200px;width:100%;
  }
  </style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Muruga Bhuvan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


<script>
  function add_to_cart(clicked)
  {
    window.alert("Login to continue!")

  }
</script>

  <!-- =======================================================
  * Template Name: Restaurantly - v1.2.1
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> +91 9876543210
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> All week: 9:00 AM - 23:00 PM</span>
      </div>
      
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Murugan Bhavan</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">Legacy</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#testimonials">Testemonial</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="signup_page.php">Login</a></li>
          <li ><a onclick="window.alert('Login to continue')" title="Login to continue"href="#">Cart</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background-image: url('images/landing.jpg');">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100" >
      
     
          <h1 style="text-align: center;"><span style="text-align: center;">Muruga Bhavan</span></h1>
          <br>
          <h2 style="text-align: center;"><span>Delivering great food for more than 56 years!</span></h2>

     
        
     
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="background-image: url(images/restraunt.jpg);">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-3 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img" >
              <img src="images/chettiar.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Our Legacy</h3>
            <p class="font-italic">
            
            </p>
            <p style="white-space: pre-wrap;">
              The Nattukottai Chettiar brothers started this classic restaurant in late 1965. Faced with heavy competition from their then peers, they wanted to stand out unique. They realized that the right blend of rich spices in right amount, specific variety of rice for each dish that enhances its taste, perfect timing together can create a variety of mouth-watering delicasies. Their enhanced taste, hygiene, richness and a variety of new dishes helped them to establish a huge loyal customer base. And thus started our legacy!

              Our famous Chettiar chicken is made from mixing indigenous chicken with a secret spice blend and roasting it in the coconut oil. With the aroma kindling your hunger pangs, its a treat for your taste buds! Come taste once and then we assure you that you would come back for more!    
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <!--<section id="why-us" class="why-us">
      
        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Lorem Ipsum</h4>
              <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Repellat Nihil</h4>
              <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4> Ad ad velit qui</h4>
              <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
            </div>
          </div>

        </div>

      </div>
    </section> End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        
        <br>
        <br>
        <h2>Specials</h2><br><br>
        <div class="row" style="min-height: 100%">
          

<?php 

 while ($row = mysqli_fetch_assoc($temp1)) {?>
        


          <div class="col-lg-4" style="height:100%;float:left; ">
            <img  src="images/<?php echo $row['image'] ?>" class="round_image">
              <br><br>
              <h4 style="text-align: center; background-color: #CDA45E"><?php echo $row['name'];?></h4>

              <p style="text-align: center;"> <?php echo $row['description'] ?></p>
              <p style="text-align: center;" >Rs. <?php echo $row['price'] ?></p>
              <button id='<?php echo $row['sno'];?>' style="width:100%" onclick="add_to_cart(this.id)">Add to cart</button>
            </div>
<?php
};?>
</div>
<h2>Starters</h2><br><br>
<div class="row">
<?php 

 while ($row = mysqli_fetch_assoc($temp2)) {?>
        


          <div class="col-lg-4" style="height:100%;float:left; ">
            <img  src="images/<?php echo $row['image'] ?>" class="round_image">
              <br><br>
              <h4 style="text-align: center; background-color: #CDA45E"><?php echo $row['name'];?></h4>

              <p style="text-align: center;"> <?php echo $row['description'] ?></p>
              <p style="text-align: center;" >Rs. <?php echo $row['price'] ?></p>
              <button id='<?php echo $row['sno'];?>' style="width:100%" onclick="add_to_cart(this.id)">Add to cart</button>
            </div>
<?php
};?>

</div>
<h2>Rice</h2><br><br>
<div class="row">
<?php 

 while ($row = mysqli_fetch_assoc($temp3)) {?>
        


          <div class="col-lg-4" style="height:100%;float:left; ">
            <img  src="images/<?php echo $row['image'] ?>" class="round_image">
              <br><br>
              <h4 style="text-align: center; background-color: #CDA45E"><?php echo $row['name'];?></h4>

              <p style="text-align: center;"> <?php echo $row['description'] ?></p>
              <p style="text-align: center;" >Rs. <?php echo $row['price'] ?></p>
              <button id='<?php echo $row['sno'];?>' style="width:100%" onclick="add_to_cart(this.id)">Add to cart</button>
            </div>
<?php
};?>

</div>
<h2>Bread</h2><br><br>
<div class="row">
<?php 

 while ($row = mysqli_fetch_assoc($temp4)) {?>
        


          <div class="col-lg-4" style="height:100%;float:left; ">
            <img  src="images/<?php echo $row['image'] ?>" class="round_image">
              <br><br>
              <h4 style="text-align: center; background-color: #CDA45E"><?php echo $row['name'];?></h4>

              <p style="text-align: center;"> <?php echo $row['description'] ?></p>
              <p style="text-align: center;" >Rs. <?php echo $row['price'] ?></p>
              <button id='<?php echo $row['sno'];?>' style="width:100%" onclick="add_to_cart(this.id)">Add to cart</button>
            </div>
<?php
};?>

</div>
<h2>Gravy</h2><br><br>
<div class="row">
<?php 

 while ($row = mysqli_fetch_assoc($temp5)) {?>
        


          <div class="col-lg-4" style="height:100%;float:left; ">
            <img  src="images/<?php echo $row['image'] ?>" class="round_image">
              <br><br>
              <h4 style="text-align: center; background-color: #CDA45E"><?php echo $row['name'];?></h4>

              <p style="text-align: center;"> <?php echo $row['description'] ?></p>
              <p style="text-align: center;" >Rs. <?php echo $row['price'] ?></p>
              <button id='<?php echo $row['sno'];?>' style="width:100%" onclick="add_to_cart(this.id)">Add to cart</button>
            </div>
<?php
};?>
          
        </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <!--<section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Specials</h2>
          <p>Check Our Specials</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Modi sit est</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Unde praesentium sed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Pariatur explicabo vel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">Nostrum qui quasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5">Iusto ut expedita aut</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Architecto ut aperiam autem id</h3>
                    <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-1.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="font-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-2.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="font-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-3.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="font-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-4.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="font-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-5.png" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>--><!-- End Specials Section -->

     <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              We were out for shopping and headed here for lunch here as it was nearby. It was our best decision. All the dishes were top class! Highly satisfied! Kudos to the chefs.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            
            <h3>Rahul Nathan</h3>
            <h4>Customer</h4>
            
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Outings, family dinners, functions, birthday treats and every other occasion when it comes to food there is no better alternative for Murugan Bhavan. We are regular customers here.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            
            <h3>Ambika</h3>
            <h4>Customer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              I love food more than anything else. Taste is an emotion for me. Thus Murugan Bhavan is a paradise in heaven for people like me! My weekend starts and ends here!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            
            <h3>Kishore Kumar</h3>
            <h4>Customer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Chettiar chicken is out of the world! Whenever I come here, one plate of chettiar chicken is a must for me. all other dishes are also delicious. I just love the food here!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            
            <h3>Sujatha</h3>
            <h4>Customer</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Foodies are most welcomed here! Even if you are ot one, this restaurant would make you one. Taste + Hygiene. Our family outings never get fulfilled without coming here!
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            
            <h3>Aravind</h3>
            <h4>Customer</h4>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          
            <div class="info" >
              <div class="address" style="display:inline;float: left">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>175.Abirami Street, Asokapuram, Erode-4</p>
              </div>

              <div class="open-hours" style="float: left">
                <i class="icofont-clock-time icofont-rotate-90"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  11:00 AM - 2300 PM
                </p>
              </div>

              <div class="email" style="float: left">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>murugan_bhavan@gmail.com</p>
              </div>

              <div class="phone" style="float: left">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91 9876543210</p>
              </div>

            </div>

          </div>
        </div>

          
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 
  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>