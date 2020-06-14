<head>
    <meta charset="UTF-8">
 <a href="admin.php"><img src="domcek.jpg" class="home"></a>
 <a href="index.php"><img src="logout.png" class="logout"></a>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css.css">
</head>


<body style="background-image: url('loginpozadie.jpg');">
    
    <form class="prinovy_clen" method="post" action="/pripripoj.php" enctype="multipart/form-data">
        
        
        <div class="prisirka">
        <label style="color:deepskyblue" class="pripismo_pridat" for="text">Článok:</label>
        <textarea tybe="text"  name="text" rows="4" cols="50"></textarea>
        </div>
        
        <div class="sirka">
        <input type="submit" id="tlacitko_nahrat" />
        </div>
        
    </form>
    

</body>