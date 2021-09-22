<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];
$mahbub = ["Sufia","Zohra","Bushra","Takia"];

// Print the whole array
/*echo '<pre>';
var_dump($fruits); // print_r
echo '</pre>';*/

echo '<pre>';
var_dump($mahbub);
echo '<pre>';

// Get element by index
//echo $fruits[1].'<br>';
echo $mahbub[1]. '<br>';


// Set element by index
//$fruits[0] = "Peach";
$mahbub[1] = "Zohra Tani Khan";

echo '<pre>';
var_dump($mahbub);
echo '<pre>';

// Check if array has element at index 2
/*echo '<pre>';
var_dump(isset($fruits[2]));
echo '</pre>';*/
echo '<pre>';
var_dump(isset($mahbub[10]));
echo '<pre>';

// Print the length of the array
//echo count($fruits).'<br>';
echo count($mahbub). '<br>';

// Add element at the end of the array
/*$fruits[] = 'Peach';
echo $fruits[3].'<br>';
array_push($fruits, 'Foo');*/
$mahbub[] = 'Hafiz';
echo $mahbub[4].'<br>';
array_push($mahbub,'Momtaz Uddin');

// Remove element from the end of the array
/*array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';*/
array_pop($mahbub);
echo '<pre>';
var_dump($mahbub);
echo '<pre>';

// Add element at the beginning of the array
//array_unshift($fruits, 'Apple');
array_unshift($mahbub,'Lal Miah');
echo '<pre>';
var_dump($mahbub);
echo '<pre>';
// Remove element from the beginning of the array
//array_shift($fruits);
array_shift($mahbub);
echo '<pre';
var_dump($mahbub);
echo '<pre>';

// Split the string into an array
/*$string = "Banana,Apple,Peach";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

print_r($fruits);*/

$bari = "Rampura,Jatrabari,Dakatia";
echo '<pre>';
var_dump(explode(",",$bari));
echo '<pre>';


// Combine array elements into string
//echo implode(",", $fruits).'<br>';
echo implode(",",$mahbub).'<br>';

// Check if element exist in the array
/*echo '<pre>';
var_dump(in_array('Apple', $fruits));
echo '</pre>';*/
echo '<pre>';
var_dump(in_array('Sufia',$mahbub));
echo '<pre>';
// Search element index in the array
/*echo '<pre>';
var_dump(array_search("Peach", $fruits));
echo '</pre>';*/
echo '<pre>';
var_dump(array_search("Apple",$fruits));
echo '<pre>';
// Merge two arrays
/*$vegetables = ['Potato', 'Cucumber'];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]); // Since PHP 7.4
echo '</pre>';*/

echo '<pre>';
//var_dump(array_merge($mahbub,$fruits));
var_dump([...$fruits,...$mahbub]);
echo '<pre>';


// Sorting of array (Reverse order also)
/*sort($fruits); //sort, rsort
echo '<pre>';
var_dump($fruits);
echo '</pre>';*/

sort($mahbub);
echo '<pre>';
var_dump($mahbub);
echo '<pre>';



// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
/*$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];*/
$mkabir = [
    'name' => 'Md.Mahbub Kabir',
    'surename' => 'Mahbub',
    'age' => 30,
];

// Get element by key
//echo $person['name'].'<br>';
echo $mkabir['name'].'<br>';

// Set element by key
//$person['channel'] = 'TraversyMedia';
$mkabir['channel']= 'mdmahbubkabir';
echo '<pre>';
//var_dump($mkabir);
print_r($mkabir);
echo '<pre>';

//Null coalescing assignment operator. Since PHP 7.4
/*if (!isset($person['address'])){
    $person['address'] = 'Unknown';
}
$person['address'] ??= 'Unknown';
echo $person['address'].'<br>';*/

if (!isset($mkabir['age2'])){
    $mkabir['age2'] = 'Unknown';
}

echo '<pre>';
print_r($mkabir);
echo '<pre>';


// Check if array has specific key
/*echo '<pre>';
var_dump(isset($person['age']));  // Change age into "location"
echo '</pre>';*/

echo '<pre>';
var_dump(isset($mkabir['age']));
echo '<pre>';

// Print the keys of the array
/*echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';*/

echo '<pre>';
var_dump(array_keys($mkabir));
echo '<pre>';


// Print the values of the array
/*echo '<pre>';
var_dump(array_values($person));
echo '</pre>';*/

echo '<pre>';
var_dump(array_values($mkabir));
echo '<pre>';

// Sorting associative arrays by values, by keys
/*ksort($person); // ksort, krsort, asort, arsort
echo '<pre>';
var_dump($person);
echo '</pre>';*/

asort($mkabir);
echo '<pre>';
var_dump($mkabir);
echo '<pre>';