<?php
    //include('connect.php');
   
    require_once('./includes/connect.php');
    if(isset($_POST['user_register'])) {
       $first_name = $_POST['first_name']; 
       $last_name = $_POST['last_name']; 
       $username = $_POST['username']; 
       $email = $_POST['email']; 
       $password = $_POST['password']; 
       $hash_password = password_hash($password, PASSWORD_DEFAULT);
       $confirm_password = $_POST['confirm_password']; 
      
       $sql_query = "SELECT * FROM `user_table` WHERE username = '$username' OR 
       email = '$email'";
        $result = mysqli_query($conn,$sql_query);

        $row = mysqli_fetch_assoc($result);

        if($row > 0) {
            echo "<script> alert('Username or Email has already taken'); </script>";
        
        }
        else {
            if ($password == $confirm_password) {
                $query = "INSERT INTO `user_table`(first_name,last_name,username,email,password) 
                values('$first_name', '$last_name', '$username', '$email', '$hash_password')";
                $result = mysqli_query($conn,$query);
                if($result) {
                    echo "<script> alert('Registeration Successfull'); </script>";
                    echo "<script>window.open('./index.php','_self')</script>";
                }
               
            }
            else {
                echo "<script> alert('Password doesn't match'); </script>";
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
        <h2 class="text-center">New User Registeration</h2>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <form action="" class="" method="POST" autocomplete="off" enctype="multipart/form-data">
                    <div class="form-outline">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first_name" 
                        class="form-control" placeholder="Enter your First Name" 
                        required="required">
                    </div>
                    <div class="form-outline">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" id="last_name" 
                        class="form-control" placeholder="Enter your Last Name" 
                        required="required">
                    </div>
                    <div class="form-outline">
                        <label for="username" class="form-label"> Username</label>
                        <input type="text" name="username" id="username" 
                        class="form-control" placeholder="Enter your Username" 
                        required="required">
                    </div>
                    <div class="form-outline">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" 
                        class="form-control" placeholder="Enter your Email" 
                        required="required">
                    </div>
                    <div class="form-outline">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" 
                        class="form-control" placeholder="Enter your Password" 
                        required="required">
                    </div>
                    <div class="form-outline">
                        <label for="confirm_password" class="form-label">Confirm Password </label>
                        <input type="password" name="confirm_password" id="confirm_password" 
                        class="form-control" placeholder="Confirm your Password" 
                        required="required">
                    </div>
                    <div class="mt-4 pt-2">
                       
                        <input type="submit" name="user_register" id="user_register" 
                        class="bg-info py-2 px-3 border-0" value="Register">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account?
                            <a href="login1.php">Login</a></p>



                    </div>
                </form>
            </div>
        </div>
   </div>

   
     
</body>
</html>