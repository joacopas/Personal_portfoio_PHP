<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


<!-- CORREGIR RUTAS DE FOTOSS -->
<?php   
$proyectos=array("Crea tu Spot","Comming soon");
$links=array("https://creatuspot.netlify.app/","#");
$foto=array("logo_cts.png","soon.gif");
 echo "<div class='projects'>";
    echo "<div class='container'>";
        echo "<h2 class='title'>Mis Proyectos</h2>";
        echo "<div class='row'>";
            for ($i=0; $i < 2; $i++) { 
                # code...
                echo "<div class='card col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3'>";
                    echo '<a href="'.$links[$i].'"><img src="../images/'.$foto[$i].'" class="card-img-top" alt="..." /></a>';
                        echo "<div class='card-body'>";
                            echo "<h5 class='card-title'>$proyectos[$i]</h5>";
                            echo "<p class='card-text'>E-commerce</p>";
                            echo '<a href="'.$links[$i].'" class="btn card-btn">Visit</a>';
                        echo "</div>";
                echo "</div>";
            }
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