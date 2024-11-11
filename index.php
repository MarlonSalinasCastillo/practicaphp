<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Catálogo de clientes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
  <div class = "container">
    <div class="jumbotron">
      <h1 class="display-4">Catálogo de clientes</h1>
      <p class="lead">Aplicación de muestra del catálogo de clientes</p>
      <hr class="my-4">
      <p>Aplicación de muestra PHP conectada a una base de datos MySQL para enumerar un catálogo de clientes</p>
    </div>
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Historial Crediticio</th>
          <th>Direccion</th>
          <th>Ciudad</th>
          <th>Provincia</th>
          <th>Pais</th>
          <th>Codigo Postal</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $conexion = mysqli_connect(getenv('MYSQL_HOST'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'), "PRUEBA");

        $cadenaSQL = "select * from s_cliente";
        $resultado = mysqli_query($conexion, $cadenaSQL);

        while ($fila = mysqli_fetch_object($resultado)) {
         echo "<tr><td> " .$fila->nombre . 
         "</td><td>" . $fila->calificacion_crediticia .
         "</td><td>" . $fila->direccion .
         "</td><td>" . $fila->ciudad .
         "</td><td>" . $fila->provincia .
         "</td><td>" . $fila->pais .
         "</td><td>" . $fila->codigo_postal .
         "</td></tr>";
       }
       ?>
     </tbody>
   </table>
 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>

