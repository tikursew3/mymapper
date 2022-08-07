
<?php
include('./includes/connect.php');
@session_start();

?>

<?php
       include('includes/header.php');
     
?>
<body>
       <?php
              include('includes/nav_bar.php');
       ?>
       <br>

      <center> <h1 class="mt-3"> Count Report  </h1> </center>
       
  
    
    

<?php
    $filter_query = "SELECT distinct(Topic) from master_data";
    $execute_filter_query = mysqli_query($conn, $filter_query);
    $counts = [];
    $filters = [];
    while($single_filter = mysqli_fetch_assoc($execute_filter_query)) {
      $variable = $single_filter['Topic'];
      
     
      $sql1 = "SELECT COUNT(Topic) from master_data where trim(Topic) = '$variable'";
      $query_result1 = mysqli_query($conn,$sql1);
      $value = mysqli_fetch_assoc($query_result1);
      array_push($counts, $value["COUNT(Topic)"]);
      $dummy = $single_filter["Topic"];
      $dummy = str_replace('', '-', $dummy);
      array_push($filters, $dummy);
    }


?>
    



    <div id="bar-graph-location" class="mx-auto mt-5 mb-5"  style=" width:fit-content">
        <script>
 
              google.charts.load('current', {'packages':['Bar']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['',''],
                

                  <?php
                      for($i=0; $i < count($filters); $i++) { ?>
                        ['<?php echo $filters[$i] ?>', <?php echo $counts[$i] ?>],
                        <?php
                      }


                    ?>


                 
                ]);
                var options = {
                  chart: {
                    title: '',          
                  },
                  bars: 'vertical',
                  vAxis: {format: 'decimal'},
                  height: 300,
                  colors: ['#0000FF']
                };
                var chart = new google.charts.Bar(document.getElementById('bar-graph-location'));
                chart.draw(data, google.charts.Bar.convertOptions(options));
              }
        </script>
    </div>
    <div>
            <center>
                  <table id="myTable" class="mb-5 text-center w-75">
                        <thead>
                            <tr class="">
                              <th>Topic</th>
                              <th>Count</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                          
                          <?php
                          for ($i = 0; $i < sizeof($counts); $i++) {?>
                            <tr>
                            <td><?php echo $filters[$i] ?></td>
                            <td>
                            <?php
                              echo $counts[$i];
                            ?>
                            </td>
                            </tr>
                         <?php

                        }

                    ?>
                         



                                               
                        </tbody>
                    </table> 
                </center>   
    </div>


             





  </body>
</html> 
