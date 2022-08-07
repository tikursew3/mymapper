
<?php
include('./includers/connect.php');
@session_start();
//$_SESSION['username']=$username;


?>

<?php
       include('./includes/header.php');
     
?>
<body>
       <?php
              include('./includes/nav_bar.php');
       ?>
    <br>   
    <center> <h1> Word Mapper For Fruits/Vegetables/Flower/Trees </h1> </center>   

    <?php 

        require_once('./includes/connect.php');

        $id = $_GET['id'];

        $query = "SELECT * FROM master_data WHERE ID='$id'";

        $result = mysqli_query($conn,$query);

        $row = mysqli_fetch_assoc($result);

    ?>

            <div>                
                <form id="myform" action="" method="POST" enctype="multipart/form-data">  
                    <div class="container">   
                        
                       
                        <input type="hidden" value="<?php echo $row['ID']; ?>" name="id">
                        <div>
                        <?php echo '<img class="form-control " src="data:image;base64,' .base64_encode($row['Image']). '" alt="Image" style="width: 150px; height: 150px;object-fit: contain;" >' ; ?>
                           
                        </div>
                        <input class="form-control " style="font-size: xx-large;" type="text" value="<?php echo $row['Topic']; ?>"   name="Topic">
                        <input class="form-control " style="font-size: xx-large;" type="text" value="<?php echo $row['English']; ?>"   name="EnglishName">
                        <input class="form-control " style="font-size: xx-large;" type="text" value="<?php echo $row['Telugu']; ?>"  name="TeluguName" >
                        <input class="form-control " style="font-size: xx-large;" type="text" value="<?php echo $row['Hindi']; ?>" name="HindiName" >
                        <div>
                        <a class="btn btn-success btn-lg " name="returnToList"
                                 href="list.php">Return</a>
                        </div>
                        


                        
                    </div>   
                </form>
            </div>
        <?php
            if(isset($_POST['returnToList'])) {
              


                header("location:list.php"); 
                     
        
              
            }


        ?>






</body>
</html>


 

          