<!DOCTYPE html>
<html>
<title>FlowerMapper</title>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title> Admin Page </title> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> 
  <script>
  $( "#header-plugin" ).load( "https://vivinantony.github.io/header-plugin/", function() {
    $("a.back-to-link").attr("href", "https://thelittletechie.blogspot.com/2014/09/how-to-place-text-or-icons-inside.html#tlt")  
  });
  </script>
  <script type = "text/javascript" >  
      function preventBack() { window.history.forward(); }  
      setTimeout("preventBack()", 0);  
      window.onunload = function () { null };  
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
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: ghostwhite;  
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
          <a class="active" href="AdminPage.php"><i class="fa fa-fw fa-home" style='font-size:100px;'></i>Home</a>
          <a href="AddToWordMapper.php"><i class="fa fa-fw fa-plus" style='font-size:100px;'></i> Add</a>
          <a href="FruitsMenu.html"><i class="fas fa-apple-alt" style='font-size:100px;'></i>Fruits</a>
          <a href="VegetablesMenu.html"><i class="fas fa-carrot" style='font-size:100px;'></i> Vegetables</a>
          <a href="FlowerMenu.html"><i class="fas fa-seedling" style='font-size:100px;'></i>Flower</a>
          <a href="TreeMenu.html"><i class="fas fa-cannabis" style='font-size:100px;'></i>Trees</a>
          <a href="Index.html"><i class="fas fa-power-off" style='font-size:100px;'></i>Logout</a>
        </div>   
        <br>
    <input id="myInput" type="text" placeholder="Search...">
    <br><br>
    <table id="myTable">
          <thead>
                <tr>
                    <th onclick="sortTable(0)"><a href="#">ID</a></th>
                    <th onclick="sortTable(1)"><a href="#">Category</a></th>
                    <th onclick="sortTable(2)"><a href="#">English Name</a></th>
                    <th>Image</th>
                </tr>
          </thead>
          <tbody id="myTable">
          <tr>
          <?php
                $servername   = "localhost";
                $username     = "root"; 
                $password     = "";
                $dbname       = "db_name";
 
                // Creating connection
                $conn = new mysqli($servername, $username, $password, $dbname);
 
                // Checking connection
                if ($conn->connect_error)
                {
                      die("Connection failed:". $conn->connect_error);
                }     

                $sql = "SELECT * FROM wordmapper WHERE category = 'Flowers'";
                $result = $conn->query($sql);

                if(!$result)
                {
                      die("Invalid Query:".$conn->connect_error);
                }

                //output data of each row
                while($row = $result->fetch_assoc())
                {
                      ?>
                      <td> <?php echo $row['ID']; ?></td>
                      <td> <?php echo $row['category']; ?></td>
                      <td> <?php echo $row['EnglishName']; ?></td>
                      <td> <?php echo '<img src="data:image;base64,' .base64_encode($row["Image"]). '" alt="Image" style="width: 25px; height: 25px;" >' ; ?></td>
                    </tr>
                      <?php
                }
          ?>
</tbody>
</table>
<script >
function sortTable(n) 
{
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  
  //Set the sorting direction to ascending:
  dir = "asc"; 
  
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
</body>
</html>