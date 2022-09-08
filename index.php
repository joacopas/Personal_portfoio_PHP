<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Crea tu spot</title>
</head>
<body>
    <div>
        <?php 
        include_once "header.php";
        foreach($nav as $item => $valor){
            echo "<li><a href=$valor class=".'nav_item'.">$item</a></li>";
        }
        ?>  
    </div>
    
    <main>
        <!-- app-->
    </main>
        <!--- LLAMAR A OTRA SECCIONES MEDIANTE INCLUDE_ONCE -->
    <?php 
    include_once "footer.php";
    ?>  
</body>
</html>