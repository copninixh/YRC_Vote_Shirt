<?php
    session_start();
    include("../connect/connect.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM vote WHERE v_id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location:../history_student.php?status=successdel");
        }else{
            header("location:../history_student.php?status=erroredit");
        }
    }
?>