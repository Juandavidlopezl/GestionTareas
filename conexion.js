// Importa la librería de MySQL
const mysql = require('mysql');

// Configura la conexión a la base de datos
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'abarrotes'
});

// Abre la conexión
connection.connect();

// Ejecuta una consulta
connection.query('SELECT * FROM ventas', (error, results) => {
  if (error) throw error;
  // Procesa los resultados
  console.log("conexion exitosa");
});

// Cierra la conexión
connection.end();