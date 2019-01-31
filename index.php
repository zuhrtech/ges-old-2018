<?php 
session_start();
if(isset($_SESSION['GES_SESSION']) && $_SESSION['GES_SESSION'] != null){
    $x = 'https://www.ges.zuhrtech.com/dashboard.php?action=login&uname=na&type='.$_SESSION['type'].'&uid='.$_SESSION['GES_SESSION'].'&loginas='.$_SESSION['loginas'];
    echo'<script> window.location.assign("'.$x.'");</script>';
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="boot/bootstrap.min.css">
<script src="boot/js/jquery.js"></script>
<script src="boot/js/jquery.min.js"></script>


<!-- Optional theme -->
<link rel="stylesheet" href="boot/bootstrap.css" >
<link rel="stylesheet" href="css/core.css" >


<!-- Latest compiled and minified JavaScript -->

</head>
<body style="background: #eee !important;">


<section id="team" class="pb-5">
    <div class="container">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">GES</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src = "icon/ges t1.png"  style="width:130px; height:130px;position:relative; margin-top:-50px"></a>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
       <li><a href="#" class="card-title" style="font-size:22px">  Global Education System</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#">About US</a></li>
          <li><a href="#">Contact US</a></li>
        <li><a href="javascript:void(0)"  data-toggle="modal" data-target="#myModal">Register</a></li>
         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


        
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="icon/teacher.png" alt="card image"></p>
                                    <h1 class="card-title">Are you Teacher?</h1>
                                    
                                   
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4 container-fluid">
                                    <h2 class="card-title"> What you want to Teach today? </h2><br><br>
                                    
                                   <br>
                                  <button id="tea" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login">
  Login
</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="icon/student.png" alt="card image"></p>
                                    <h1 class="card-title">Are you Student?</h1>
                                   
                                  
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4 container-fluid">
                                    <h2 class="card-title">What you want to learn today?</h2><br><br>
                                  
                                   <br>
                                   <button id="std" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#login">
  Login
</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>

  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">Login Form</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-----Login-->
                  <form id="logmein" action="https://mws.ges.zuhrtech.com/account/__login__/go"  method="post" >
                      <p id="hid"></p>
               
                    
                     
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input style="background-color:rgba(246, 248, 253,0.4)" type="email" id="mlemail" name="lemail" class="form-control"  placeholder="Enter your email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                   
                    <input style="background-color:rgba(246, 248, 253,0.4)" type="password" class="form-control" name="lpassword" placeholder="Enter your password">
                  </div>
                  
                 
                
  
      </div>
      <div class="modal-footer">
        <button type="submit"  class="btn btn-success btn-block btn-lg mb-2">Login</button>
           </form>      
                  
      </div>
    </div>
  </div>
</div>
  
      
  
  
  
  
  
  
  
  
  
  
  
  

       
                
              
               
                
                <script>
$(document).ready(function(e) {
     $(".kkk").click(function(e) {
       
          $("#gridtwo").show();
		  $("#gridone").hide();
     });
    $("#golog").click(function(e) {
      
		 $("#login").show();
		  $("#register").hide();
    });
	
	 $("#goreg").click(function(e) {
      
		 $("#login").hide();
		  $("#register").show();
    });


                    
   $("#std").click(function(){
        $('#logmein').trigger("reset");
        $( "#hid" ).remove("input");
  var input = document.createElement("input");
input.setAttribute("type", "hidden");
input.setAttribute("name", "as");
input.setAttribute("value",'Student');
document.getElementById("hid").appendChild(input);
});



$("#tea").click(function(){
     $('#logmein').trigger("reset"); $( "#hid" ).remove("input");
  var input = document.createElement("input");
input.setAttribute("type", "hidden");
input.setAttribute("name", "as");
input.setAttribute("value", 'Teacher');
document.getElementById("hid").appendChild(input);    
});
                    




$("#logmein").submit(function(event) {
 
  event.preventDefault();
  var f = $("#logmein").serialize();
  var action = $("#logmein").attr("action");
  var method = $("#logmein").attr("method");
   
      
    $.ajax({
        method:method,
        dataType:"json",
        url:action,
        data:f,
        async: true,
        success: function(res)
        { 
            if(res.status == 200){
                $.notify(res.msg, "success");
                var type = res.data['Accessing_As'];
                var le = $("#mlemail").val();
                window.location.assign('https://www.ges.zuhrtech.com/dashboard.php?action=login&uname=na&type='+res.data['User_Type']+'&uid='+le+'&loginas='+res.data['Accessing_As']);
               
            }else{
               $('#logmein').trigger("reset");
                $.notify(res.msg, "error");
                  
            }
        
        }
       
        
    });
    
    
     
});
 

 


}); // ready


</script>
                <!----->
              
       






<?php include('register.php'); ?>


</body>



<footer>
<p>  &copy; 2018 <a style="color:#0a93a6; text-decoration:none;" href="http://zuhrtech.com"> All rights reserved </a> ZuhrTech Inc. </p>
    </footer>
    
    <style>
 footer{
   background-color: #424558;
   position:fixed;
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
    </div>
</section>
  
<script src="boot/js/bootstrap.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="notify.min.js"></script>   
</html>
