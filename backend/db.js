const mysql = require('mysql2');

// Connect to the MySQL database (XAMPP MySQL instance on localhost)
const connection = mysql.createConnection({
  host: 'localhost',      // XAMPP MySQL is hosted on localhost
  user: 'root',           // Default MySQL username in XAMPP
  password: '',           // Default MySQL password in XAMPP (empty by default)
  database: 'database_project' // Your database name created in phpMyAdmin
});

// Test the connection
connection.connect((err) => {
  if (err) {
    console.error('Error connecting to MySQL: ' + err.stack);
    return;
  }
  console.log('Connected to MySQL as id ' + connection.threadId);
});

module.exports = connection;