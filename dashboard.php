<?php include("session.php"); ?>

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
<!--Include the above in your HEAD tag ------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="notify.min.js"></script> 
<script src="function.js"></script>
</head>
<body style=" background: #eee !important;">


<section id="team" class="pb-5">
    <div class="container">

<nav class="navbar navbar-default">
  <div class="container-fluid"
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
          $goto ="";
          $uas = $_SESSION['loginas'];
          $utype = $_SESSION['type'];
          if($_SESSION['type'] == 'Both'){
          
          
          if($uas == "Teacher"){
              $goto = "Student";
          }else{
              $goto = "Teacher";
          }
              
          ?>
          <li><a href="https://www.ges.zuhrtech.com/dashboard.php?action=login&uname=na&type=<?php echo $utype; ?>&uid=<?php echo $_SESSION['GES_SESSION'];?>&loginas=<?php echo $goto; ?>">
             
              Switch To <?php echo $goto; ?>
              
              </a></li>
          <?php
          }
          ?>
        <li ><i class="fa fa-user"></i><a href="http://ges.zuhrtech.com/dashboard.php?action=logout" >Logout</a></li>
         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


        
        <div class="row">
            
        <div class="container">
            <?php
            
        
        if($_GET['loginas'] == 'Student'){ 
            
            ?>
            
       <div  id="student">
           
           
            
    <div class="form-horizontal panel panel-info">
               
               
  <div class="panel-heading">
    <h3 align="center" class="panel-title">Student Enrollment</h3>
  </div>
  
  
        <div class="panel-body ">
  
  
        <div class="col-lg-6 col-md-6 col-sm-12 ">
            
            
            <!------------------------------------------->
            <form method="post" action="https://www.ges.zuhrtech.com/function.php?" id="seachcou" class="form-horizontal panel panel-success">
               
                       
          <div class="panel-heading">
            <h3 align="center" class="panel-title">Search Courses Here</h3>
          </div>
          
      
            <div class="panel-body ">
                
                
                 <div  style="margin-right:2px" class="form-horizontal form-group col-lg-12 col-md-12 col-sm-12">
      
                <label  class=""> Search for classes..</label>
                <input type="text" class="form-control" id="Search" name="Search" title="Search.." placeholder="Search..">
                </div>
                
                  <div  style="margin-right:2px" class="form-horizontal form-group col-lg-12 col-md-12 col-sm-12">
                      
                    <label  class=""> Select Course Category</label>
                     <select class="form-control catlist" id="catlistxxc" name="CourseCategory" title="Select Course Category" placeholder="Select Course Category" >
        <option selected disable>---Select One---</option>
        
    </select>
                    
                  </div>
              
              <table  id="tblsearch" class="table table-bordered table-responsive" border="1">
        
  
      
  
                </table>
              
              
            </div>
            <input type="hidden" name="searchcourse">
            <div class="panel-footer form-inline">
                               <div class="form-group t ">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                  <button type="submit"  id="show" class="btn btn-success">Search</button>
                                </div>
                                </div> 
                                
                                <div class="form-group t">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <button type="reset" id="hide" class="btn btn-primary">Clear</button>
    </div>
  </div> 
            </div>    
            
        </form>
  <!------------------------------------------->
  </div>
  
  
  
  









  
    <div class="col-lg-6 col-md-6 col-sm-12 ">
            
            
            <!------------------------------------------->
            <form method="post" class="form-horizontal panel panel-success">
               
                       
          <div class="panel-heading">
            <h3 align="center" class="panel-title">Request A Course</h3>
          </div>
          
      
            <div class="panel-body ">
                
                
                
                  <div  class="form-horizontal form-group col-lg-12 col-md-12 col-sm-12">
                      
                    <label  class="">Select Course Category</label>
                     <select class="form-control catlist" id="catlistxxz" name="CourseCategory" required title="Select Course Category" placeholder="Select Course Category" >
        <option selected disable>---Select One---</option>
        
    </select>
                    
                  </div>
              
                  <div style="margin-right:6px" class="form-horizontal form-group col-lg-12 col-md-12 col-sm-12">
      
    <label  class=""> Course Detail</label>
    <textarea class="form-control"  name="CourseDetail" title="Course Detail" placeholder="Course Detail" required></textarea>
    
  </div>
              
              
            </div>
            
            <div class="panel-footer form-inline">
                               <div class="form-group t ">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                  <button type="submit" name="courserequest" class="btn btn-success">Make Request</button>
                                </div>
                                </div> 
                                
                                <div class="form-group t">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <button type="reset" class="btn btn-primary">Clear</button>
    </div>
  </div> 
            </div>    
            
        </form>
  <!------------------------------------------->
  </div>
  
  
  
  
  
  
  </div>

  


</div>
    
    
    
           
           
       </div>      
            
            
            <?php
            
            
        }
        else if($_GET['loginas'] == 'Teacher'){
            
         ?>
         
        <div  id="teacher">
    
    
    <form method="post"  class="form-horizontal col-lg-6 panel panel-info">
               
               
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
      <input type="submit" name="addcourse" class="btn btn-success " value="Start Course">
    </div>
  </div>    
      
    
  <div class="form-group t pull-right clearafix">
    <div class="col-lg-3 col-md-5 col-sm-10">
      <button type="reset" class="btn btn-primary">Clear</button>
    </div>
  </div>      
      
      
  </div>


</form>
    
    
   <form  class="form-horizontal col-lg-6 panel panel-info" id="addcat" method="post" action="https://mws.ges.zuhrtech.com/account/__addnewcat__/Params">
  
  
  
  <div class="panel-heading" >
   <h4 align="center" class="panel-title">Add New Category</h4>
   </div>
      
      <div class="panel-body">
        
        
        
        
       
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
    <input type="hidden"  name="addedbyid" value="<?php echo $_SESSION['GES_SESSION']; ?>">
  </div>
  
  

        
        
        
      </div>
      <div class="panel-footer">
        <button type="reset" class="btn btn-default">Clear</button>
        <button type="submit" name="addcourse" class="btn btn-primary" >Add Category</button>
      </div>
   
  
  </form>
    
       </div>     
         <?php   
            
            
            
        }
            ?>
    
    
       
      
            
            
            
            
          </div>    
        </div>

               
                
                
                
                
                
                
                
                
                
                
                
                

                
                
                
                
                
                
                
                
                
                
                
                <script>
