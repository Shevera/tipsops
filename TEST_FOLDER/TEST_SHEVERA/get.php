<?php

if(isset ($_POST['IDtext'])&&(isset($_POST['IDselect'])))
{
    echo $_POST['IDtext']." : ";
    echo $_POST['IDselect'];

}else{
 echo 'my server error';
}


$servername = "localhost";
$username = "root";
$password = "";
$databaza = "tips";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databaza);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$text = $_POST['IDtext'];
$select = $_POST['IDselect'];

//$sql = "INSERT INTO test_bd (text, select)VALUES ($textArea,$select)";

$result = mysqli_query($conn,"INSERT INTO test_b(text, select)VALUES ('".$text."','".$select."');");


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>