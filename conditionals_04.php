<?php

/**
 * CONDITIONALS AND OPERATORS
 * 
 * OPERATORS
 * BASICS / * - + %
 * < LESS THAN 
 * > GREATER THAN 
 * <= LESS THAN OR EQUAL TO
 * >= GREATER THAN OR EQUAL TO
 * == EQUAL TO
 * === IDENTICAL TO 
 * != NOT EQUAL TO
 * !== NOT IDENTICAL TO
 * 
 * IF STATEMENTS
 * SYNTAX:
 * if(conditionals){
 *    CODE TODO!!! only if the condition is true
 * }
 * 
 */

 $age = 18;
 if ($age >= 18) {
    echo 'You are old enough to vote!...';
 }else{
    echo 'Sorry, you are too young to vote!';
 }

 echo '<br>';

 // Dates
 $time = date("F j, Y, g:i a "); // dtaes formatters
 echo $time;

 $tm = date('H'); // Hour agrs*
 echo '<br>';
echo $tm;
echo '<br>';


 if ($tm < 12) {
    echo 'Have a good morning!';
 }elseif ($tm < 17) {
    echo ' Have a good Day!!';
 }else {
    echo ' Have a good Night!!!';
 }

 echo '<br>';

 // checking if an array is empty
 // we use the isset() function will generate a warning or e-notice when empty

 $posts = [];
 if (!empty($posts[0])) {
    echo $posts[0];

 } else {
     echo ' There are no posts to display';
 }
 echo '<br>';
 
 /**
  * TERNARY OPERATORS
  This is a short-hand way of if statement

  Syntax:
  conditions ? true : false; 
        where ? is if statement and : is else statement
  */

  // eching out above example using Ternary Operator
  echo !empty($posts[0]) ? $posts[0] : 'There are no posts to display';

 echo '<br>';

 // where Assigning a variable based on a condition
 $firstPost = !empty($posts[0]) ? $posts[0] : 'There are no posts!';

 echo '<br>';
echo $firstPost;

// we can set Null b'cos we can't have if without else we use null as else
$firstgPost = !empty($posts[0]) ? $posts[0] : null;
echo '<br>';

// we also null Coalescing Operator ?? (PHP 7.4)
// these always return first parameter, unless first para happens to be null

$firstgPost = $posts[0] ?? null;
echo '<br>';


var_dump($firstgPost);
echo '<br>';

/**
 * SWICTH STATEMENTS
 * SAME AS IN JS

*/

$favColor = 'gray';

switch ($favColor) {
    case 'red':
        echo 'You Picked ur Fav-color as Red';
        break;
    case 'blue':
        echo 'You Picked ur Fav-color as Blue';
        break;
    case 'green':
        echo 'You Picked ur Fav-color as Green';
        break;
        
    default:
        echo 'You Picked ur Fav-color as either Red, Green nor Blue!';
        
}

echo '<br>';
echo 'WOw!! welcome: ' . $favColor . 'congrats!!!';


