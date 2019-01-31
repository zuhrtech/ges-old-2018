<?php
session_start();

///////////////////////////////////////////////////////

if(isset($_POST['zauth_login']) ){
  
echo '<script>alert("Welcom Zeshan Khan");</script>';
 
}
///////////////////////////////////////////////////////
if(isset($_POST['zauth_register'])){
echo '<script>alert("Your Registration Pending");</script>';   
}

///////////////////////////////////////////////////////

if(isset($_GET['logout'])){
    session_destroy();
    header('location: http://ges.zuhrtech.com');
}


///////////////////////////////////////////////////////

if(isset($_GET['ZAuth']) && $_GET['ZAuth']==true){
$_SESSION['ZAuth'] = $_GET['ZAuthUserToken'];
$data=  json_decode(file_get_contents(str_replace(' ', '', "http://auth.zuhrtech.com/who/DBSH7J/".$_SESSION['ZAuth'])), true);
//header('location: http://ges.zuhrtech.com');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="https://zuhrtech.com/css/responsive.css">
<link rel="stylesheet" href="https://zuhrtech.com/css/style.css">


<script src="https://zuhrtech.com/js/main.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 
</head>
<body>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>





    <div class="container ">




<div class="row jumbotron">

    
  <div class="col-md-12">
  <h2 class="text-center">Hello, Dear!</h2>
  <h4 class="text-center">This is a best unit to Explore Your Desire, Its a great place of Learning and Teaching.</h4>
  <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">Leard More</a></p>
  
</div>
  
  <div class="col-sm-6 col-md-12">
  
  <div class="col-sm-6 col-md-6">
    <div class="thumbnail">
      <img src="icon/student.png" alt="...">
      <div class="caption">
        <h5><b>What you want to learn today..?</b></h5>
       <a href="">Explore Classes</a>
      
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 col-md-6">
    <div class="thumbnail">
      <img src="icon/teacher.png" alt="...">
      <div class="caption">
        <h5><b>What you want to teach today..?</b></h5>
       <a href="">Start a session</a>
       
      </div>
    </div>
  </div>
  
  </div>
  
<div class="col-md-12">
       <div class="jumbotron" style="border: 1px solid blue;">
                <form id="register" method="post" action="">
                    <label for="email">First Name</label>
                  <div class="form-group">
                   
                    <div class="col-md-6"> <input style="background-color:rgba(239, 246, 248,0.9)" type="text"  name="first" id="first"  class=" form-control input-name" placeholder=" First Name"></div>
                    <div class="col-md-6">  <input style="background-color:rgba(239, 246, 248,0.9)" type="text"  name="last" id="last"  class=" form-control input-name" placeholder=" Last Name"></div>
                   
                   
                  </div>
                  <div class="form-group">
                    <label for="password">Mobile #</label>
                    <input style="background-color:rgba(239, 246, 248,0.9)" type="text" name="contact_number" id="contact_number"  class=" form-control input-phone-number" placeholder="Your Tele Phone Number">
                  </div>
                  <div class="form-group">
                    <label for="password">Mobile #</label>
                    <input style="background-color:rgba(239, 246, 248,0.9)" type="text" name="email" id="contact_number"  class=" form-control input-phone-number" placeholder="Your Email">
                  </div>
                  <div class="form-group">
                    <label for="password">Type</label>
                    <select name="type" style="background-color:rgba(239, 246, 248,0.9)" class=" form-control"><option disabled selected hidden>Register As</option><option>Student</option><option>Teacher</option></select>
                  </div>
                    <div class="form-group">
                    <label for="password">Password</label>
                    <input style="background-color:rgba(239, 246, 248,0.9)" type="text" name="password" id="password"  class=" form-control input-phone-number" placeholder="Your Password">
                  </div>
                    <div class="form-group">
                    <label for="password">DOB</label>
                    <input  style="background-color:rgba(239, 246, 248,0.9)" type="date" name="dob" id="dob"  class="form-control input-dob" placeholder="Your Tele Phone Number">
                  </div>
                   
                  <button type="submit" name="zauth_register" class="btn btn-success btn-block btn-lg mb-2" >Sign up</button>
                  <div class="text-center">
                    Already have an account? <a role="button" href="javascript:void(0)" id="golog">Sign in</a>
                  </div>
                </form>
                <?php
               
$conn =  mysqli_connect('localhost', 'zuhrtech_Api', 'zuhrtech' ,'zuhrtech_GES');     
 
 
 if(isset($_POST['zauth_register']))
{

$name = $_POST['first'] . "&nbsp;" . $_POST['last'];
$mobile = $_POST['contact_number'];
$type = $_POST['type'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$email = $_POST['email'];
 
$sql_query = "insert into User_registration values('$name','$mobile','$type','$password','$dob','$email','')";
mysqli_query($conn,$sql_query);

    
}
                ?>
                
                <!-----Login-->
                  <form id="login" hidden method="post">
                     
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input style="background-color:rgba(239, 246, 248,0.9)" type="text" class="form-control" id="email" placeholder="Enter your email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input style="background-color:rgba(239, 246, 248,0.9)" type="password" class="form-control" id="password" placeholder="Enter your password">
                  </div>
                
                  <button type="submit" name="zauth_login" class="btn btn-success btn-block btn-lg mb-2">Login</button>
                  <div class="text-center">
                   No account?  <a role="button" href="javascript:void(0)" id="goreg"> Create one!</a>
                  </div>
                </form>
                </div>
                <script>
$(document).ready(function(e) {
    $("#golog").click(function(e) {
      
		 $("#login").show();
		  $("#register").hide();
    });
	
	 $("#goreg").click(function(e) {
      
		 $("#login").hide();
		  $("#register").show();
    });

});
</script>
                <!----->
              </div>
       



</div>




</div>
</body>

<footer>
        <p>  &copy; 2018 <a style="color:#0a93a6; text-decoration:none;" href="http://zuhrtech.com"> All rights reserved </a> ZuhrTech Inc. </p>
    </footer>
    
    <style>
 footer{
   background-color: #424558;
   
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
    </style>
</html>