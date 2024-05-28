<?php


// php does not support utf-8 this is my why we need to keep attention with strings and special characters

$example = 'das ist ein Beispiel';
$example2 ='ßäü';

//$loc_de = setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'deu', 'deu','ge');

$result = ucfirst($example2);
//echo $result; // Das ist ein Beispiel


if(!function_exists('mb_ucfirst')) 
{
    function mb_ucfirst(string $string) 
    {
        // return mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1);
        $charArray = mb_str_split($string);
        $firstChar = mb_strtoupper($charArray[0]);
        $charArray[0] = $firstChar;

        return implode('', $charArray);
    }
}

echo mb_ucfirst($example2); // array(4) { [0]=> string(2) "ä" [1]=> string(2) "ö" [2]=> string(2) "ü" [3]=> string(2) "ß" }