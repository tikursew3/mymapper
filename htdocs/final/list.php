<?php
include('./includes/connect.php');
@session_start();
//$_SESSION['username']=$username;


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>WordMapper</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

     <!-- font awesome  link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
       
   

    <script>
        $( "#header-plugin" ).load( "https://vivinantony.github.io/header-plugin/", function() {
        $("a.back-to-link").attr("href", "https://thelittletechie.blogspot.com/2014/09/how-to-place-text-or-icons-inside.html#tlt")  
        });
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <style>   
        Body {  
        font-family: Calibri, Helvetica, sans-serif;  
        background-color: linen;  
        } 
        .navbar {
            width: 100%;
            background-color: #2980b9;
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

    </style>



  </head>
  <body>
   
    
    <script>
       $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'lfrtBip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            } );
        } ); 


    $(document).ready(function () {
        var table = $('#example').DataTable({
            scrollY: '200px',
            paging: false,
        });
    
        $('a.toggle-vis').on('click', function (e) {
            e.preventDefault();
    
            // Get the column API object
            var column = table.column($(this).attr('data-column'));
    
            // Toggle the visibility
            column.visible(!column.visible());
        });
    });





    </script>

<div class="navbar" align="center">
    <a class="active" href="index.php"><i class="fa fa-fw fa-home" style='font-size:100px;'></i>Home</a>
    <a href=""><i class="fa-solid fa-list" style='font-size:100px;'></i>List</a>
    <a href="count_report.php"><i class="fas fa-edit" style='font-size:100px;'></i>Report</a>
    <a href="about.php"><i class="  fas fa-id-card-alt" style='font-size:100px;'></i> About Us</a>
    <?php
          if(!isset($_SESSION['username'])) {
            echo "<a href='login1.php'><i class='fas fa-user-alt' style='font-size:100px;' ></i>Login</a>";
          } else {
            echo "<a href='logout.php'><i class='fas fa-user-alt' style='font-size:100px;' ></i>Logout</a>";
          }

        ?>
    
</div>




<div class="btn m-5  ">
    <a class="btn btn-success btn-lg p-5" 
    href="AddToWordMapper.php"> <i class="fa fa-plus" aria-hidden="true"></i></a>
</div >

   
<div class="btn m-3  ">



    Toggle column: <a class="toggle-vis" data-column="0">ID</a>
    - <a class="toggle-vis" data-column="1">Topic</a> - 
    <a class="toggle-vis" data-column="2">English</a> - 
    <a class="toggle-vis" data-column="3">Telugu</a> - 
    <a class="toggle-vis" data-column="4">Hindi</a> - 
    <a class="toggle-vis" data-column="5">Image</a> - 
    <a class="toggle-vis" data-column="6">Display</a> - 
    <a class="toggle-vis" data-column="7">Modify</a> - 
    <a class="toggle-vis" data-column="8">Delete</a> 

</div>



    <?php
        require_once("./includes/connect.php");
        $sql_query = "SELECT * FROM `master_data` ";
        $query_result = mysqli_query($conn,$sql_query);
       
    ?>

    

        <table id="example" class="display nowrap" style="width: 100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Topic</th>
                    <th>English</th>
                    <th>Telugu</th>
                    <th>Hindi</th>
                    <th>Image</th>
                    <th>Display</th>
                    <th>Modify</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            <?php
                      while($row = mysqli_fetch_assoc($query_result)) { ?>
                        <tr>
                            
                            <td> <?php echo $row['ID']; ?></td>
                            <td> <?php echo $row['Topic']; ?></td>
                            <td> <?php echo $row['English']; ?></td>
                            <td> <?php echo $row['Telugu']; ?></td>
                            <td> <?php echo $row['Hindi']; ?></td>
                            <td> <?php echo '<img src="data:image;base64,' .base64_encode($row['Image']). '" alt="Image" style="width: 25px; height: 25px; object-fit: contain;" >' ; ?></td>
                            <td>
                                <a class="btn btn-info btn-sm " 
                                 href="display.php?id=<?php echo $row['ID']; ?>">Display</a>
                                

                            </td>
                            <td>
                                 <a class="btn btn-warning btn-sm " 
                                 href="modify_data.php?id=<?php echo $row['ID']; ?>">Modify</a>
                                
                            </td>
                            <td>
                                <a  href="delete.php?id=<?php echo $row['ID']; ?>" class="btn btn-danger btn-sm ">Delete</a>
                                
                            </td>
                          
                        </tr>
                          <?php
                      }
                    ?>
            

            </tbody>

        </table>

</body>
</html>