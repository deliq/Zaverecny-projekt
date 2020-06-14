
<head>
    <meta charset="UTF-8">
<a href="admin.php"><img src="domcek.jpg" class="home"></a>
<a href="index.php"><img src="logout.png" class="logout"></a>



    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body style="background-image: url('loginpozadie.jpg');">>
    <br />
    <br />
        <?php 
    echo $_POST['ide'];
    $id_zmena = $_POST['ide'];

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
if ($conn->query($sql) === TRUE) {
    echo "Pozadovany riadok bol vymazany uspesne!";
} else {
    echo "CHYBA pri mazani: " . $conn->error;
}


$conn->close();



?>

</div>
</body>