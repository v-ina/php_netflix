<?php
	session_start();

    require('src/log.php');

	if(!empty($_POST['email']) && !empty($_POST['password'])){
		require('src/connect.php');

		$email = htmlspecialchars($_POST['email']);
		$password = htmlspecialchars($_POST['password']);
	}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Netflix-PHP</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="imgs/favicon.png">
</head>
<body>

    <?php include('./src/header.php')?>
    <section>
        <div id="login-body">
            <h1>Bonjour!</h1>
            <p>Qu'allez-vous regarder aujourd'hui ?</p>
            <small><a href="logout.php">Déconnexion</a></small>
            <h2>S'identifier</h2>
            <form action="index.php" method="post">
                <input type="email" name="email" placeholder="Votre adresse email" required />
                <input type="password" name="password" placeholder="Mot de passe" required />
                <button type="submit">S'identifier</button>
                <label id=""option>
                    <input type="checkbox" name="auto" checked /> Se souvenir de moi
                </label>
            </form>
            <p class="grey">Première visite sur Netflix? <a href="inscription.php">Inscrivez-vous</a></p>
        </div>
    </section>
    <?php include('./src/footer.php')?>

</body>
</html>