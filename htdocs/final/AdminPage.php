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
  background-color: pink;  
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
       
        
        <a href="AddToWordMapper.php"><i class="fa fa-fw fa-plus" style='font-size:100px; color:white'></i> Add</a>

        <a href="#"><i class="fa fas fa-file fa-update-2x" style='font-size:100px; color:white'></i> Update</a>
        <a href="#"><i class="fa fas fa-minus fa-delete-2x" style='font-size:100px; color:white'></i> Delete</a>
        

        <a href="#"><i class="  fas fa-id-card-alt" style='font-size:100px; color:white'></i> About Us</a>
        <a href="index.php"><i class="fas fa-power-off" style='font-size:100px; color:white'></i>Logout</a>
      </div>   

      <center> <h1> Word Mapper For Fruits/Vegetables/Flower/Trees </h1> </center>

                  <div style="margin-top: 100px; text-align: center"> 

                    <span class="fa-stack fa-3x">
                    <a href="FruitsMenu.html"><i class="fa fa-apple-alt fa-stack-2x" style='font-size:200px;color:red'></i></a>
                    <h4 style="margin-top: 90px"><br>&nbsp;&nbsp;&nbsp;Fruits</h4>
                    </span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa-stack fa-3x">
                    <a href="VegetablesMenu.html"><i class="fa fas fa-carrot fa-stack-2x" style='font-size:200px;color:red'></i></a>
                    <h4 style="margin-top: 90px"><br>Vegetables</h4>
                    </span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa-stack fa-3x">
                    <a href="FlowerMenu.html"><i class="fa fas fa-seedling fa-stack-2x" style='font-size:200px;color:red'></i></a>
                    <h4 style="margin-top: 90px"><br>&nbsp;&nbsp;&nbsp;Flowers</h4>
                    </span>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="fa-stack fa-3x">
                    <a href="TreeMenu.html"><i class="fa fas fa-cannabis fa-stack-2x"style='font-size:200px;color:red'></i></a>
                    <h4 style="margin-top: 90px"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trees</h4>
                    </span>
                  </div>  
               
      </body>     
      </html>
