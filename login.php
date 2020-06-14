<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body style="background-image: url('loginpozadie.jpg');">


<form class="login-zarovnanie" method="post">
    <label style="color:deepskyblue"> Login </label>
    <input type="login" name="login"/>
    <p></p>
    <label style="color:deepskyblue"> Heslo </label>
    <input type="password" name="heslo"><br>
    <p></p>
    <button type="submit" class="btn btn-light">Prihlasiť</button>
    <?php
    $login = $_POST['login'];
    $heslo = $_POST['heslo'];

    $username = "admin";
    $password = "admin";
    if ($login==$username and $heslo==$password){
    header("Location: admin.php");
    }  
    else{
    }
    ?>
</form>
</body>