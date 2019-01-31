<?php
error_reporting();
session_start();




if(isset($_GET['action'])){

    switch($_GET['action'])
    {
        
        case"login":
        $_SESSION['GES_SESSION'] = $_GET['uid'];
        $_SESSION['uname']=$_GET['uname'];
        $_SESSION['type']=$_GET['type'];
        $_SESSION['loginas']=$_GET['loginas'];
        break;
        
        case"logout":
        
        $_SESSION['GES_SESSION'] = null;
        session_destroy();
         session_unset();
       redirect('https://www.ges.zuhrtech.com');
        break;
        
        case"":
        break;
        
    }
    
}


if(!isset($_SESSION['GES_SESSION'])){
    redirect('https://www.ges.zuhrtech.com');
}


function redirect($path){
    echo'<script> window.location.assign("'.$path.'");</script>';
}


?>