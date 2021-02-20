<?php
session_start();
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'task');
$sql="select * from menu join order_log where sno=item_sno and order_id=$_SESSION[order_id]";
$temp=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    #start
    {
      position:relative;
      top:25%;
      left:33%;
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
  body
  {
    opacity: 100%;
  }
  
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
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> All week: 8:00 AM - 23:00 PM</span>
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
          <li ><a href="logged_index.php">Home</a></li>
          <li><a href="logged_index.php#about">Legacy</a></li>
          <li><a href="logged_index.php#menu">Menu</a></li>
          
          <li><a href="logged_index.php#contact">Contact</a></li>
          
          <li class="active"><a href="cart.php">Cart</a></li>
          <li><a href="logout.php">Logout</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg" >
      <div class="container" data-aos="fade-up" style="opacity: 100%">

        <div class="section-title">
          <h2>Invoice</h2>
          
        </div>


<?php 
 $sum=0;
 while ($row = mysqli_fetch_assoc($temp)) {
 
  $sum=$sum+$row['total'];?>
        


          <div class="col-lg-4" style="height:100%;float:left; ">
           
              <br><br>
              <h4 style="text-align: center; background-color: #CDA45E"><?php echo $row['name'];?></h4>
              
              <p style="text-align:left;float: left">Quanitity:</p>

              <p id="q<?php echo $row['item_sno'] ?>" style="text-align:right;"><?php echo $row['quantity'] ?></p>
             <p style="text-align:left;float: left">Price:</p>

              <p style="text-align: right;">Rs. <span style="text-align: right;" id="p<?php echo $row['item_sno'] ?>" ><?php echo $row['price'] ?></span></p>
              <p style="text-align:left;float: left">Total:</p>

              <p style="text-align: right;">Rs. <span id="t<?php echo $row['item_sno'] ?>" style="text-align: right;" ><?php echo $row['total'] ?></span></p>
              <div id=<?php echo $row['item_sno'] ?>>
  <button onclick="decreaseValue(this)" >-</button>
  <input pattern="[0123456789]"style="text-align: center;" id="n<?php echo $row['item_sno'] ?>" value="<?php echo $row['quantity'] ?>" />
  <button  onclick="increaseValue(this)" >+</button>
</div>
              <br>
          <br>
          <br>

            </div>
<?php
};?>
          
        </div>

  <script>
    function increaseValue(element) {
      var parent = element.parentNode;
      
      var text="";
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      text =this.responseText;
      
    }
    
  }

  xhttp.open("POST", "increase_cart.php", false);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("item_sno="+parent.id);

 if(Number(text)>=0)
 {
 document.getElementById('t'+parent.id).innerHTML=Number(document.getElementById('p'+parent.id).innerHTML)*Number(text);
  
  document.getElementById('q'+parent.id).innerHTML=text;
  document.getElementById('n'+parent.id).value=text;
  document.getElementById('total').innerHTML=Number(document.getElementById('total').innerHTML)+Number(document.getElementById('p'+parent.id).innerHTML);
}


  
 
}

function decreaseValue(element) {
 
  var parent = element.parentNode;
   if(Number(document.getElementById('q'+parent.id).innerHTML)>0){

      
      var text="";
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      text =this.responseText;
      
    }
    
  }

  xhttp.open("POST", "decrease_cart.php", false);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("item_sno="+parent.id);


 document.getElementById('t'+parent.id).innerHTML=Number(document.getElementById('p'+parent.id).innerHTML)*Number(text);
  
  document.getElementById('q'+parent.id).innerHTML=text;
  document.getElementById('n'+parent.id).value=text;
  document.getElementById('total').innerHTML=Number(document.getElementById('total').innerHTML)-Number(document.getElementById('p'+parent.id).innerHTML);
  
 }
  
}
  </script>

    </section>
    <section>
      <h3 style="text-align: center;" id="all">Total: Rs. <span id="total"><?php echo $sum?></span></h3> <br><br>
      <h5 style="text-align: center;"><span style="border:2px solid black;padding: 15px;background-color: #CDA45E;cursor: pointer;">Proceed to Pay<span></h5>
    </section>