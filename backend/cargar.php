<?php 
        
        include("conexion.php");
        if(isset($_POST["submit"])){
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false){
                $image = $_FILES['image']['tmp_name'];
                
                $imgContent = addslashes(file_get_contents($image));
                $titulo = $_POST['titulo'];
                
                $dataTime = date("Y-m-d H:i:s");
                
                //Insert image content into database
                $insert = $db->query("INSERT into galeria (image, created, titulo) VALUES ('$imgContent', '$dataTime', '$titulo')");
    
                $ruta = './images/' . $_FILES['image']['name'];
    


        if($insert){
            echo '<h2>Imagen cargada en la galeria exitosamente</h2>';
            move_uploaded_file($_FILES['image']['tmp_name'], $ruta);
        }else{
            echo "<div>
            '<h2>Fallo al cargar la imagen.</h2>'
            </div>";
        } 

    }else{
        echo '<h2>Tienes que seleccionar una imagen</h2>';
    }
}
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="backend.css">
    <link rel="icon" href="../img/logoChico.png" type="image/x-icon">
    <title>
        Subir imagenes
    </title>
</head>

    
<body>

    <form class="" action="cargar.php" id="subida-imagenes" method="post" enctype="multipart/form-data">
        <h2>Panel de control</h2>
        <div class="container">
            <label>Seleccionar imagen para subir</label>
            <input type="file" name="image"/>
            <input type="text" name="titulo" placeholder="Titulo" id="">
            <input type="submit" name="submit" value="UPLOAD"/>
        </div>
    </form>
















    <script>


    </script>
</body>




</html>