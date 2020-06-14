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
    
    $id_zmenit = $_POST['id_zmenit'];


    // Create connection
$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT id, text FROM prispevok WHERE id='$id_zmenit' ";
$result = $conn->query($sql);
?>
    <div style="color:deepskyblue">
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "<br> ID: ". $row["ID"]. " - Nazov: ". $row["firstname"]. " " . $row["lastname"] . "<br>"; 
      $showimage = $row['obrazok'];

      //echo "<br> ID: ". $row["id"]. " - Text: ". $row["text"]. " <br>"; 
   

    $still_id = $row["id"];
    $old_nazov = $row["text"];
   
    
       
    }
} else {
    echo "0 results";
}

?>
        </div>
 <form class="novy_clen" method="post" action="/priedit.php">
         
     
     <div class="prisirka">
        <label style="color:deepskyblue" class="pripismo_pridat" for="text">Článok:</label>
        <textarea tybe="text"  name="text" rows="4" cols="50"><?php echo $old_nazov ?></textarea>
        </div>
     
            <div class="sirka">  
        <label style="color:deepskyblue" class="pismo_pridat" for="still_id"> Vase zvolene ID: </label>
        <input class="input_pridat" type="number" name="still_id" value = "<?php echo $still_id  ?>"  readonly /> <br>
        </div>
                <div class="sirka">
        <input type="submit" id="tlacitko_nahrat" />
        </div>
    </form>
    
    
<?php



$conn->close();
?>
 </body>