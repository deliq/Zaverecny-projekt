<head>
	 <a href="login.php"><button type="button"  class="btn btn-secondary" class="login" >PRIHLASIŤ</button>  </a>
<div class="btn-group" role="group" aria-label="Basic example">
</div>
    
   
    <meta charset="ISO-8859-1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css.css">
    <meta charset="UTF-8">
</head>

<body style="background-image: url('rybnik.jpg');">
    <h1>Oblastný rybársky zväz Projekt WD2
    <?php
    $_SESSION["datumDnes"] = date(" d.m.Y");
    echo "<br>" . $_SESSION["datumDnes"];
    ?>
    </h1> 


    <div class="row">
		<ul class="nav nav-pills nav-fill col-md-12 mb-3">
			<li class="nav-item"><a class="nav-link" href="index.php">Domov</a></li>
			<li class="nav-item"><a class="nav-link" href="hlcenik.php">Cení­k</a></li>
			<li class="nav-item"><a class="nav-link" href="hlclenovia.php">Členovia</a></li>
			<li class="nav-item"><a class="nav-link" href="hlkontakt.php">Kontakt</a></li>
		</ul>
	</div>

 <div class="clanky_vypis">
        
    <?php
    // Create connection
$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $sql = "SELECT text FROM prispevok";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "<br> ID: ". $row["ID"]. " - Nazov: ". $row["firstname"]. " " . $row["lastname"] . "<br>"; 
      $showimage = $row['obrazok'];

      //echo "<br> ID: ". $row["id"]. " - Meno: ". $row["meno"]. " | Priezvisko: ". $row["priezvisko"]."  | Tel. ÄÃ­slo: ". $row["cislo"]. " <br>"; 
   
    $text = $row["text"];

    ?>
    <div class="ramcek">

    <a class="samotny_text"> <?php Echo $text  ?> </a> 
    <br />
    </div>
    <?php
    }
} else {
    echo "0 results";
}
$conn->close();
    ?>

</div>








</body>

