<?php

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

$sql = "SELECT id, title, author FROM articles ORDER BY id DESC LIMIT 3";
$result = mysqli_query($conn, $sql);
$data = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$data[]=$row;
    }
}
mysqli_close($conn);

echo html_entity_decode(stripcslashes(json_encode($data)));


?>