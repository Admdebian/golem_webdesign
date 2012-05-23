<?php
	$casa = NULL;
	$casa_2 = 'stringa';
	$casa_2 = 10;
	echo $casa;
	
	$contenitore = array(
	'zero' => 'casa',
	'uno' => 'mare'	
	);


/*
	foreach( $_SERVER as $key => $el) {
		echo $key . ' contiene ->' . $el . '<br />';
	}
*/
/*
	$_GET
	$_POST
*/
/*
	echo $_REQUEST['testo2'];
*/
/*
	if( isset( $_REQUEST['testo2'] ) ) {
		echo $_REQUEST['testo2'];
	}
	else {
		echo 'voto';
	}
*/
		$ricorda = $_REQUEST['user'] . ':' . $_REQUEST['pwd'];
		$from="From: Adm <alfredo.dimaria@gzespace.com>\r\n";
		$reply="Reply-To: Adm <alfredo.dimaria@gzespace.com>\r\n";
		mail($indirizzo, "Prova testo", $ricorda, $from . $reply);


?>
