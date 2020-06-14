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

    $sql = "SELECT id, meno, priezvisko , cislo FROM clenovia WHERE id='$id_zmenit' ";
$result = $conn->query($sql);
?>
    <div style="color:deepskyblue">
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "<br> ID: ". $row["ID"]. " - Nazov: ". $row["firstname"]. " " . $row["lastname"] . "<br>"; 
      $showimage = $row['obrazok'];

      echo "<br> ID: ". $row["id"]. " - Meno: ". $row["meno"]. " | Priezvisko: ". $row["priezvisko"]."  | Tel. Číslo: ". $row["cislo"]. " <br>"; 
   

    $still_id = $row["id"];
    $old_nazov = $row["meno"];
    $old_cena = $row["priezvisko"];
    $old_mnozstvo = $row["cislo"];
    
       
    }
} else {
    echo "0 results";
}

?>
        </div>
 <form class="novy_clen" method="post" action="/edit.php">
        <div class="sirka">
        <label style="color:deepskyblue" class="pismo_pridat" for="new_nazov">Meno:</label>
        <input class="input_pridat"  type="text" name="new_nazov" value = "<?php echo $old_nazov ?>" ><br>
        </div>
        <div class="sirka">
        <label style="color:deepskyblue" class="pismo_pridat" for="new_cena">Priezvisko:</label>
        <input class="input_pridat" type="text" name="new_cena" value = "<?php echo $old_cena ?>" ><br>
         </div>
        <div class="sirka">
        <label style="color:deepskyblue" class="pismo_pridat" for="new_mnozstvo">Tel. Číslo:</label>
        <input class="input_pridat" type="number" name="new_mnozstvo" value = "<?php echo $old_mnozstvo ?>"><br>
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