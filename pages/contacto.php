
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4bacaee6a6.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Crea tu spot</title>
</head>
<body>
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel">
            Confirmacion de datos
          </h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Sus datos son:</p>
          <p id="datos"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="liveToastBtn">
            OK
          </button>
        </div>
      </div>
    </div>
  </div>
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
$label=array();

$label["name"]="Nombre";
$label["lastName"]="Apellido";
$label["cell"]="Telefono";
$label["email"]="Email";
/*$label["Consulta"]="Consultame";*/

echo "<form action='' class='contact-me' id='contactForm'>";
        echo "<div class='container mt-3'>";
            
            foreach ($label as $subtitulo => $leyenda) {
                echo "<div class='mb-3 mt-3'>";
                    echo "<label for='$leyenda' class='form-label float-start'>$leyenda</label>";
                    echo "<input type='$leyenda' class='form-control' id='$leyenda' placeholder='$leyenda'/>";
                echo "</div>";
            }
            echo "<div class='mb-3>";
                echo "<label for='textArea' class='form-label float-start'>Consultame</label>";
                echo "<textarea class='form-control' id='textArea' rows='3' placeholder='Dejame un mensaje'></textarea>";
            echo "</div>";  
            echo "<input class='btn formBtn mt-5 'type='submit' value='Enviar' />";
        echo "</div>";  
echo "</form>";
    

?>  
 <form class="contact-me" id="contactForm">
    <div class="container mt-3">
      <div class="mb-3 mt-3">
        <label for="name" class="form-label float-start">Nombre</label>
        <input type="name" class="form-control" id="name" placeholder="Nombre Apellido" />
      </div>
      <div class="mb-3 mt-3">
        <label for="email" class="form-label float-start">Email</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com" />
      </div>
      <div class="mb-5">
        <label for="textArea" class="form-label float-start">Preguntanos</label>
        <textarea class="form-control" id="textArea" rows="3"></textarea>
      </div>
      <input class="btn  formBtn" type="submit" value="Enviar" />
    </div>
  </form>

<!-- FOOTER -->

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

<script src="../scripts/contacto.js"></script>

</body>
</html>
