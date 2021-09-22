<?php

/*$age = 20;
$salary = 300000;*/
$age2 = 40;
$salary2 = 50000;

// Sample if
/*if ($age == 20) {
    echo "1";
}*//*
if ($age2 == 40) {
    echo "1";
}*/
// Without circle braces
/*if ($age === 20)
    echo "1";*/

// Sample if-else
/*if ($age > 20) {
    echo "1";
} else {
    echo "2";
}*/
/*if ($age2 > 50){
    echo "1";
} else {
    echo "2";
}*/
// Difference between == and ===
/*$age == 20; // true
$age == '20'; // true

$age === 20; // true
$age === '20'; // false*/

// if AND
/*if ($age > 20 && $salary === 300000) {

}
// if OR
if ($age > 20 OR $salary === 300000) {

}*/

/*if ($age2 == 40 && $salary2 === 50000) {
    echo "00000000000";
}*/

// Ternary if
/*echo $age2 < 22 ? 'Young' : 'Old';
echo '<br>';*/

/*echo $age2 <= 40 ? 'Young' : 'old';
echo '<br>';*/

// Short ternary
/*$myAge = $age ?: 18; // Equivalent of "$age ? $age : 18"*/

// Null coalescing operator
/*$var = isset($name) ? $name : 'John';
$var = $name ?? 'John'; // Equivalent of above
echo $var.'<br>';*/

// switch
/*$userRole = 'admin'; // admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'You can do anything<br>';
        break;
    case 'editor';
        echo 'You can edit content<br>';
        break;
    case 'user':
        echo 'You can view posts and comment<br>';
        break;
    default:
        echo 'Unknown role<br>';
}*/

$userRole = 'abc'; //admin, editor, user
switch ($userRole) {
    case 'admin':
        echo 'You are Admin';
        break;
    case 'editor':
        echo 'Your are Editor';
        break;
    case 'user':
        echo 'Your are User';
        break;
    default:
        echo 'Unknown Role<br>';
}