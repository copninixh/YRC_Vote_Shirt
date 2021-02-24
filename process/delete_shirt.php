<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM candidate WHERE c_id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location:../manage_shirt.php?status=successdel");
        }else{
            header("location:../manage_shirt.php?status=erroredit");
        }
    }
?>