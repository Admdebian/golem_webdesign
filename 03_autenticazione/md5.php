<?php
	echo md5('golem') . '<br />';
	echo md5('bill') . '<br />';
	echo md5('steve') . '<br />';

/*
a b c d e f g
  c d e f g h 
    k f g h i l
*/
	$input = 123; //PASSWORD
	$salt = 13; //SALT
	echo ($input * $salt) % 5  ; // HASH
	$tot = 4; //totale utenti
	$tot = $tot % 100;
	for( $i = 0; $i < $tot; $i = $i + 1) {
		$input = md5( $input );
		echo $i . ' : ' . $input . '<br />';
	}
?>


