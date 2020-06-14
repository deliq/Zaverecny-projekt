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
$new_nazov = $_POST['new_nazov'];
$new_cena = $_POST['new_cena'];
$new_mnozstvo = $_POST['new_mnozstvo'];
$still_id = $_POST['still_id'];
echo $new_nazov;
echo "<br>";
echo $new_cena;
echo "<br>";
echo $new_mnozstvo;
echo "<br>";
echo $still_id;
echo "<br>";

// Create connection
$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//UPDATE table_name
//SET column1=value, column2=value2,...
//WHERE some_column=some_value 
?>
    </div>
    <div style="color:deepskyblue">
<?php

$sql = "UPDATE clenovia SET meno='$new_nazov', priezvisko='$new_cena', cislo='$new_mnozstvo'  WHERE ID='$still_id' ";

if ($conn->query($sql) === TRUE) {
    echo "Pozadovane zmeny boli uspesne!";
} else {
    echo "CHYBA: " . $conn->error;
}

$conn->close();
 ?>   
</div>
</body>