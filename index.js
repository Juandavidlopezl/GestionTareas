const form = document.getElementById('login-form');
const errorMessage = document.getElementById('error-message');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const Email = form.querySelector('input[name="Email"]').value;
  const Contraseña = form.querySelector('input[name="Contraseña"]').value;

  // Validar usuario y contraseña contra la base de datos MySQL
  validarUsuario(Email, Contraseña).then((usuarioValido) => {
    if (usuarioValido) {
      // Iniciar sesión y redireccionar a la página principal
      // ...
      window.location.href = "Inicio.html"; // Ejemplo de redireccionamiento
    } else {
      errorMessage.textContent = 'Usuario o contraseña incorrectos.';
    }
  });
});

// Función para validar el usuario y la contraseña
function validarUsuario(Email, Contraseña) {
  return new Promise((resolve, reject) => {
    // Conexión a la base de datos MySQL
    const mysql = require('mysql2');
    const connection = mysql.createConnection({
      host: 'localhost',
      user: 'root',
      password: '',
      database: 'abarrotes'
    });

    connection.connect();

    const query = 'SELECT * FROM login WHERE Email = ? AND Contraseña = ?';
    connection.query(query, [Email, Contraseña], (error, results) => {
      connection.end();

      if (error) {
        reject(error);
      } else if (results.length === 0) {
        resolve(false);
      } else {
        resolve(true);
      }
    });
  });
}