$(document).ready(function(e) {
 
getcoursees('catlistxxz');
 getcoursees('catlistxxc');
 getcoursees('catlistxxd');
 $("#addcat").submit(function(event) {
     event.preventDefault();
        addcatfunc(); 
        
     
 });
 
 
 
 

 
 
 
 

}); // ready


 
////////////////////////////////////////////////////


$("#seachcou").submit(function(event) {
 
  event.preventDefault();
  var f = $("#seachcou").serialize();
  var action = $("#seachcou").attr("action");
  var method = $("#seachcou").attr("method");
   console.log(f);
      
    $.ajax({
        method:$("#seachcou").attr("method"),
        url: $("#seachcou").attr("action"),
        data:$("#seachcou").serialize(),
        success: function(res)
        { 
                $("#tblsearch").html(res);
        }
    });
    
    
     
});
 
 


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
  
<?php 
$con = mysqli_connect("localhost","zuhrtech_GES","zuhrtech","zuhrtech_GES");
$rand = rand(333333,999999);
   
   if(isset($_POST['addcourse'])){
     
$xxx1 = "insert into course values(
'".$rand."',
'".$_POST['CourseTitle']."',
'".$_SESSION['GES_SESSION']."',
'".$_POST['CourseCategory']."',
'".$_POST['SubjectName']."',
'".$_POST['CourseFee']."',
'".$_POST['CourseDetail']."')";
$ccc1 = mysqli_query($con,$xxx1);             
            
$xxx2 = "insert into course_schedule values(
'".$rand."',
'".$_POST['TotalDays']."',
'".$_POST['DayOfClass']."',
'".$_POST['ClassTiming']."',
'".$rand."',
'".$_POST['StartDate']."'
)";


$ccc2 = mysqli_query($con,$xxx2);
if($ccc1 && $ccc2){
    echo '<script>$.notify("data aded to course", "success");</script>';
}else{
    
    echo '<script>$.notify("data not aded", "error");</script>';
    
}
    
        
       
        
    }
    
    
if(isset($_POST['courserequest'])){
    $st = 'waiting';
    $q = "insert into course_request values('".$rand."','".$_POST['CourseCategory']."','".$_POST['CourseDetail']."','".$_SESSION['GES_SESSION']."','".$st."')";


$r = mysqli_query($con,$q);
if($r){
    echo '<script>$.notify("Your Request Has Been Added.", "success");</script>';
}else{
    $e = mysqli_error($con);
    echo '<script>$.notify("data not aded '.$e.'", "error");</script>';
    
}
    
    
}    

if(isset($_GET['msg'])){
    echo '<script>$.notify("'.$_GET['msg'].'", "info");</script>';
}


?>  
</html>
