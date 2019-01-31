
<?php
session_start();
$con = mysqli_connect("localhost","zuhrtech_GES","zuhrtech","zuhrtech_GES");
$rand = rand(333333,999999);
   


    if(isset($_POST['searchcourse'])){
        $search = "SELECT course.*, course_schedule.* FROM course, course_schedule WHERE course.id = course_schedule.course_id AND course.cat_id = '".$_POST['CourseCategory']."' ";
        $r = mysqli_query($con,$search);   
        if(mysqli_affected_rows($con) !=0){
         
          while ($row = mysqli_fetch_assoc($r)) {
       
       
       
    
               
             echo '<div>            
              <tr class="form-inline">
             <th class="container-fluid" colspan="5">
                                          <strong>Name :</strong>
                                          <small>
                                                '.$row['name'].'
                                        </small>
                                        </th>
                                        </tr>
                                        <tr>
                                        <td colspan="5">
        <div class="col-lg-6 col-md-6 col-sm-12">
                   <strong>Free : </strong> $'.$row['fee'].' <br>
                   <strong>Start Date : </strong> '.$row['start_date'].' <br>
                   <strong>Days : </strong> '.$row['days'].' <br>
                   <strong>Timing : </strong> '.$row['timing'].' <br>
                   
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <strong>Subject :</strong>'.$row['subject_name'].'<br>
             <a class="btn btn-info col-lg-12" href="https://www.ges.zuhrtech.com/function.php?inrollme='.$_SESSION['GES_SESSION'].'&course='.$row['course_id'].'" >
             Enroll in thi course
             </a>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
        <strong>Description:</strong><br>
            <div class="row">
       '.$row['detail'].'
       </div>
       </div>
    </td>
  </tr>
        </div>';
               
          }     
               
               
               
               
               
        }else{
           echo "No Match Found.";
           
        }
   
   
   
   
    }
    
    
    
    if(isset($_GET['inrollme'])){
        
        
        
           $q = "insert into enrollment values('".$rand."','".$_GET['inrollme']."','".$_GET['course']."','waiting')";


$r = mysqli_query($con,$q);
if($r){
    echo '<script> window.location.assign("https://www.ges.zuhrtech.com/dashboard.php?action=login&uname=na&type=Both&uid='.$_GET['inrollme'].'&loginas=Student&msg=Enrollment successful");</script>';
}else{
    echo '<script> window.location.assign("https://www.ges.zuhrtech.com/dashboard.php?action=login&uname=na&type=Both&uid='.$_GET['inrollme'].'&loginas=Student&msg=Enrollment Unsuccessful ");</script>';
    
}
        
    }
    
    
function sendmail(){
    $to  = 'aidan@example.com' . ', '; // note the comma
$to .= 'wez@example.com';

// subject
$subject = 'Birthday Reminders for August';

// message
$message = '
  <p>Here are the birthdays upcoming in August!</p>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: Birthday Reminder <birthday@example.com>' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);
    
}    
    
    
?>
