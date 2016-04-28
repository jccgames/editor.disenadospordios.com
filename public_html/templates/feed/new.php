<?php

$servername = "168.235.69.194";
$username = "editor";
$password = "c9tz6CEsCSs4a3TV";
$dbname = "disenadospordios";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//We are connected

$now = date_create();
$dateNow =  date_format($now,"Y-m-d");


$sql = "INSERT INTO articles (title, author, content, picture, url, views, likes, datePublish, dateLastMod, publish)
VALUES ('Titulo', 'Autor', 'Contenido', 'foto', 'url','0','0','$dateNow', '$dateNow', '0')";

if (mysqli_query($conn, $sql)) {
    echo "Se creo un nuevo articulo exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>