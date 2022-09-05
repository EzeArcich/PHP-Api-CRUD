<?php
include("conexion.php");
$con=conectar();

$id=$_GET['id'];
$sql="SELECT * FROM usuarios WHERE id='$id'";
$query=mysqli_query($con, $sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css
">
</head>
<body>
    <div class="container mt-5">
        <div class="row ">
            <div class="col-md-5">
                <h2>Editar registro</h2>
                <form action="update.php" method="POST" class="mt-3">
                    
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" value="<?php echo $row['apellidos'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Dirección</label>
                        <input type="text" class="form-control" name="direccion" value="<?php echo $row['direccion'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Celular</label>
                        <input type="text" class="form-control" name="celular" value="<?php echo $row['celular'] ?>">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Correo</label>
                        <input type="email" class="form-control" name="correo" value="<?php echo $row['correo'] ?>">
                    </div>

                    <input class="btn btn-primary mt-2"type="submit" value="Actualizar">
                
                
                
                
                </form>
            </div>
        </div>
    </div>
</body>
</html>