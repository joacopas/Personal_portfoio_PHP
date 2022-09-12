<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="shortcut icon"
      href="../images/monogram.png"
      type="image/x-icon"
    />
    <script src="https://kit.fontawesome.com/4bacaee6a6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Crea tu spot</title>
</head>
<body>
<?php 
     include_once "../header.php";
     echo "<nav class='navbar navbar-expand-lg navbar-dark'>";
     echo "<div class='container'>"; 
         echo "<h2 class='logo'>Mi Portfolio</h2>";
         echo "<div class='navbar-collapse collapse' id='snavbarSupportedContent'>";
             echo "<ul class='d-flex navbar-nav  mb-2 mb-lg-0'>";

                 foreach($nav as $item => $valor){
                
                     echo "<li class='nav__item'><a href=$valor >$item</a></li>";
                 }
             
             echo "</ul>";
         echo "</div>";
         echo "</div>";
     echo "</nav>";
?> 

<?php 
   
    echo "<div class='about' id='about'>";
        echo  "<div class='container'>";
            echo "<div class='main'>";
                echo "<div class='about-text' id='about-text'>";
                    echo "<h2 class='title'>About Me</h2>";
                    echo "<h5 class='aboutSubTitle'>Developer <span>& Student</span></h5>";
                    echo "<p class='text'>Soy Desarrollador Fornt-End, egresado de Coder House, y actualmente estoy cursando el primer ano de la carrea de Analista de Sisitemas en la Escual Da Vinci. Tambien soy entrenador de categorias Sub-14 y Sub-18 de hockey sobre cesped en el club C.A.S.A. de Padua. Me considero una persona creativa, perseverante. Debido a mi trababjo actual y a que tambien formo parte de un equipo de hockey, trabajo muy bien en equipo.</p>";
                    echo "<button class='btn' type='butn'>";
                    echo "<a href='../CV-Joaquin_Pastor .pdf' target='_blank'>My CV</a>";
                    echo "</button>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    echo "</div>";
?>
<?php 
        echo "<footer>";
            echo "<div class='social'>";
                include_once "../footer.php";
                foreach ($media as $redes => $red) {
                    echo '<a href="'.$redes.'">'.$red.'</a>';
                }
            echo "</div>";
        echo "</footer>";
        
?> 
</body>
</html>