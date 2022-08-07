<?php

@session_start();

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
    if(isset($_SESSION['username'])) {

        require_once('./includes/connect.php');
       // $_SESSION['username']=$username;

        $id = $_GET['id'];

        $query = "SELECT * FROM master_data WHERE ID='$id'";

        $result = mysqli_query($conn,$query);

        $row = mysqli_fetch_assoc($result);

    ?>

            <div class="">                
                <form id="myform" action="" method="POST" enctype="multipart/form-data">  
                    <div class="container">   
                        
                       
                        <input class="form-control" type="hidden" value="<?php echo $row['ID']; ?>" name="id">
                        <div>
                        <?php echo '<img class="form-control" src="data:image;base64,' .base64_encode($row['Image']). '" alt="Image" style="width: 100px; height: 100px; object-fit: contain;" >' ; ?>
                        <input class="form-control"  style="font-size: xx-large;"  type="file" placeholder="Browse Image" name="image">
                           
                        </div>
                        <input class="form-control" style="font-size: xx-large;" type="text" value="<?php echo $row['Topic']; ?>"   name="Topic">
                        <input class="form-control" style="font-size: xx-large;" type="text" value="<?php echo $row['English']; ?>"   name="EnglishName">
                        <input class="form-control" style="font-size: xx-large;" type="text" value="<?php echo $row['Telugu']; ?>"  name="TeluguName" >
                        <input class="form-control" style="font-size: xx-large;" type="text" value="<?php echo $row['Hindi']; ?>" name="HindiName" >
                       
                        <div>
                        <button class="form-control" id="btn" style="font-size: xx-large;"  type="submit" name="submitUpdate">Submit Update</button> 

                       
                           <a class="btn btn-success btn-lg " name="returnToList"
                                 href="list.php">Return</a>
                           
                        
                        </div>   
                    </div>   
                </form>
            </div>
        <?php
        require_once('./includes/connect.php');
            if(isset($_POST['submitUpdate'])) {
               
                $image    = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
              
                
                $topic     = $_POST['Topic'];
                $englishName  = $_POST['EnglishName'];
                $teluguName  = $_POST['TeluguName'];
                $hindiName  = $_POST['HindiName'];

                $query = "update master_data set Topic='$topic', English='$englishName',
                Telugu='$teluguName', Hindi='$hindiName', Image = '$image' where ID=$id";

                $query_run    = mysqli_query($conn,$query);
                
            
            if($query_run)
              {
                echo '<script> alert("Data Updated Succefully") </script>';
                //header("location:list.php");
                echo "<script>window.open('./list.php','_self')</script>";
                     
              }
              else
              {
                     echo '<script type="text/javascript"> alert("Data Update Failed") </script>';
              }
            }

          

        ?>

        <?php
        
        } else {
            echo "<script>window.open('./login1.php','_self')</script>";
        }
    

    ?>



        <?php
          if(isset($_POST['returnToList'])) {
            header("location:list.php"); 

        }
        ?>
        






</body>
</html>



 

          