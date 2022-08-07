
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-xl ">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar navbar-nav  collapse navbar-collapse justify-content-start" id="navbarSupportedContent">
          <a class="nav-link m-3" aria-current="page" href="./index.php"><i class="fa fa-fw fa-home" style='font-size:100px; '></i><i><span>Home</span></i></a>
         
              <a class="nav-link m-3" aria-current="page" href="./list.php"><i class="fa-solid fa-list" style='font-size:100px;'></i>List</a>
              
              <a class="nav-link m-3" aria-current="page" href="./count_report.php"><i class="fas fa-edit" style='font-size:100px;'></i>Report</a>
              <a class="nav-link m-3" aria-current="page" href="./about.php"><i class="  fas fa-id-card-alt" style='font-size:100px;'></i> About Us</a>
              <?php
            if(!isset($_SESSION['username'])) {
              echo "<a  class='nav-link m-3' href='login1.php'><i class='fas fa-user-alt m-2' style='font-size:100px;' ></i>Login</a>";
            } else {
              echo "<a class='nav-link m-3' href='logout.php'><i class='fas fa-user-alt m-2' style='font-size:100px;' ></i>Logout</a>";
            }
            ?>
        </div>
        <form  class="d-block p-2 mx-5 " action="search.php" method="POST" >
          <input class="form-control m-2" type="search"  placeholder="Search Hear..." aria-label="Search" name="search" > 
         
          <input type="submit" value="Search" class="btn btn-primary m-2" name="search_data">
          
        </form>   
      </div>
    </nav>
  </div>  