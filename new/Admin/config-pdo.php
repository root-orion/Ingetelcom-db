<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// define('DB_SERVER', '185.98.131.93');
// define('DB_USERNAME', 'inget984178_2dq5m');
// define('DB_PASSWORD', 'dccbv9khce');
// define('DB_NAME', 'inget984178_2dq5m');

$servername = '185.98.131.93';
$username = 'inget984178_2dq5m';
$password = 'dccbv9khce';
/* Attempt to connect to MySQL database */
try {
    $link = new PDO("mysql:host=$servername;dbname=inget984178_2dq5m", $username, $password);
    //On définit le mode d'erreur de PDO sur Exception
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connexion a la base de donnees réussie ';
}

/*On capture les exceptions si une exception est lancée et on affiche
 *les informations relatives à celle-ci*/ catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
