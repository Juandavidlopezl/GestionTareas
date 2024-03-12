<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla de Reportes</title>
  <link rel="stylesheet" href="Productos.css">
</head>
<body>
  <div class="container">
    <h1>Tabla de Reportes</h1>
    <table>
      <thead>
        <tr>
          <th>id Reporte</th>
          <th>Fecha Venta</th>
          <th>Total Ventas</th>
          <th>Costo Total</th>
          <th>Ganancia Bruta</th>
        </tr>
      </thead>
      <tbody>
        <?php



        // Incluir el archivo PHP (productos.php) para obtener datos
        include 'Reportebd.php';

        // Comprobar si hay productos
        if ($reporte) {
          foreach ($reporte as $report) {
            echo "<tr>";
            echo "<td>" . $report['id_Reporte'] . "</td>";
            echo "<td>" . $report['Fecha_Venta'] . "</td>";
            echo "<td>" . $report['Total_Ventas'] . "</td>";
            echo "<td>" . $report['Costo_Total'] . "</td>";
            echo "<td>" . $report['Ganancia_Bruta'] . "</td>";
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