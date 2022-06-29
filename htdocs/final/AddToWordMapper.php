 
 <?php
        $local = true; 
       
        //$docRoot = "http://" . $_SERVER['HTTP_HOST'];
        /*
        if ($local == false) {
            $docRoot = "http://" . $_SERVER['HTTP_HOST'] . "/~ics325su2207/";
        }
        */
        $path = $_SERVER['DOCUMENT_ROOT']; 
        if($local == false) {
            $path = $_SERVER["CONTEXT_DOCUMENT_ROOT"];  
        }
        $header= $path."/ICS499_Software_Engineering/finalProject/mymapper/htdocs/final/header.php"; 
        //$menu= $path."/includes/menu.php"; 
        include($header);
        //include($menu);
    ?>
    <br>   
    <center> <h1> Word Mapper For Fruits/Vegetables/Flower/Trees </h1> </center>   
          <div>                
                <form action="" method="POST" enctype="multipart/form-data">  
                <div class="container">   
                       <center><select name="Topic" style="font-size: xx-large;"></center>
                              <option value="Fruits">Fruits</option>
                              <option value="Vegetables">Vegetables</option>
                              <option value="Flowers">Flowers</option>
                              <option value="Trees">Trees</option>
                       </select>
                      <br>
                    
                     <input style="font-size: xx-large;" type="text" placeholder="Enter English Name" name="EnglishName" required>
                     <input style="font-size: xx-large;" type="text" placeholder="Enter Telugu Name" name="TeluguName" >
                     <input style="font-size: xx-large;" type="text" placeholder="Enter Hindi Name" name="HindiName" >
                     
                     <input style="font-size: xx-large;"  type="file" placeholder="Browse Image" name="image">
                     <button style="font-size: xx-large;"  type="submit" name="submitMapper">Submit Mapper</button>    
                 </div>   
             </form>
<?php
       $connection = mysqli_connect("localhost","root","");
       $db = mysqli_select_db($connection,'db_name');

       if(isset($_POST['submitMapper']))
       {
              $image        = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
              $topic     = $_POST['Topic'];
              $englishName  = $_POST['EnglishName'];
              $teluguName  = $_POST['TeluguName'];
              $hindiName  = $_POST['HindiName'];

              $query        = "INSERT INTO `master_data`(`Topic`, `English`, `Telugu`, `Hindi`, `Image`) 
                               VALUES ('$topic', '$englishName', '$teluguName', '$hindiName', '$image')";

              $query_run    = mysqli_query($connection,$query);

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
