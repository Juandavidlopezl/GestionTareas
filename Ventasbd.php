<?php
// Detalles de la conexión a la base de datos (reemplazar con las credenciales reales)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abarrotess";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para obtener productos
$sql = "SELECT id_Ventas, Fecha_Venta, Cliente, id_Vendedor, Total_Venta FROM ventas";

// Obtener resultados
$result = $conn->query($sql);

// Array vacío para almacenar datos de productos
$ventas = array();

// Si hay resultados
if ($result->num_rows > 0) {
  // Recorrer cada fila y agregarla al array
  while ($row = $result->fetch_assoc()) {
    $ventas[] = $row;
  }
} else {
  echo "No se encontraron vendedores";
}

// Cerrar la conexión
$conn->close();
?>