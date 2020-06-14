<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body style="background-image: url('rybnik.jpg');">
    
<div class="btn-group" role="group" aria-label="Basic example">
 <a href="login.php"><button type="button" class="btn btn-secondary" >PRIHLASIŤ</button>  </a>

</div>
    
    <h1>Oblastný rybársky zväz Projekt WD2
    <?php
    $_SESSION["datumDnes"] = date(" d.m.Y");
    echo "<br>" . $_SESSION["datumDnes"];
    ?>
    </h1>
    <div class="row">
		<ul class="nav nav-pills nav-fill col-md-12 mb-3">
			<li class="nav-item"><a class="nav-link" href="index.php">Domov</a></li>
			<li class="nav-item"><a class="nav-link" href="hlcenik.php">Ceník</a></li>
			<li class="nav-item"><a class="nav-link" href="hlclenovia.php">Členovia</a></li>
			<li class="nav-item"><a class="nav-link" href="hlkontakt.php">Kontakt</a></li>
		</ul>
	</div>

    <h2>Ceník pre dospelých</h2>
    <table id="tabulka" class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Názov</th>
      <th scope="col">Doba (dni)</th>
      <th scope="col">Cena (€)</th>
    </tr>
  </thead>
        <tbody>
    <?php
    // Create connection
$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $sql = "SELECT Cena, Obdobie, nazov FROM cennik";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "<br> ID: ". $row["ID"]. " - Nazov: ". $row["firstname"]. " " . $row["lastname"] . "<br>"; 
      $showimage = $row['obrazok'];

      //echo "<br> ID: ". $row["id"]. " - Meno: ". $row["meno"]. " | Priezvisko: ". $row["priezvisko"]."  | Tel. Číslo: ". $row["cislo"]. " <br>"; 
   
    
    $cena = $row["Cena"];
    $obdobie = $row["Obdobie"];
    $nazov = $row["nazov"];
    ?>
      
      <tr>
      <th scope="row"> <?php echo $nazov ?> </th>
      <td> <?php echo $obdobie ?></td>
      <td> <?php echo $cena ?> </td>
      
    </tr>

    <?php
    }
} else {
    echo "0 results";
}
$conn->close();
    ?>

      </tbody>
</table> 
  
  
    <h2>Zľavnený ceník pre deti a študentov</h2>
    <table id="tabulka" class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Názov</th>
      <th scope="col">Doba (dni)</th>
      <th scope="col">Cena (€)</th>
    </tr>
  </thead>
        <tbody>
    <?php
    // Create connection
$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $sql = "SELECT Cena, Obdobie, nazov FROM deticennik";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "<br> ID: ". $row["ID"]. " - Nazov: ". $row["firstname"]. " " . $row["lastname"] . "<br>"; 
      $showimage = $row['obrazok'];

      //echo "<br> ID: ". $row["id"]. " - Meno: ". $row["meno"]. " | Priezvisko: ". $row["priezvisko"]."  | Tel. Číslo: ". $row["cislo"]. " <br>"; 
   
    
    $cena = $row["Cena"];
    $obdobie = $row["Obdobie"];
    $nazov = $row["nazov"];
    ?>
      
      <tr>
      <th scope="row"> <?php echo $nazov ?> </th>
      <td> <?php echo $obdobie ?></td>
      <td> <?php echo $cena ?> </td>
      
    </tr>

    <?php
    }
} else {
    echo "0 results";
}
$conn->close();
    ?>

      </tbody>
</table>



</body>
<footer>
    <?php 
    include 'zzzpeta.php';
    ?>
</footer>