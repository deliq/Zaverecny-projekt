<head>
    <meta charset="UTF-8">
<a href="admin.php"><img src="domcek.jpg" class="home"></a>
<a href="index.php"><img src="logout.png" class="logout"></a>



<link rel="stylesheet" type="text/css" href="css.css">
</head>


<body style="background-image: url('loginpozadie.jpg');">>
    <br />
    <form class="vymazat_div" action="/privymaz_id.php" method="post">
    <label class="id_vymazat_txt"> ID na vymazanie: </label>
    <input type="number" name="id_zmena" class="id_vymazat"><br>
    <input type="submit" class="delete_button" />
    </form>
    <br />
    <br />
 <?php

// Create connection
$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, text FROM prispevok";
$result = $conn->query($sql);
?>
    <div style="color:deepskyblue">
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "<br> ID: ". $row["ID"]. " - Nazov: ". $row["firstname"]. " " . $row["lastname"] . "<br>"; 
      echo "<br> ID: ". $row["id"]. " - Text: ". $row["text"]. " <br>"; 
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</div>


</body>