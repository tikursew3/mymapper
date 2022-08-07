<?php
       include('./includes/header.php');
     
?>
<body>
       <?php
              include('./includes/nav_bar.php');
       ?>

      <center> <h1> Welcome to Word Mapper  </h1> </center>    
          
          <br>
            <div class="row">
                <?php
                include('./includes/connect.php');
                $search = $_POST['search'];

                $sql_query = "SELECT * from `master_data` where ID like '%$search%' or Topic like '%$search%'
                or English like '%$search%' or Telugu like '%$search%' or 
                Hindi like '%$search%' ";
                $result = mysqli_query($conn,$sql_query);

                $row_count=mysqli_num_rows($result);

                if($row_count > 0) {
                    while ($row_data = mysqli_fetch_assoc($result)) {
                        //echo $row['ID'];
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
                                <div id='flip-card-back' class='flip-card-back'>
                                    <h3>$topic</h3>
                                    <h3>$english</h3>
                                    <h3>$telugu</h3>
                                    <h3>$hindi</h3>
                                </div>
                            </div>
                        </div>                              
                    </div> ";

                    }

                } else { ?>

                    <p class="large fw-bold mt-2 pt-1 mb-0"><h4>There is 0 records</h4></p>
                       
                 <?php 
                }


                ?>
            </div>

<!-- bootstrap js link --> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
</html> 