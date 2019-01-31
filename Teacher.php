

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
          
           
          <?php 
          session_start();
          if($_SESSION['type'] == 'Both'){
              
          ?>
          <li><a href="https://ges.zuhrtech.com/Student.php">Switch User</a></li>
          <?php
          }
          ?>
        <li ><i class="fa fa-user"></i><a href="http://ges.zuhrtech.com/session.php?session=logout" >Logout</a></li>
         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


        
        <div class="row">
            
        <div class="container">
            
    
    
    
    
    <form class="form-horizontal col-lg-6 panel panel-info">
               
               
  <div class="panel-heading">
    <h3 align="center" class="panel-title">Add Course</h3>
  </div>
  
  
        <div class="panel-body ">
            
             <div  class="col-lg-12 col-md-12 col-sm-12 ">
                 
                 
                 
                 
            
  <div style="margin-right:2px" class="form-horizontal  form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Course Title</label>
    <input type="text" class="form-control" id="CourseTitle" name="CourseTitle" title="Course Title" placeholder="Course Title">
    
  </div>
  
  
   <div style="margin-right:2px" class="form-horizontal form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Subject Name</label>
    <input type="text" class="form-control" id="SubjectName" name="SubjectName" title="Subject Name" placeholder="Subject Name">
    
  </div>
  
  
   <div style="margin-right:2px" class="form-horizontal form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Course Fee: Doller($)</label>
    <input type="number" class="form-control" id="CourseFee" name="CourseFee" title="Course Fee" placeholder="Course Fee" value="0.0">
    
  </div>
  
  
  <div style="margin-right:2px" class="form-horizontal form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Start Date</label>
    <input type="date" class="form-control" id="StartDate" name="StartDate" title="Start Date" placeholder="Start Date">
    
  </div>
  
  <!----------->
  
  
  <div style="margin-right:2px" class="form-horizontal  form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Course Duration (Total Days)</label>
    <input type="number" class="form-control" id="TotalDays" name="TotalDays" title="Total Days" placeholder="Total Days">
    
  </div>
  
  
   <div style="margin-right:2px" class="form-horizontal form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Day Of Class</label>
    <select type="day" class="form-control" id="DayOfClass" name="DayOfClass" title="Day Of Class" placeholder="Day Of Class">
        <option selected disable>---Select One---</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
        <option value="Sunday">Sunday</option>
    </select>
    
  </div>
  
  
   <div style="margin-right:2px" class="form-horizontal form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Class Timing</label>
    <input type="time" class="form-control" id="ClassTiming" name="ClassTiming" title="Class Timing" placeholder="Class Timing" >
    
  </div>
  
  
   <div style="margin-right:2px" class="form-horizontal form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Select Course Category</label>
    <select class="form-control catlist" id="catlistxxc" name="CourseCategory" title="Select Course Category" placeholder="Select Course Category" >
        <option selected disable>---Select One---</option>
        
    </select>
    
  </div>
  
  
  <!------------->
  
  
  <div style="margin-right:6px" class="form-horizontal form-group col-lg-2 col-md-2 col-sm-12">
      
   
    
  </div>
  
  
  <div style="margin-right:6px" class="form-horizontal form-group col-lg-12 col-md-12 col-sm-12">
      
    <label  class=""> Course Detail</label>
    <textarea type="time" class="form-control" id="CourseDetail" name="CourseDetail" title="Course Detail" placeholder="Course Detail" rows="4">
        
    </textarea>
    
  </div>
  
  
  
  
            </div>
  
  <div class="clearafix"></div>
  
  </div>

  <div class="form-inline panel-footer">
  
  
  <div class="form-group t">
    <div class="col-lg-3 col-md-5 col-sm-10">
      <button type="button" class="btn btn-success ">Start Course</button>
    </div>
  </div>    
      
  <div class="form-group t">
    <div class="col-lg-3 col-md-5 col-sm-10">
       
     <button  type="button" class="btn btn-info " data-toggle="modal" data-target="#addcat">Add New Category</button>
        </div>
  </div> 
    
  <div class="form-group t pull-right clearafix">
    <div class="col-lg-3 col-md-5 col-sm-10">
      <button type="reset" class="btn btn-primary">Clear</button>
    </div>
  </div>      
      
      
  </div>


</form>
    
    
    <form class="form-horizontal col-lg-6 panel panel-info">
               
               
  <div class="panel-heading">
    <h3 align="center" class="panel-title">Add Course</h3>
  </div>
  
  
        <div class="panel-body ">
            
             <div  class="col-lg-12 col-md-12 col-sm-12 ">
                 
                 
                 
                 
    
  
 <div style="margin-right:2px" class="form-horizontal form-group col-lg-12 col-md-4 col-sm-12">
      
    <label  class=""> Day Of Class</label>
    <select type="day" class="form-control" id="DayOfClass" name="DayOfClass" title="Day Of Class" placeholder="Day Of Class">
        <option selected disable>---Select One---</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
        <option value="Sunday">Sunday</option>
    </select>
    
  </div>

  
 
  
  
  <div style="margin-right:6px" class="form-horizontal form-group col-lg-12 col-md-12 col-sm-12">
      
    <label  class=""> Course Detail</label>
    <textarea type="time" class="form-control" id="CourseDetail" name="CourseDetail" title="Course Detail" placeholder="Course Detail" rows="4">
        
    </textarea>
    
  </div>
  
  
  
  
            </div>
  
  <div class="clearafix"></div>
  
  </div>

  <div class="form-inline panel-footer">
  
 
  <div class="form-group t pull-right clearafix">
    <div class="col-lg-3 col-md-5 col-sm-10">
      <button type="reset" class="btn btn-primary">Send</button>
    </div>
  </div>      
      
      
  </div>


</form>
    
       
            
            
            
            
          </div>    
        </div>

               
                
                
                
                
                
                
                
                
                
                
                
                
         

<!-- Modal -->
<form class="modal fade" id="addcat" method="post" action="https://mws.ges.zuhrtech.com/account/__addnewcat__/Params" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Category</h4>
      </div>
      <div class="modal-body">
        
        
        
        
       
 
  <div class="checkbox">
    <label>
      <input id="checkyup" name="sub" value="yes" type="checkbox"> Check me if This cat is subcat
    </label>
  </div>
  <script>
     $("#checkyup").change(function() {
    if(this.checked) {
       
        $("#hidcat").show();
    }else{
        
        $("#hidcat").hide();
    }
});
  </script>
   <div id="hidcat" hidden class="form-group">
    <label for="exampleInputEmail1">Select Category</label>
    <select class="form-control catlist" id="catlistxxd" name="CourseCategory" title="Select Course Category" placeholder="Select Course Category" >
        <option selected disable>---Select One---</option>
        <option >Science</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">New Category Name</label>
    <input type="text" class="form-control" name="newcatname"  placeholder="New Category Name">
    <input type="hidden"  name="addedbyid" value="default">
  </div>
  
  

        
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Save changes</button>
      </div>
    </div>
  </div>
</form>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <script>
$(document).ready(function(e) {
 

 getcoursees('catlistxxc');
 getcoursees('catlistxxd');
 $("#addcat").submit(function(event) {
     event.preventDefault();
        addcatfunc();   
     
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
