<?php

include('./includes/connect.php');
  @session_start();
 
?>

<?php
       include('./includes/header.php');
     
?>
<body >
       <?php
              include('./includes/nav_bar.php');
       ?>


      <center> <h1> Welcome to Word Mapper  </h1> </center>

          <div style="margin-left: 10px !important;">
              <a type="button" id="show-all" class="btn btn-info text-white" href="index.php" style="text-decoration: none; "  >Show All</a>
             
              <?php
              include('./includes/connect.php');
                $filter_query = "SELECT distinct(Topic) from `master_data`";
                $execute_filter_query = mysqli_query($conn, $filter_query);
                while($single_filter = mysqli_fetch_assoc($execute_filter_query)) { 
                  $variable = $single_filter['Topic'];
                  ?>
                  <a type="button" id="<?php $variable ?>" class="btn btn-info text-white" href="index.php?filter=<?php  echo "$variable";  ?>" style="margin-left: 5px;"><?php echo "$variable"; ?></a>
                  <?php
                }
              ?>









          </div>
      
          
          <br><br>

        
           
          <div class="row" id="main-div">
                    <?php
                    include('./includes/connect.php');
                    if(isset($_GET['filter'])){
                      $filter = $_GET['filter'];
                      while($single_filter2 = mysqli_fetch_assoc($execute_filter_query)) { 
                        ?>
                      
                      <script>
                        document.getElementById(<?php echo $single_filter2['Topic'] ?> ).classList.remove('btn-secondary');
                        document.getElementById(<?php echo $single_filter2['Topic'] ?> ).classList.add('btn-info');

                      </script>

                     <?php
                      }
                      ?>
                      <script>
                        let anchor =  document.getElementById('<?php echo $filter?>');
                        anchor.classList.remove('btn-info');
                        anchor.classList.add('btn-secondary');
                      </script>
                      <?php

                      $select_query = "SELECT * FROM master_data where trim(Topic) = trim('$filter')";         
                       }
                    else{
                      ?>
                      <script>
                        document.getElementById('show-all').classList.remove('btn-info');
                        document.getElementById('show-all').classList.add('btn-secondary');
                      </script>
                      <?php
                      $select_query = "SELECT * FROM master_data";
                    }
                    $result_query = mysqli_query($conn, $select_query);
                    while($row_data = mysqli_fetch_assoc($result_query)) {
                        $id = $row_data['ID'];
                        $topic = $row_data['Topic'];
                        $english = $row_data['English'];
                        $telugu = $row_data['Telugu'];
                        $hindi = $row_data['Hindi'];
                        $image = $row_data['Image'];
                        $imagee = '<img src="data:image;base64,' .base64_encode($row_data['Image']). '" alt="Image" style="width: 300px; height: 300px; object-fit: contain;" >'; 
                        echo " <div class='col-md-4 mb-2 px-5'>                   
                                    <div class='flip-card'>
                                        <div class='flip-card-inner'>
                                            <div class='flip-card-front'>
                                                $imagee
                                            </div>
                                            <div class='flip-card-back'>
                                                <h3>$topic</h3>
                                                <h3>$english</h3>
                                                <h3>$telugu</h3>
                                                <h3>$hindi</h3>
                                            </div>
                                        </div>
                                    </div>                              
                                </div> ";
                        



                    }
                    ?>
                </div>
           
       
        
       
  <!-- bootstrap js link --> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
</html> 