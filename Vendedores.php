<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de vendedores</title>
  <link rel="stylesheet" href="Productos.css">
</head>
<body>
  <div class="container">
    <h1>Tabla de vendedores</h1>
    <table>
      <thead>
        <tr>
          <th>id</th>
          <th>Nombre_Vendedor</th>
          <th>Tipo_Usuario</th>
          <th>Ventas</th>
        </tr>
      </thead>
      <tbody>
        <?php



        // Incluir el archivo PHP (productos.php) para obtener datos
        include 'Vendedoresbd.php';

        // Comprobar si hay productos
        if ($vendedores) {
          foreach ($vendedores as $vendedor) {
            echo "<tr>";
            echo "<td>" . $vendedor['id'] . "</td>";
            echo "<td>" . $vendedor['Nombre_Vendedor'] . "</td>";
            echo "<td>" . $vendedor['Tipo_Usuario'] . "</td>";
            echo "<td>" . $vendedor['Ventas'] . "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='4'>No hay vendedores registrados.</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>