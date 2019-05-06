<?php
$members = [
    'zhang' => [
        'name' => 'zhan g',
        'gender' => 'man',
        'phone' => '123',
    ],
    'tu' => [
        'name' => 'tu',
        'gender' => 'woman',
        'phone' => '234'
    ],
    'hu' => [
        'name' => 'hu',
        'gender' => 'woman',
        'phone' => '3935',
    ]
];

//array_walk_recursive
$arrwr = [];
array_walk_recursive(
    $members,
    function ($v) use (&$arrwr) {
        //unset($v['phone']);
        array_push($arrwr, $v);
    }
);
print_r($arrwr);