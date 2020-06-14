<head>
    <meta charset="UTF-8">

 <a href="index.php"><img src="logout.png" class="logout"></a>

<link rel="stylesheet" type="text/css" href="css.css">
</head>


<body style="background-image: url('loginpozadie.jpg');">
    
    <form class="novy_clen" method="post" action="/ziadost_pripoj.php" enctype="multipart/form-data">
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
    

</body>