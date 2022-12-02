<?php

class Car {
    public $color;
    public $type;
}

$myCar = new Car();
//-> to access method
$myCar->color = 'red';
$myCar->type = 'sedan';

$yourCar = new Car();
$yourCar->color = 'blue';
$yourCar->type = 'suv';

$cars = [$myCar, $yourCar];

echo $cars;

$pages_array = [
    [
        'slug' => 'index',
        'title' => 'Site Index',
        'template' => 'interior',
    ],

    [
        'slug' => 'a',
        'title' => '100% Wide (Layout A)',
        'template' => 'interior',
    ],

    [
        'slug' => 'homepage',
        'title' => 'Homepage',
        'template' => 'homepage',
    ],
];

echo $pages_array;
