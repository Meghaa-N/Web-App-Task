<!DOCTYPE html>
<!-- saved from url=(0054)https://preview.colorlib.com/theme/studylab/index.html -->

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login</title>
<head><link rel="icon" href="favicon.ico" type="image/icon type">
<style>
  #login_button
  {
    position:relative;
    margin-right: 45%;
    background-color: #010217;

  }
  #contain
  {
    margin-top:5%;
  }
  @media screen and (max-width: 900px)
  {
    #login_button{
     position:relative;
    margin-right: 28%;
    background-color: #010217;
}
    #contain
    {
      margin-top:27%;
    }
  }
</style></head>
<script type="text/javascript">
  function hide_error()
{
  document.getElementById('error').innerHTML="";

}
  function visibility_checking()
  {
    if(<?php echo $quiz_section ?>)
    {
      document.getElementById('quiz').style.display='show';
    }
    else
    {
      document.getElementById('quiz').style.display='none';
      
    }

    if(<?php echo $quiz1 ?>)
    {
      document.getElementById('quiz1').style.display='show';
    }
    else
    {
      document.getElementById('quiz1').style.display='none';
      
    }

    if(<?php echo $quiz2 ?>)
    {
      document.getElementById('quiz2').style.display='show';
    }
    else
    {
      document.getElementById('quiz2').style.display='none';
      
    }

    if(<?php echo $quiz3 ?>)
    {
      document.getElementById('quiz3').style.display='show';
    }
    else
    {
      document.getElementById('quiz3').style.display='none';
      
    }



    if(<?php echo $result_section ?>)
    {
      document.getElementById('result').style.display='show';
    }
    else
    {
      document.getElementById('result').style.display='none';
      
    }

    if(<?php echo $result1 ?>)
    {
      document.getElementById('result1').style.display='show';
    }
    else
    {
      document.getElementById('result1').style.display='none';
      
    }

    if(<?php echo $result2 ?>)
    {
      document.getElementById('result2').style.display='show';
    }
    else
    {
      document.getElementById('result2').style.display='none';
      
    }

    if(<?php echo $result3 ?>)
    {
      document.getElementById('result3').style.display='show';
    }
    else
    {
      document.getElementById('result3').style.display='none';
      
    }

  }
</script>

<script>
  function password_verify(){
  var flag;
  var em = document.forms["login"]["email"].value;
  var password = document.forms["login"]["password"].value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      flag =this.responseText;
  }
  
  };
  xhttp.open("POST", "login_verification.php", false);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("em="+em+"&password="+password);
if(flag==0)
      {
        document.getElementById('error').innerHTML="Invalid user name or password!";
        return false;
      }
      else
      {
        return true;
      }
     
    }
   
  
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/css" rel="stylesheet">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/font-awesome.min.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/animate.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/owl.carousel.min.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/owl.theme.default.min.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/magnific-popup.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/bootstrap-datepicker.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.timepicker.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/flaticon.css">
<link rel="stylesheet" href="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/style.css">
<style type="text/css">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };</style><script type="text/javascript" charset="UTF-8" src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/common.js.download"></script><script type="text/javascript" charset="UTF-8" src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/util.js.download"></script><script type="text/javascript" charset="UTF-8" src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/AuthenticationService.Authenticate"></script></head>
<body style="background-color:#010217 ">
  <section class="ftco-section ftco-no-pb ftco-no-pt"  >
<div class="container" id="contain" style="border:10px double #010217;background-color: white;margin-bottom: 5%;max-width: 60%">
<!--<div class="row">-->
<div class="try" style="padding:10%">
<!--<div class="login-wrap p-4 p-md-5">-->
<h3 class="mb-4" style="text-align: center;color:#010217">LOGIN</h3>
<!-- END nav -->

<!--<section class="ftco-section ftco-no-pb ftco-no-pt" style="margin-top: 5%">
<div class="container">
<div class="row">
<div class="col-md-7"></div>
<div class="col-md-5 order-md-last">
<div class="login-wrap p-4 p-md-5">
<h3 class="mb-4">LOGIN</h3>-->
<form action="loginhandle.php" class="signup-form" name="login" method='POST' onsubmit="return password_verify()">

<div class="form-group">
<label class="label" for="email">Email ID<span style='color: red'>*</span></label>
<input type="email" class="form-control" onclick="hide_error()" name="email" placeholder="Email" required>
</div>

<div class="form-group">
<label class="label" for="password"   >Password<span style='color: red'>*</span></label>
<input id="password-field" type="password" onclick="hide_error()" name="password" class="form-control" placeholder="password" required>
</div>
<div class="form-group">
<p id="error" style="color: red"></p></div>
<div class="form-group d-flex justify-content-end mt-4">
<button type="submit" style="background-color: #010217;color:white;border-radius: 5%;border-color: #010217"   id="login_button">LOGIN</button>
</div>
</form>

<p class="text-center">New?  <a href="signup_page.php">Sign UP</a></p>
</div>
</div>
</div>
</div>
</section>


<!-- loader -->
<div id="ftco-loader" class="fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"></circle><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"></circle></svg></div>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery-migrate-3.0.1.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/popper.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/bootstrap.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.easing.1.3.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.waypoints.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.stellar.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/owl.carousel.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.magnific-popup.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/jquery.animateNumber.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/bootstrap-datepicker.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/scrollax.min.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/js"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/google-map.js.download"></script>
<script src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/main.js.download"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="./StudyLab - Free Bootstrap 4 Template by Colorlib_files/js(1)"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','UA-23581568-13');</script>

</body></html>
