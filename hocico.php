<?php 
    echo $_POST['myData'];
    $id_zmena = $_POST['myData'];

    // Create connection
$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE FROM ziadostnovyclen WHERE id='$id_zmena'";
?>
   <div style="color:deepskyblue">
    <?php
if ($conn->query($sql) == TRUE) {
    echo "Pozadovany riadok bol vymazany uspesne!";
} else {
    echo "CHYBA pri mazani: " . $conn->error;
}


$conn->close();



?>
