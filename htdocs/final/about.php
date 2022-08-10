
<?php

include('./includes/connect.php');
  @session_start();
 
?>

<?php
       include('./includes/header.php');
     
?>
<style>
    .Name {
       color: darkgreen;
       text-align: center;

    }   
    .h2 {
       
       font-size: 2rem;
       display: block;
       margin-block-start: 0.83em;
       margin-inline-end: 00.83em;
       margin-inline-start: 0px;
       margin-inline-end: 0px;

    }
    .h6 {
       margin-bottom: 0.5rem;
       font-family: inherit;
       font-weight: 500;
       line-height: 1.2;
    }
    table {
       border-collapse: collapse;
       text-indent: initial;
       border-spacing: 2px;
    }
    .image {
       width: 200px;
       height: 200px;
       padding: 20px;
       object-fit: contain;
    }
    .description {
       padding: 0px;
       text-align: left;
    }
    .pro {
       padding: 15px;
       margin: 15px;
      
    }
</style>
<body >
       <?php
              include('./includes/nav_bar.php');
       ?>


<h2 class="Name">Description of the project </h2>
<p class="pro">
this project is developed by Menelik Tawye, Hassan Hassan, and Lin Cong. we are 
 Student at Metropolitan State University. </br>
 have you ever known a word in a native language?</br>
 and  wanted to know the equivalent word in English?</br>

our word mapper website can help you to achieve this barriers
 in english, telugu and hindi languages. </br>
 
</p>




<table class="table table-striped">



       <tbody>
              <tr>
                     <td>
                     <img class="image" src="images/profilePicture.jpg">    
                     </td>
                     <td>
                     <h2 class="Name">Menelik Tawye (Computer Science Student)</h2>
                     <h6 class="description">
                            Menelik is a computer science student in Metropolitan State University and
                            he is going to graduate in the Fall 2022. he is been working on different 
                            projects while learning computer science. this project is one of the main 
                            projects he have do so well. since this project is a group project, he is 
                            one of the main contributor to accomplish this project. other than this 
                            he also have done a full stack web development project entitled e-commerce 
                            website, a software for grocery store and tv remote controller and many more 
                            object oriented programming projects by java programming
                            language.
                            </h6>
                     </td>
                    
              </tr>
              <tr>
                     <td>
                     <img class="image" src="images/hassan_image.png">    
                     </td>
                     <td>
                     <h2 class="Name">Hassan Hassan (Computer Information Student)</h2>
                     <h6 class="description">
                     Hassan has been attending Metropolitan State university for the last 4 years. 
                     Currently in his Last semester. Working to complete his Bachelors in 
                     Computer Information. In his spare time he enjoys playing Basketball and 
                     loves to travel .
                            </h6>
                     </td>
                    
              </tr>
              <tr>
                     <td>
                     <img class="image" src="images/alin_image.jpeg">    
                     </td>
                     <td>
                     <h2 class="Name">Cong Lin (Computer Science Student)</h2>
                     <h6 class="description">
                     Cong Lin was born in 1999 at China. A senior student that studying in 
                     metropolitan state university now. He also likes coding as mainly working 
                     for basic info design and creative for the projects. The dream from 15 
                     years old to now is becoming a member of Honker Union. This is also set 
                     as his final destination.
                            </h6>
                     </td>
                    
              </tr>
       </tbody>


</table>

 <!-- bootstrap js link --> 
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>