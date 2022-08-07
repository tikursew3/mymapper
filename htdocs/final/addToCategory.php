
<?php
    //include('connect.php');
   
    require_once('./includes/connect.php');
    if(isset($_POST['add_to_category'])) {
       $topic_name = $_POST['topic_name']; 
       $topic_image = $_FILES['topic_image']['name'];
       $temp_image = $_FILES['topic_image']['tmp_name'];

       if($topic_name == '' or $topic_image == '') {
            echo "<script>alert('please fill out the available fields')</script>";
            exit();
        } else {
            move_uploaded_file($temp_image, "./topic_images/$topic_image");
            $insert_topic = "INSERT INTO `topic`(topic_name, topic_image) 
            values('$topic_name', '$topic_image')";
             $result_query = mysqli_query($conn, $insert_topic);
             if($result_query) {
                echo "<script>alert('Topic inserted')</script>";
               // echo "<script>window.open('./AddToWordMapper.php','_self')</script>";
            }
        }

    }
 
    
?>

















<?php
       include('./includes/header.php');
     
?>
<body>
       <?php
              include('./includes/nav_bar.php');
       ?>

 <div class="container-fluid my-3">
        <h2 class="text-center">Add to Category</h2>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <form action="" class="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="form-outline">
                        <label for="topic_name" class="form-label">Topic Name</label>
                        <input type="text" name="topic_name" id="topic_name" 
                        class="form-control" placeholder="Enter Topic Name" 
                        required="required">
                    </div>

                    <div class="form-outline mb-4 w-50 m-auto">
                        <label for="topic_image" class="form-label">Topic image </label>
                        <input type="file" class="form-control" name="topic_image" 
                            id="topic_image" required="required">
                    </div>
                   
                   
                   
                    <div class="mt-4 pt-2">
                       
                        <input type="submit" name="add_to_category" id="add_to_category" 
                        class="bg-info py-2 px-3 border-0" value="Add Category">
                      


                    </div>
                </form>
            </div>
        </div>
   </div>