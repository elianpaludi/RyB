<?php
  include("./backend/conexion.php");

    $sql = "SELECT * FROM galeria";
    $result = mysqli_query($db, $sql);

    // print_r($result);
    // $data = fetch_assoc($result);

    if(!$result){
        echo "Error al ejecutar la consulta";
    }

    if(mysqli_num_rows($result) == 0){
        echo "No hay registros";
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/galeria/styleGaleria.css">
    <link rel="stylesheet" href="./styles/global.css">
    <link rel="icon" href="img/logoChico.png" type="image/x-icon">
    <title>R&D Constructora</title>
</head>
<body>
    

<header>
        <nav>
            <ul class="no-responsive">
                <li><i class="fas fa-home"></i><a href="index.php">Inicio</a></li>
                <li><i class="fas fa-images"></i><a href="galeria.php">Galeria</a></li>
                <li><i class="fas fa-briefcase"></i></i><a href="nosotros.php">Sobre nosotros</a></li>
                <li><i class="fas fa-wrench"></i></i></i><a href="ubicacion.php">Donde encontrarnos</a></li>
            </ul>

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="imgOne"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="imgTwo"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="imgThree"></div>
                    </div>
                    <div class="carousel-item">
                        <div class="imgFour"></div>
                    </div>
                </div>
            </div>
        </nav>
</header>

<main>

    <h2 class="title">Imagenes de nuestros trabajos</h2>
    
    
    <section class="galeria">
        <?php
            while($fila = mysqli_fetch_assoc($result)){
                echo "<div class='img-container'>";
                echo "<img  class='imagen' src='data:image/jpg;base64,".base64_encode($fila['image'])."' alt='".$fila['titulo']."'>";
                echo "<h5>".$fila['id'] .$fila['titulo']."</h5>";
                echo "</div>";
            }
        ?>
    </section>
</main>


<footer>
        <div class="footer-container_item">
            <i class="fas fa-hotel"></i>
            <div>
                <p>Pasaje Borgoño 127 A </p>
                <p>Remigio Silva – Chiclayo - PERÚ</p>                 
            </div>
        </div>


        <div class="footer-container_item">
        <i class="fas fa-clock"></i>
            <div>
                <p>Lunes a Sabados</p>
                <p>07:30 AM - 05:30 PM</p>
            </div>
        </div>


        <div class="footer-container_item">
        <i class="fas fa-phone-volume"></i>
            <div>
                <p>Teléfono</p>
                <p>+51 944683017 – +51 935811379</p>
            </div>
        </div>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>