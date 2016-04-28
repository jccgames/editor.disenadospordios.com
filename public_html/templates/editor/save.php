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

$id = $_POST["id"];
$title = $_POST["title"];
$author = $_POST["author"];
$content = $_POST["content"];
$picture = $_POST["picture"];
$url = $_POST["url"];

$now = date_create();
$dateLastMod =  date_format($now,"Y-m-d");


$sql = "UPDATE articles SET title='$title' , picture='$picture' , url='$url' , author='$author' , content='$content' , dateLastMod='$dateLastMod' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Guardado con exito";
} else {
    echo "Error:" . mysqli_error($conn);
}

mysqli_close($conn);

?>