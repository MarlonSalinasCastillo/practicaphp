<?php
// Conectar a la base de datos
$conexion = mysqli_connect('localhost', 'root', 'tu_contraseña', 'PRUEBA'); // Reemplaza 'tu_contraseña' con la contraseña de MySQL

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Consulta SQL para recuperar todos los clientes
$cadenaSQL = "SELECT * FROM s_cliente";
$resultado = mysqli_query($conexion, $cadenaSQL);

// Verificar si la consulta fue exitosa
if (!$resultado) {
    die('Error en la consulta: ' . mysqli_error($conexion));
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Catálogo de clientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Catálogo de clientes</h1>
            <p class="lead">Aplicación de muestra del catálogo de clientes</p>
            <hr class="my-4">
            <p>Aplicación de muestra PHP conectada a una base de datos MySQL para enumerar un catálogo de clientes</p>
        </div>

        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th>Provincia</th>
                    <th>País</th>
                    <th>Código Postal</th>
                    <th>Calificación Crediticia</th>
                    <th>Comentarios</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Mostrar los resultados en la tabla
                while ($fila = mysqli_fetch_object($resultado)) {
                    echo "<tr>
                              <td>" . htmlspecialchars($fila->id) . "</td>
                              <td>" . htmlspecialchars($fila->nombre) . "</td>
                              <td>" . htmlspecialchars($fila->telefono) . "</td>
                              <td>" . htmlspecialchars($fila->direccion) . "</td>
                              <td>" . htmlspecialchars($fila->ciudad) . "</td>
                              <td>" . htmlspecialchars($fila->provincia) . "</td>
                              <td>" . htmlspecialchars($fila->pais) . "</td>
                              <td>" . htmlspecialchars($fila->codigo_postal) . "</td>
                              <td>" . htmlspecialchars($fila->calificacion_crediticia) . "</td>
                              <td>" . htmlspecialchars($fila->comentarios) . "</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>

<?php
// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
