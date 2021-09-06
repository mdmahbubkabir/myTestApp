<?php

// Create simple string
$name = "Mahbub";
$string = "Hello, I am $name"; // Extract TheChocoholic into variable
$string2 = 'Hello, I am ' . $name . ''; // Replace TheCodeholic with variable
echo $string . '<br>';
echo $string2 . '<br>';
echo $name . '<br>';
echo $name . '<br>';

// String concatenation
echo "Hello " . " World" . '<br>'; // Multiple concatenation . " and PHP";
echo "Hello " . " PHP" . '<br>';

// String functions
$string = "    Hello World      ";
$name2 = "   Mahbub Kabir  ";


echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "1a - " . strlen($name2) . '<br>';

echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "2b - " . trim($name2) . '<br>';

echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "3c - " . ltrim($name2) . '<br>';

echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "4d - " . rtrim($name2) . '<br>';

echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo  "5e - " . str_word_count($name2) . '<br>';

echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "6f - " . strrev($name2) . '<br>';

echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "7g -" . strtoupper($name2) . '<br>';

echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "8h -" . strtolower($name2) . '<br>';

echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
echo "9i -" . ucfirst('mahbub') . '<br>';

echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
echo "10j -" . lcfirst('MAHBUB') . '<br>';

echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
echo "11k-" . ucwords('mahbub kabir') . '<br>';


echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // Change into world
echo "12l-" . strpos($name2,'kabir') . '<br>';

echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;
echo "13m-" . stripos($name2,'Kabir') . '<br>';

echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
echo "14n-" . substr($name2, 10) . '<br>';

echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;
echo "15o-" . str_replace('Kabir', 'Hafiz', $name2) . '<br>';

echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;
echo "16p-" . str_ireplace('kabir','Hafiz',$name2) , '<br>';


$invoiceNumber = 100;
$invoiceNumber2 = 123456;
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_repeat('Hello', 2) . '<br>' . PHP_EOL;
$invoiceNumberMk =999;
$invoiceNumberMk2 = 1234;
echo str_pad($invoiceNumberMk,5,'0', STR_PAD_LEFT) . '<br>';
echo str_pad($invoiceNumberMk2,5,'0', STR_PAD_RIGHT) . '<br>';
echo str_repeat('Allah I love you ang I am your servant', '2'). '<br>';





// Multiline text and line breaks
$longText = "
  Hello, my name is Zura
  I am 27,
  I love my daughter
";
echo $longText . '<br>' . PHP_EOL;
echo nl2br($longText) . '<br>' . PHP_EOL;
echo nl2br($longText) , '<br>';


// Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>Zura</b>
  I am <b>27</b>,
  I love my daughter
";
echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;


// https://www.php.net/manual/en/ref.strings.php
