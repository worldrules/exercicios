
<!--

//setar uma variavel

$palavra = "casa";

echo "String: " . $palavra;

$myArray = array(); // php array

$myArray = str_split($palavra); //divide o array

$len = sizeof($myArray); //pega o tamanho do array

$novaPalavra = "";

//colocar mais um menos no final
for($i = $len; $i >= 0; $i-) {

	$novaPalavra .= $myArray[$i];
}
 echo "<br>";

if ($palavra == $novaPalavra) {
	
	echo "$novaPalavra é um palindrome";

} else {
	echo "$novaPalavra não é um palindrome";

}

-->
<?php

$palavra = "madam";

$palavraRev = strrev($palavra);
	
	$palavra_invertida = str_split($palavraRev);

	$palin = '';

	foreach($palavra_invertida as $value) {

		$palin .= $value;
	}

echo $palin;

	if ($palavra == $palin) {

		echo "<br> palindrome";
	} else {

		echo "<br> not palindrome";
	}

















?>