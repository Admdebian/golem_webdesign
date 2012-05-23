<?php
	session_start();
	if( isset( $_GET['action'] ) && $_GET['action'] == 'logout' ) {
			session_destroy();
			session_start();
	}

	$utenti = array(
		'golem' => '62650cd9a5fb136dc137b155e4ae6f2a',
		'windows' => 'e8375d7cd983efcbf956da5937050ffc',
		'apple' => 'd69403e2673e611d4cbd3fad6fd1788e',
		'<a href="cattivo">ok</a>' => 'steve'
	);
	if( isset($_SESSION['logged']) && $_SESSION['logged'] == 1 ) {
		$msg = 'SEI LOGGATO ' . strip_tags($_SESSION['username']);
		$msg .= '<br /><a href="index.php?action=logout">logout</a>';
	}
	else if( isset($_POST['user'] ) && isset($_POST['pwd'] ) ) {
/*
		NON FARE DA SOLI A CASA. MA CON L'AIUTO DI UN PROFESSIONISTA
*/
		if( isset( $utenti[ $_POST['user'] ] ) ){
			if( $utenti[ $_POST['user'] ] == md5($_POST['pwd']) ) {
				$msg = 'Finalmente sei loggato.';
				$_SESSION['logged'] = 1;
				$_SESSION['username'] = $_POST['user'];
			}
			else {
				$msg = 'Hai sbagliato la password. Ma è facile, riprova.';				
			}
		}
		else {
			$msg = 'L\'utente non esiste';
		}
	}
	else {
		$msg = 'Fai il login';
	}
?>
<!DOCTYPE html>
<html>
<head>
<!-- Utile se il vostro editor scrive i file con una codifica utf8
	<meta content="text/html;" charset="UTF-8" http-equiv="Content-Type">
-->
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
	<title>GOLEM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
</head>

<body data-gatto="Ciro" id="prova" >

<form action="index.php" method="post" id="login_form" >
<h1>GOLEM LOGIN</h1>
<input type="hidden" name="testo2" value="sono una stringa nascosta" />
<input type="textfield" name="user" value="username" />
<input type="password" name="pwd" value="password" />
<input type="submit" value="login" name="tasto" />
</form>
<div id="box" >
<p>
<?php
	echo $msg;
?>
</p>

</div>
<div id="sfondo_trasparente" ></div>


</body>
</html>
