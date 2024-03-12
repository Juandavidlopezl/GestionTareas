<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de productos</title>
  <link rel="stylesheet" href="Productos.css">
</head>
<body>
  <div class="container">
    <h1>Tabla de productos</h1>
    <table>
      <thead>
        <tr>
          <th>id Producto</th>
          <th>Nombre Producto</th>
          <th>Descripcion Producto</th>
          <th>Precio Venta</th>
          <th>Categoria Producto</th>
        </tr>
      </thead>
      <tbody>
        <?php



        // Incluir el archivo PHP (productos.php) para obtener datos
        include 'Productosbd.php';

        // Comprobar si hay productos
        if ($productos) {
          foreach ($productos as $producto) {
            echo "<tr>";
            echo "<td>" . $producto['id_Producto'] . "</td>";
            echo "<td>" . $producto['Nombre_Producto'] . "</td>";
            echo "<td>" . $producto['Descripcion_Producto'] . "</td>";
            echo "<td>" . $producto['Precio_Venta'] . "</td>";
            echo "<td>" . $producto['Categoria_Producto'] . "</td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='4'>No hay productos registrados.</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>