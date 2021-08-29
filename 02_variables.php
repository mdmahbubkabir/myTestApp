<?php

// What is a variable

// Variable types
/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/

// Declare variables
$name = "Zura";
$age = 28;
$isMale = true; // Change into false
$height = 1.85;
$salary = null;


//Declare variables by Mahbub
$name2 = "Mahbub";
$age2 = 40;
$isMale2 = true;
$height2 = 5.7;
$salary2 = null;


// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';


//Print the variables of Mahbub
echo "Print the variables of Mahbub" . '<br>';
echo $name2 . '<br>';
echo $age2 . '<br>';
echo $isMale2 . '<br>';
echo $height2 . '<br>';
echo $salary2 . '<br>';


// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br> <br>';

//print type by Mahbub
echo "Print type by Mahbub" . '<br>';
echo gettype($name2) . '<br>';
echo gettype($age2) . '<br>';
echo gettype($isMale2) . '<br>';
echo gettype($height2) . '<br>';
echo gettype($salary2) . '<br> <br>';

// Print the whole variable
var_dump($name, $age, $isMale, $height, $salary);
echo "<br> <br>";

//Print the whole variable by Mahbub
echo "Print the whole variable by Mahbub" . '<br>';
var_dump($name2, $age2, $isMale2, $height2, $salary2);

echo "<br> <br>";
// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name);

// Variable checking functions
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true

echo "<br>";

//Variable checking function by Mahbub no display

is_string($name2);
is_int($age2);
is_bool($isMale2);
is_double($height2);

// Check if variable is defined
var_dump(isset($name));
var_dump(isset($name2));
echo '<br>';

// Constants
define('PI', 3.14);
echo PI . '<br>';
var_dump(defined('PI')); // defined(PI2)
echo '<br>';

// 12. Using PHP built-in constants
echo SORT_ASC . '<br>';
echo PHP_INT_MAX . '<br>';
