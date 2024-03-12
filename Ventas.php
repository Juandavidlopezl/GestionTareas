<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de ventas</title>
  <link rel="stylesheet" href="Productos.css">
</head>
<body>
  <div class="container">
    <h1>Tabla de ventas</h1>
    <table>
      <thead>
        <tr>
          <th>id Ventas</th>
          <th>Fecha ventas</th>
          <th>Cliente</th>
          <th>id Vendedor</th>
          <th>Total venta</th>
        </tr>
      </thead>
      <tbody>
        <?php



        // Incluir el archivo PHP (productos.php) para obtener datos
        include 'Ventasbd.php';

        // Comprobar si hay productos
        if ($ventas) {
          foreach ($ventas as $venta) {
            echo "<tr>";
            echo "<td>" . $venta['id_Ventas'] . "</td>";
            echo "<td>" . $venta['Fecha_Venta'] . "</td>";
            echo "<td>" . $venta['Cliente'] . "</td>";
            echo "<td>" . $venta['id_Vendedor'] . "</td>";
            echo "<td>" . $venta['Total_Venta'] . "</td>";
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