<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4bacaee6a6.js" crossorigin="anonymous"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="shortcut icon"
      href="./images/monogram.png"
      type="image/x-icon"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Joaquin Pastor | Portfolio</title>
</head>
<body>
    <?php 
        include_once "header.php";
        echo "<nav class='navbar navbar-expand-lg navbar-dark'>";
        echo "<div class='container'>";
        
            echo "<h2 class='logo'>Mi Portfolio</h2>";
            echo "<div class='navbar-collapse collapse' id='snavbarSupportedContent'>";
                echo "<ul class='d-flex navbar-nav  mb-2 mb-lg-0'>";
                
                    foreach($nav as $item => $valor){
                    
                        echo "<li class='nav__item'><a href='./pages/$valor' >$item</a></li>";
                    }
            
                echo "</ul>";
            echo "</div>";
            echo "</div>";
        echo "</nav>";
    ?>  

   <?php
    echo "<main>";
        echo "<div class='intro'>";
            echo "<div class='container'>";
                echo "<h4>Hola, soy</h4>";
                echo "<h1>Joaquin <span>Pastor</span></h1>";
                echo "<h3>Estudiante de Analista de Sistemas <br />y Front-End Developer.</h3>";
                echo "<button class='btn' ><a href='./pages/nosotros.php'>Conoceme</a></button>";
            echo "</div>";
        echo "</div>";
    echo "</main>";

    
    
    $proyectos=array("Crea tu Spot","Comming soon");
    $links=array("https://creatuspot.netlify.app/","#");
     echo "<div class='projects'>";
        echo "<div class='container'>";
            echo "<h2 class='title'>Mis Proyectos</h2>";
            echo "<div class='row'>";
                for ($i=0; $i < 2; $i++) { 
                    # code...
                    echo "<div class='card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3'>";
                        echo '<a href="'.$links[$i].'"><img src="./images/logo_cts.png" class="card-img-top" alt="..." /></a>';
                            echo "<div class='card-body'>";
                                echo "<h5 class='card-title'>$proyectos[$i]</h5>";
                                echo "<p class='card-text'>E-commerce</p>";
                                echo '<a href="'.$links[$i].'" class="btn card-btn">Visit</a>';
                            echo "</div>";
                    echo "</div>";
                }
            echo "</div>";
            echo "<div  class=' allBtn'>";
                echo "<button class='btn'>Ver todos</button>";
            echo "</div>";
        echo "</div>";
    echo "</div>";

    ?>

    
    <?php 
        echo "<footer>";
            echo "<div class='social'>";
                include_once "footer.php";
                foreach ($media as $redes => $red) {
                    echo '<a href="'.$redes.'">'.$red.'</a>';
                }
            echo "</div>";
        echo "</footer>";
        
    ?>  
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>