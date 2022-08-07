a<?php

@session_start();

?>
 <?php
       include('includes/header.php');
     
?>
<body>
       <?php
              include('includes/nav_bar.php');
       ?>
    
    <br>   
    <center> <h1> Word Mapper For Fruits/Vegetables/Flower/Trees </h1> </center>   
          <div class="container " id="">                
              <form action="" method="POST" enctype="multipart/form-data">  
                <div class="container">   
                       <center><select name="Topic" style="font-size: xx-large; margin: 5;">
                       <?php
                            include('includes/connect.php');
                                  
                            $select_query = "Select * from `topic`"; 
                            $result_query = mysqli_query($conn, $select_query);
                            while ($row_data = mysqli_fetch_assoc($result_query)){
                                   $topic = $row_data['topic_name'];
                            echo "<option >$topic</option>";  

                            }
                            ?>    
                              
                       </select></center>
                      <br>
                   
                      <button class="btn btn-info mt-2"  style="font-size: large;" ><a href="addToCategory.php" >addTopic</a></button>   
                      
                    
                     <input class="form-control " style="font-size: xx-large;" type="text" placeholder="Enter English Name" name="EnglishName" required>
                     <input class="form-control" style="font-size: xx-large;" type="text" placeholder="Enter Telugu Name" name="TeluguName" >
                     <input class="form-control" style="font-size: xx-large;" type="text" placeholder="Enter Hindi Name" name="HindiName" >
                     
                     <input class="form-control"  style="font-size: xx-large;"  type="file" placeholder="Browse Image" name="image">
                     <button class="btn btn-primary mt-2" id="submit" style="font-size: xx-large;"  type="submit" name="submitMapper">Submit Mapper</button>    
                 </div>   
             </form>
          </div>
  
<?php
      // $connection = mysqli_connect("localhost","root","");
      include('includes/connect.php');
       //$db = mysqli_select_db($connection,'WordMapper');

       if(isset($_POST['submitMapper']))
       {
              $image        = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
              $topic     = $_POST['Topic'];
              $englishName  = $_POST['EnglishName'];
              $teluguName  = $_POST['TeluguName'];
              $hindiName  = $_POST['HindiName'];

              $query        = "INSERT INTO `master_data`(Topic, English, Telugu, Hindi, Image) 
                               VALUES ('$topic', '$englishName', '$teluguName', '$hindiName', '$image')";

              $query_run    = mysqli_query($conn,$query);

              if($query_run)
              {
                     echo '<script type="text/javascript"> alert("Data Inserted Succefully") </script>';
                     
              }
              else
              {
                     echo '<script type="text/javascript"> alert("Data Insertion Failed") </script>';
              }
       }
       
?>  
  
</body>

</html> 




