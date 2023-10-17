<?php
// String Function

$name = "cakahal Johnson sam";

// getting the lenght of a string
echo strlen($name);

echo '<br>';

// finding the position of the first occurence of a substring in a string
echo strpos($name, 'a');

echo '<br>';
//finding the positions of the last occurence of a substring in a string
echo strrpos($name, 'a');

echo '<br>';
//Reverse a string
echo strrev($name);

echo '<br>';
//convert all character to lowercase
echo strtolower($name);

echo '<br>';
//convert all character to uppercase
echo strtoupper($name);

echo '<br>';
// string Replace
echo str_replace('sam', 'Peter obi', $name);

echo '<br>';
//return portion of a string specified by the offset and length
echo substr($name, 0, 8);

echo '<br>'; 
// with this we get from the last index of the character
echo substr($name, 8);

echo '<br>';

// using string function in a conditions
//here we check if a character is present it returns a boolean
// if(str_starts_with($name, 'ca')){
//     echo 'Yes!';
// }else{
//     echo 'No!';
// }
// using string function in a conditions
//here we check if a character is not present it returns a boolean
// if(str_ends_with($name, 'r')){
//     echo 'Yes!';
// }else{
//     echo 'No!';
// }

echo '<br>';

//Html Entities
$name2 = '<h2>hello world</h2>';

echo $name2 . '<br>';

$name3 = '<script>alert(1)</script>';
// echo $name3;
echo htmlentities($name3);

echo '<br>';

// formatted strings - useful when you have outside data which is different in -specifier data types
//for storing data with concatination
printf('%s is a %s', 'cakahal', ' nice guy');

echo '<br>';

// using this for int to return data
printf('10 * 3 = %f', 10 * 3);

// boolean
// isTrue = true;
// sprintf('isTrue=%s', isTrue ? "True" : "False");

function _bool($b){
    return $b ? 'True' : 'False';
}

// echo _bool($b)












