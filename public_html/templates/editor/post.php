<?php


$act = $_GET['act'];

$id = $_GET["id"];
$title = $_GET["title"];
$picture = $_GET["picture"];
$url = $_GET["url"];
$author = $_GET["author"];
$content = $_GET["content"];
$publish = $_GET["publish"];

$now = date_create();
$publishdate = date_format($now,"Y/m/d H:i:s");

$servername = "168.235.69.194";
$username = "lector";
$password = "VnFeEAJKs463UHLU";
$dbname = "disenadospordios";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//We are connected

if ($act='draft') 
{$sql = "UPDATE articles SET title='$title' , picture='$picture' , url='$url' , author='$author' , content='$content' , publish='$publish' , publishdate='$publishdate' WHERE id=$id";} else
{$sql = "UPDATE articles SET title='$title' , picture='$picture' , url='$url' , author='$author' , content='$content' , publish='$publish' WHERE id=$id";}

if (mysqli_query($conn, $sql)) {
    echo "Guardado con exito";
} else {
    echo "Error:" . mysqli_error($conn);
}

mysqli_close($conn);


?>