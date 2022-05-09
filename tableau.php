<?php

// $fruits = [
//     'ananas',
//     'banane',
//     'cerise',
// ];


$fruits = [
    '0' => 'ananas',
    '1' => 'banane',
    '2' => 'cerise',
];

foreach ($fruits as $key => $value) {
    echo "{$key}: {$value}";
    echo '<br>';
}

$legumes = [
    'a' => 'artichaut',
    'b' => 'brocoli',
    'c' => 'carotte',
];

foreach ($legumes as $key => $value) {
    echo "{$key}: {$value}";
    echo '<br>';
}

?>