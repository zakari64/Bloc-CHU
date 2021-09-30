


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head> 
<body>
   <div class="login-form">
    <img src="/imgs/avatar3.jpg" class="avatar">
    <h1>Login</h1>
    <form action="#" method ="post">
        <input type="text" name="usr" placeholder="Username" >
        <input type="password" name="pwd" placeholder="Password">
       <input type="submit" name="sub" value="Login">

    </form>
    <?php
    require_once ('connexion.php');
	if(isset($_POST['sub'])){
		$req='select * from major where username="'.$_POST['usr'].'" and password="'.$_POST['pwd'].'"';
			$result=$bdd->query($req);
		while ($ligne=$result->fetch()) {
            header('location:dashboard.html');
		}


	}

	  ?>
   </div>

  
</body>
</html>