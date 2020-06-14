<head>
    <meta charset="UTF-8">
 <a href="admin.php"><img src="domcek.jpg" class="home"></a>
 <a href="index.php"><img src="logout.png" class="logout"></a>


<link rel="stylesheet" type="text/css" href="css.css">
</head>


<body style="background-image: url('loginpozadie.jpg');">
    <br />
    <br />

    <?php


?>
<div style="color:deepskyblue">
    <?php
$new_nazov = $_POST['text'];

$still_id = $_POST['still_id'];
echo $new_nazov;
echo "<br>";

echo $still_id;
echo "<br>";

// Create connection
$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
    </div>
    <div style="color:deepskyblue">
<?php

$sql = "UPDATE prispevok SET text='$new_nazov'  WHERE ID='$still_id' ";

if ($conn->query($sql) === TRUE) {
    echo "Pozadovane zmeny boli uspesne!";
} else {
    echo "CHYBA: " . $conn->error;
}

$conn->close();
 ?>   
</div>
</body>