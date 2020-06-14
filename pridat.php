<head>
    <meta charset="UTF-8">

     <script type="text/javascript" 
            src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>

         
	
            <?php /* 
            $(document).ready(function () {

            $('#ajaxBtn').click(function () {
                $.ajax( {
                    url: "hocico.php",
                    method: "POST",
                    data: { item_id: 6 },})
			{
                        success: function (data, status, xhr) {    // success callback function
                            $('p').append(data);
                        }
                    
			});
		 });
            
        });
            
            $(document).ready(function () {
			
		 $('#ajaxBtn').click(function(){
			$.ajax('/jquery/getdata',   // request url
			{            
				success: function (data, status, xhr) {    // success callback function
						$('p').append(data);
				}
			});
		 });

        });
        */

        ?>

 <a href="admin.php"><img src="domcek.jpg" class="home"></a>
 <a href="index.php"><img src="logout.png" class="logout"></a>

<link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    
   
</head>


<body style="background-image: url('loginpozadie.jpg');">
    
    <form class="novy_clen" method="post" action="/pripoj.php" enctype="multipart/form-data">
        <div class="sirka">
        <label style="color:deepskyblue" class="pismo_pridat" for="meno">Meno:</label>
        <input class="input_pridat" type="text" name="meno"><br>
        </div>
        <div class="sirka">
        <label style="color:deepskyblue" class="pismo_pridat" for="priezvisko">Priezvisko:</label>
        <input class="input_pridat" type="text" name="priezvisko"><br>
        </div>
        <div class="sirka">
        <label style="color:deepskyblue" class="pismo_pridat" for="cislo">Telefone Číslo:</label>
        <input class="input_pridat" type="number" name="cislo"><br>
        </div>
        <div class="sirka">
        <input type="submit" id="tlacitko_nahrat" />
        </div>
    </form>
    
    <div >
        <div class="skuska">
    <?php
    // Create connection
$conn = mysqli_connect("mysql80.websupport.sk", "projektwd2", "Xl8M=8iD,;", "projektwd2", 3314);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $sql = "SELECT ID, meno, priezvisko, cislo FROM ziadostnovyclen";
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

    

            

    <div id="carta" class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Číslo žiadosti: <?php echo $id  ?> </div>
  <div class="card-body">
    <h5 class="card-title"><?php Echo $meno ," ", $priezvisko ?></h5>
    <p class="card-text"><?php Echo $cislo  ?></p>
    <form class="vymazat_div" <?php /* action="ziadost_vymaz_id.php"*/ ?> method="post">
    <input type="hidden" name="myData"  value=" <?php echo $id  ?> " >
    <input type="button" class="delete_button" id="ajaxBtn" value="vymazať"  />
    </form>
  </div>
</div>



<script type="text/javascript">
         $(document).ready(function () {
			
             $('#ajaxBtn').click(function ()
             {
						$.ajax('/hocico.php', {
				type: 'POST',  // http method
				data: { myData: " <?php echo $id ?> " },  // data to submit
				success: function (data, status, xhr) {
					$('#carta').append('status: ' + status + ', data: ' + data);
				},
				error: function (jqXhr, textStatus, errorMessage) {
						$('#carta').append('Error: ' + errorMessage);
					}
			});
           
             });
    });
    </script>

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