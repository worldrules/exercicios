
<!--
 Um Tipo de Resolucao

//setar uma variavel

$palavra = "casa";

echo "String: " . $palavra;

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
function checkPalindrome($palavra)

{
    $palavraRev = strrev($palavra);

    $palavra_invertida = str_split($palavraRev);

    $palin = '';

    foreach ($palavra_invertida as $value) {

        $palin .= $value;
    }

    if ($palavra == $palin) {

        return true;
    } else {

        return false;
    }
}



    while ( $palavra < 1000) {

        checkPalindrome($palavra);
    }


    ?>















?>