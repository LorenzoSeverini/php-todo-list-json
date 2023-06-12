<?php
// array for JSON response / some fruits for the summer 🤠😍
$fruits = [
    [
        'name' => 'Apple',
        'color' => 'red',
        'taste' => 'sweet'
    ],
    [
        'name' => 'Banana',
        'color' => 'yellow',
        'taste' => 'sweet'
    ],
    [
        'name' => 'Orange',
        'color' => 'orange',
        'taste' => 'sour'
    ],
    [
        'name' => 'Lemon',
        'color' => 'yellow',
        'taste' => 'sour'
    ],
    [
        'name' => 'Kiwi',
        'color' => 'green',
        'taste' => 'sour'
    ],
    [
        'name' => 'Strawberry',
        'color' => 'red',
        'taste' => 'sweet'
    ],
];

// JSON 
header('Content-Type: application/json');

$dataString = json_encode($fruits);

echo $dataString;
