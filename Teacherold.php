
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="css/core.css" >


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="notify.min.js"></script> 
<script src="function.js"></script>
</head>
<body style=" background: #eee !important;">


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
          
       
          <li><a href="https://ges.zuhrtech.com/Student.php">Switch To Student</a></li>
        
        <li ><i class="fa fa-user"></i><a href="http://ges.zuhrtech.com/session.php?session=logout" >Logout</a></li>
         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


        
     
               
              <form action="/action_page.php">
  Main Category:
  <select  name="CourseCategory" id="catlistxxc">
      
       <optgroup><option selected disable>---Select One---</option></optgroup>
        
    </select>
  <br><br><br>
  
  Sub Category:
  <select  id="catlistxxd" name="CourseCategory" >
        <optgroup><option selected disable>---Select One---</option></optgroup>
        
    </select>
  <br><br><br>
  
  New Category: <input type="text" name="" ><br>
  <br><br>
  
  Course Name: &nbsp&nbsp&nbsp<input type="text" name="" ><br>
  
  Timing: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="" ><br>
  
  Rate: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="" ><br>
  
  Description: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="" ><br>
  
  Class: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="" ><br>
   Class Size: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="1" name="" ><br>
   Date: &nbsp;&nbsp;&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="date" name="" ><br>
  
  <input type="submit" value="Add Course">
</form> 
                
               
                
                
                
                
                
                
                
         
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <script>
$(document).ready(function(e) {
 

 getcoursees('catlistxxc');
 
/* $("#addcat").submit(function(event) {
     event.preventDefault();
        addcatfunc();   
     
 });
 
 */
 $( "#catlistxxc" ).change(function() {
    
  getsubcat('catlistxxd',$("#catlistxxc").val());
});

}); // ready
</script>
                <!----->
              
       




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
  
  
</html>