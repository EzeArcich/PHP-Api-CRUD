<?php
include("conexion.php"); //Importar el archivo donde se aloja la conexión
$con=conectar(); // Llamamos la función para conectar
$sql= "SELECT * FROM usuarios"; // Consulta SQL
$query= mysqli_query($con, $sql); // Esta palabra reservada recibe el argumento de la conexion, y luego la consulta SQL

//Ingresar datos



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css
">
</head>
<body>

    <div class="container mt-5">
        <div class="row ">
            <div class="col-md-3">
                <h2>Fomulario</h2>
                <form action="ingresar.php" method="POST" class="mt-3 p-3 border border-5 border-warning" style="border-color: blue;">
                    
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control border-warning" name="nombre">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Apellidos</label>
                        <input type="text" class="form-control border-warning" name="apellidos">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Dirección</label>
                        <input type="text" class="form-control border-warning" name="direccion">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Celular</label>
                        <input type="text" class="form-control border-warning" name="celular">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Correo</label>
                        <input type="email" class="form-control border-warning" name="correo">
                    </div>

                    <input class="btn btn-primary mt-2"type="submit">
                
                
                
                
                </form>
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-8">
                <h2>Tabla de datos</h2>
                <table class="table">
                    <thead class="table-warning">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql= "SELECT * FROM usuarios"; // Consulta SQL
                        $query= mysqli_query($con, $sql); // Esta palabra reservada recibe el argumento de la conexion, y luego la consulta SQL
                        
                            
                            
                            while($row = mysqli_fetch_array($query)){ ?>
                                
                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['nombre'] ?></td>
                                    <td><?php echo $row['apellidos'] ?></td>
                                    <td><?php echo $row['direccion'] ?></td>
                                    <td><?php echo $row['celular'] ?></td>
                                    <td><?php echo $row['correo'] ?></td>
                                    <td>
                                        <a class="btn btn-warning" href="editar.php?id=<?php echo $row['id']?>">Editar</a>

                                        <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']?>">Eliminar</a>

                                    </td>
                                
                                </tr>
                        <?php    } ?>
                       
                    
                    </tbody>
                </table>
                      
                
               
            </div>
        </div>
    </div>

    
</body>
</html>


