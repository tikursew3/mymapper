

<?php
    include('./includes/connect.php');
    @session_start();
    if(isset($_POST['login'])) {

        $username=$_POST['username'];
        $password=$_POST['password'];
        $select_query="SELECT * from `user_table` where
        username='$username'";
        $result=mysqli_query($conn,$select_query);
        $row_data=mysqli_fetch_assoc($result);
        $row_count=mysqli_num_rows($result);
       
        
        if($row_count > 0) {
            $_SESSION['username']=$username;
          if(password_verify($password, $row_data['password'])) {
            echo "<script>alert('login successful')</script>";
            echo "<script>window.open('list.php','_self')</script>";

            } else {
                echo "<script>alert('wrong password')</script>";
            }

        } else {
            echo "<script>alert('Invalid credentials')</script>";
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
        <h2 class="text-center">User Login</h2>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <form action="" class="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    
                    <div class="form-outline">
                        <label for="username" class="form-label"> Username</label>
                        <input type="text" name="username" id="username" 
                        class="form-control" placeholder="Enter your Username" 
                        required="required">
                    </div>
                    
                    <div class="form-outline">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" 
                        class="form-control" placeholder="Enter your Password" 
                        required="required">
                    </div>
                    
                    <div class="mt-4 pt-2">
                       
                        <input type="submit" value="Login" name="login" id="login" 
                        class="bg-info py-2 px-3 border-0">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account?
                            <a href="registration.php">Register</a></p>

                    </div>
                </form>
            </div>
        </div>
   </div>

   

   
     
</body>
</html>