
  <?php
  include("conexion.php");
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $titulo = $_POST['titulo'];

        echo $titulo;
        
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $db->query("INSERT into galeria (image, created, titulo) VALUES ('$imgContent', '$dataTime', '$titulo')");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
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
    <title>
        Subir imagenes
    </title>
</head>

    
<body>
    <form action="cargar.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <label>Seleccionar imagen para subir</label>
            <input type="file" name="image"/>
            <input type="text" name="titulo" placeholder="Titulo" id="">
            <input type="submit" name="submit" value="UPLOAD"/>
        </div>
    </form>
</body>

</html>