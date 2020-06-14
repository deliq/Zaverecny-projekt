<head>
    <meta charset="UTF-8">
 <a href="admin.php"><img src="domcek.jpg" class="home"></a>
 <a href="index.php"><img src="logout.png" class="logout"></a>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>

<body style="background-image: url('loginpozadie.jpg');">>
    <br />
    <br />
    <div style="color:deepskyblue">
<?php
echo $_POST['text'];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";




$nazov = $_POST['text'];


$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);


$sql = "INSERT INTO prispevok (text)
VALUES ('$nazov')";

if ($conn->query($sql) === TRUE) {
 $last_id = $conn->insert_id;
 echo "Nova polozka bola nahrata ID polozky je: " . $last_id;
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}




 $conn -> close();
 

?>
</div>
</body>

