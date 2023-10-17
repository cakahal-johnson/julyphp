<?php
/**===========PHP ARRAY ================* */
// if you need to store multiple values, you can use Arrays. Arrays hold "Elements"

//Simple array of numbers
$number = [1, 2, 3, 4, 5, 6];

// Simple array for Strings
$courses = ["JAva", "Python", "PHP", "React"];

// Outting an array values
echo $number[2];
echo '<br>';
echo $number[3] + $number[2]; // returns 7 b'cos is additional values

echo '<br>';
//where we want lto see contents of an array so we use print_r or var_dump
var_dump($number);
echo '<br>';
print_r($number);

echo '<br>';
var_dump($courses);

echo '<br>';
/* Associative Arrays allow us to use named keys to indentify values */

$course = [
    1 => 'java',
    2 => 'PHP',
    3 => 'Python',
    5 => 'React'
];

echo $course[1]; // returns PHP

// where we have string as Key
$my_color = [

    'white' => '#f4f4f4',
    'gray' => '#ccc',
    'black' => '#000'
];

        echo '<br>';
echo $my_color['white'];
        echo '<br>';
var_dump($my_color);

//**================ Multi-dimenstional Arrays=============== */
// Single student Array
$student =
[
    "first_name" => "Cakahal",
    "last_name" => "Johnson",
    "email" => 'example@g.com'
];

// multiply students list
$students = [
    $student1,
    [
        "first_name" => "Cakahal",
        "last_name" => "Johnson",
        "email" => 'example@g.com'
    ],
    [
        "first_name" => "Cakahal",
        "last_name" => "Johnson",
        "email" => 'example@g.com'
    ]
    ];

    echo '<br>';
    var_dump($students);

    // Accessing values in a multi-dimensional array

    echo '<br>';

    echo $students[0]['first_name'];
    echo '<br>';
    echo $students[3]['email'];
    echo '<br>';

    // Encode to Json
    var_dump(json_encode($student) );
    echo '<br>';

    // Decode from Json
    $jsonOBJ = '{"fname": "Peter", "lname": "Obi", "email": "example@g.com"}';

    var_dump(json_decode($jsonOBJ));




