<?php
@session_start();
//including connect file
include('./includes/connect.php');
if(isset($_SESSION['username'])) {

$id  =$_GET['id'];
$query = "DELETE FROM master_data WHERE ID='$id'";

    $result = mysqli_query($conn,$query);

    if($result == true){
        echo "<script>alert('data has been deleted')</script>";
        echo "<script>window.open('./list.php','_self')</script>";

        //header("location:list.php");
    }

} else {
    echo "<script>window.open('./login1.php','_self')</script>";
}



    ?>


