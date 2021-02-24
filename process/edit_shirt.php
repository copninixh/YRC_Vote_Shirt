<?php 
    session_start();
    include("../connect/connect.php");
    if($_POST['c_id'] == ''){
        header("location:../manage-candidate.php?status=notfoundid");
    }
  
    $c_number = $_POST['c_number'];

    $c_id = $_POST['c_id'];
    

    $sql = "UPDATE candidate SET
 
    c_number = '$c_number'
    
   WHERE c_id = '$c_id'";

   $result = mysqli_query($conn,$sql);
   if($result){
        header("location:../manage_shirt.php?status=successedit");
   }else{
        header("location:../manage_shirt.php?status=erroredit");
   }
?>