<?php
date_default_timezone_set("Asia/Dhaka");

// Print current date
//echo date('Y-m-d H:i:s') . '<br>';
echo date('Y/m/d h:i:sa') . '<br>';

// Print yesterday
//echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>';
/*echo date('Y:m:d h:i:s', time() - 60*60*24).'<br>';
$d = strtotime('1 year');
echo date('Y-m-d h:i:s',$d) . '<br>';*/

// Different format: https://www.php.net/manual/en/function.date.php
//echo date('F j Y, H:i:s') . '<br>';

// Print current timestamp
//echo time() . '<br>';
echo date('d-m-Y') . '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$dateString = '2020-02-06 12:45:35';
$parsedDate = date_parse($dateString); 
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 4 2020 12:45:35';

$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';
