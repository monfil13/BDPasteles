<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pasteles";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT PastelID, Nombre, Precio FROM pasteles";
$result = $conn->query($sql);

$csvFileName = 'exportacionpasteles.csv';

$output = fopen($csvFileName, 'w');

fputcsv($output, array('PastelID', 'Nombre', 'Precio'));

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        fputcsv($output, $row);
    }
}

fclose($output);

$conn->close();

echo "Datos exportados correctamente a $csvFileName";

?>