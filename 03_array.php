<?php

/// Simple array 
// $numbers = [1, 2,3];
// $fruits  = array('apple', 'banana');

// var_dump($numbers);
// var_dump($fruits);

// echo $fruits[1];

/// Associative Array
// $colors = [
//     'A' => 'red',
//     2 => 'blue',
// ];

// echo $colors['2'];


// $person = [
//     'f_name' => 'Abdullah',
//     'l_name' => 'Soomro',
//     'email' => 'abdullah@gmail.com'
// ];

// echo $person['l_name'];


$people = [

    [
        'f_name' => 'Abdullah',
        'l_name' => 'Soomro',
        'email' => 'abdullah@gmail.com'
    ],
    [
        'f_name' => 'John',
        'l_name' => 'Smith',
        'email' => 'john@gmail.com'
    ],
    [
        'f_name' => 'Abdul',
        'l_name' => 'Hameed',
        'email' => 'abdul@gmail.com'
    ]   
];

// echo $people[0]['f_name'];
$json = json_encode($people[0]);
echo $json;


