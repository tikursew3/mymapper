<!DOCTYPE html>
<html>
<head>
  <title>WordMapper</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> 
<script>
$( "#header-plugin" ).load( "https://vivinantony.github.io/header-plugin/", function() {
  $("a.back-to-link").attr("href", "https://thelittletechie.blogspot.com/2014/09/how-to-place-text-or-icons-inside.html#tlt")  
});
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>  
<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: burlywood;  
} 
  .navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

/* Navbar links */
.navbar a {
  float: left;
  text-align: center;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

/* Navbar links on mouse-over */
.navbar a:hover {
  background-color: #000;
}

/* Current/active navbar link */
.active {
  background-color: #04AA6D;
}

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
} 
button:hover 
{   
       opacity: 0.6;   
}   
 
.container 
{   
       padding: 25px;   
       background-color: lightblue; 
       font-size: 100px; 
} 
button 
{   
       background-color: #4CAF50;   
       width: 100%;  
       color: orange;   
       padding: 15px;   
       margin: 10px 0px;   
       border: none;   
       cursor: pointer;   
} 
.calendar-text { 
  margin-top: .1em;
}
strong
{
    text-align: center;
}
  /* Button used to open the contact form - fixed at the bottom of the page */
  .open-button {
    background-color: #555;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    opacity: 0.8;
    position: fixed;
    bottom: 23px;
    right: 28px;
    width: 280px;
  }

  /* The popup form - hidden by default */
  .form-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 15px;
    border: 3px solid #f1f1f1;
    z-index: 9;
  }

  /* Add styles to the form container */
  .form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
  }

  /* Full-width input fields */
  .form-container input[type=text], .form-container input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
  }

  /* When the inputs get focus, do something */
  .form-container input[type=text]:focus, .form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Set a style for the submit/login button */
  .form-container .btn {
    background-color: #04AA6D;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom:10px;
    opacity: 0.8;
  }

  /* Add a red background color to the cancel button */
  .form-container .cancel {
    background-color: red;
  }

  /* Add some hover effects to buttons */
  .form-container .btn:hover, .open-button:hover {
    opacity: 1;
  }
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>

<body>
      <div class="navbar" align="center">
        <a class="active" href="index.php"><i class="fa fa-fw fa-home" style='font-size:100px;'></i>Home</a>
        <a href="loginPage.php"><i class="fas fa-user-alt" style='font-size:100px;' onclick="openForm()"></i> Admin Login</a>
        <a href="list.php"><i class="fas fa-edit" style='font-size:100px;'></i>List</a>
        <a href="#"><i class="  fas fa-id-card-alt" style='font-size:100px;'></i> About Us</a>
      </div>   

      <center> <h1> Welcome to Word Mapper  </h1> </center>
      
          <input id="myInput" type="text" placeholder="Search...">
          <br><br>
        
<?php
            require_once("connect.php");
            $sql_query = "SELECT * FROM `master_data` ";
            
            $order="asc";
              if($_GET['orderby']=="ID" && $_GET['$order']=="asc")
              {
                $order="desc";
              }
              if($_GET['orderby']=="Topic" && $_GET['order']=="asc")
              {
                $order="desc";
              }
              
              if($_GET['orderby']=="English" && $_GET['order']=="asc")
              {
                $order="desc";
              }
              if($_GET['orderby']=="Telugu" && $_GET['order']=="asc")
              {
                $order="desc";
              }
              if($_GET['orderby']=="Hindi" && $_GET['order']=="asc")
              {
                $order="desc";
              }

              if($_GET['orderby'])
              {
                $orderby="order by ".$_GET['orderby'];
              }
              if($_GET['order'])
              {
                $sort_order=$_GET['order'];
              }

              //$query_result = mysqli_query($conn,$sql_query.$orderby. " ".$sort_order."");
              $query_result = mysqli_query($conn,$sql_query.$orderby);
              

?>
                <table id="myTable">
                  <thead>
                      <tr>
                       <th><a href='?orderby=ID&order=".$order."'>ID</a></th>
                        <th><a href='?orderby=Topic&order=".$order."'>Topic</a></th>
                        <th><a href='?orderby=English&order=".$order."'>English</a></th>
                        <th><a href='?orderby=Telugu&order=".$order."'>Telugu</a></th>
                        <th><a href='?orderby=Hindi&order=".$order."'>Hindi</a></th>
                        <th>Image</th>
                      </tr>
                  </thead>
                  <tbody id="myTable">
                    
                    <?php
                      while($row = mysqli_fetch_assoc($query_result)) { ?>
                        <tr>
                              <td> <?php echo $row['ID']; ?></td>
                              <td> <?php echo $row['Topic']; ?></td>
                              <td> <?php echo $row['English']; ?></td>
                              <td> <?php echo $row['Telugu']; ?></td>
                              <td> <?php echo $row['Hindi']; ?></td>
                              <td> <?php echo '<img src="data:image;base64,' .base64_encode($row["Image"]). '" alt="Image" style="width: 25px; height: 25px;" >' ; ?></td>
                        </tr>
                          <?php
                      }
                    ?>
                      
                  </tbody>


                </table>        




                <div class="form-popup" id="myForm">
            <form onsubmit="return validateform()" class="form-container" name="login">
              <h1>Login</h1>

              <label for="username"><b>Username</b></label>
              <input type="text" placeholder="Enter username" name="username">

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="pwd">

              <button type="submit" class="btn" onclick="return(validateform())">Login</button>
              <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
          </div>  

  <script >

      function openForm() {
        document.getElementById("myForm").style.display = "block";
      }

      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }
        function validateform()
        {  
            var name = document.login.username.value;  
            var pass = document.login.pwd.value;  
          
            if (name == null || name == "")
            {  
                alert("Name can't be blank");  
                return false;  
            }
            else if(pass == null || pass == "")
            {  
                alert("Password can't be blank");  
                return false;  
            }
            else if(name === "admin" && pass === "password") 
            {
                setTimeout(function() {window.location = "AdminPage.php" });
            }  

            else
            { 
                alert ("Invalid username or password");

                return false;
            }
        } 
  </script>




  </body>
</html> 

