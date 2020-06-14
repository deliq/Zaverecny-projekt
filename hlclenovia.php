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

    <div class="hlvypis_clenovia">
        <div class="skuska">
    <?php
    // Create connection
$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $sql = "SELECT ID, meno, priezvisko, cislo FROM clenovia";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "<br> ID: ". $row["ID"]. " - Nazov: ". $row["firstname"]. " " . $row["lastname"] . "<br>"; 
      $showimage = $row['obrazok'];

      //echo "<br> ID: ". $row["id"]. " - Meno: ". $row["meno"]. " | Priezvisko: ". $row["priezvisko"]."  | Tel. Číslo: ". $row["cislo"]. " <br>"; 
   
    $id = $row["ID"];
    $meno = $row["meno"];
    $priezvisko = $row["priezvisko"];
    $cislo = $row["cislo"];
    ?>
      
    <div id="carta" class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Číslo preukazu: <?php Echo $id  ?> </div>
  <div class="card-body">
    <h5 class="card-title"><?php Echo $meno ," ", $priezvisko ?></h5>
    <p class="card-text"><?php Echo $cislo  ?></p>
  </div>
</div>

    <?php
    }
} else {
    echo "0 results";
}
$conn->close();
    ?>
</div>
</div>


</body>

