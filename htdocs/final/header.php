<html>
 <head>  
 <meta name="viewport" content="width=device-width, initial-scale=1">  
 <title> MapperEntry </title> 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> 
 <link rel="stylesheet" href="style.css">
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
 </head>

<body>
<div class="navbar" align="center">
      <a class="active" href="index.php"><i class="fa fa-fw fa-home" style='font-size:100px;'></i>Home</a>
      <a href="FruitsMenu.html"><i class="fas fa-apple-alt" style='font-size:100px;'></i>Fruits</a>
      <a href="VegetablesMenu.html"><i class="fas fa-carrot" style='font-size:100px;'></i> Vegetables</a>
      <a href="FlowerMenu.html"><i class="fas fa-seedling" style='font-size:100px;'></i>Flower</a>
      <a href="TreeMenu.html"><i class="fas fa-cannabis" style='font-size:100px;'></i>Trees</a>
      <a href="Index.php"><i class="fas fa-power-off" style='font-size:100px;'></i>Logout</a>
    </div>  