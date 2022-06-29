<!DOCTYPE html>
<html>
<head>
<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 

</head>



<body>
<form action="" class="form" method="POST">
	
	<h1>create a new account</h1>
    
	
    <div>
        <div class="">
            <input style="font-size: large;" type="text" name="username" value="" placeholder="enter a username" autocomplete="off" required />
          </div>        
          <div class="">
            <input style="font-size: large;" type="password" name="passwd" value="" placeholder="enter a password" autocomplete="off" required />       
           </div>              
           <div class="">
            <input style="font-size: large;" type="password" name="confirm_password" value="" placeholder="confirm your password" autocomplete="off" required />
            </div>        
            <div class="">          
            <button style="font-size: large;" type="submit" name="registerBtn" value="create account">create account</button> 
            <button style="font-size: large;" type="button" onclick="login()">login</button>
            </div>

	</div>
</form>
     </body>
</html>
<script>
    function login() {
        window.location = "loginPage.php";
    }
</script>

<?php 
    // include our connect script 
    require_once("connect.php"); 
   

    
    // check to see if there is a user already logged in, if so redirect them 
    
    //session_start(); 
    //if (isset($_SESSION['username']) && isset($_SESSION['userid'])) {
       // header("Location: index.php");  // redirect the user to the home page
    //}

    if (isset($_POST['registerBtn'])) { 
        // get all of the form data 

        $username = $_POST['username'];  
        $password = $_POST['passwd']; 
        $passwd_again = $_POST['confirm_password']; 
        
           
        // verify all the required form data was entered
        if ($username != "" && $password != "" && $passwd_again != "") {
            // make sure the two passwords match
            if ($password === $passwd_again) {
                // query the database to see if the username is taken
                $sql_query = "SELECT * FROM `users` WHERE username='$username'";
                $query = mysqli_query($conn,$sql_query);

                if (mysqli_num_rows($query) == 0){
                    // create and format some variables for the database
                    $username = $username;
                    $password = md5($password);
                    $date_created = time();
                    $last_login = 0;
                    $status = 1;
                    $sql_query1 = "INSERT INTO `users`(`username`, `password`, `date_created`, `last_login`, `status`) 
                     VALUES ('$username', '$password', '$date_created', '$last_login', '$status')";
                    $query_run = mysqli_query($conn,$sql_query1);
                    if($query_run)
                    {
                        echo '<script type="text/javascript"> alert("Data Inserted Succefully") </script>';
                        $success = true;
                    }
                    else
                    {
                        echo '<script type="text/javascript"> alert("Data Insertion Failed") </script>';
                    }

                    // verify the user's account was created
                    $sql_query2 = "SELECT * FROM users WHERE username='$username'";
                    $quequery_run1 = mysqli_query($conn,$sql_query2);
                    if (mysqli_num_rows($quequery_run1) == 1){
                    
                        $success = true;
                    }
                    else {
                        $error_msg = 'An error occurred and your account was not created.';
                    }
                }
                else {
                    $error_msg = 'The username <i>'.$username.'</i> is already taken. Please use another.';
                }


            }
            else {
                $error_msg = 'Your passwords did not match.';
            }
           
                    
        }
        else {
            $error_msg = 'Please fill out all required fields.';
        }
        mysqli_close($conn);
        
}
?>
<div class="">
        <?php
            // check to see if the user successfully created an account
            if (isset($success) && $success == true){
                echo '<p color="green">Yay!! Your account has been created. <a href="loginPage.php">Click here</a> to login!<p>';
            }
            // check to see if the error message is set, if so display it
            else if (isset($error_msg))
                echo '<p color="red">'.$error_msg.'</p>';
            
        ?>
	</div>






