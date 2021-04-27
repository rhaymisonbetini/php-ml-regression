<?php

require_once __DIR__ . '/vendor/autoload.php';

use Phpml\Regression\LeastSquares;

$regression = new LeastSquares();

$monthsAndYears = [
    [1, 1], [1, 2], [1, 4], [1, 5], [1, 6],
    [2, 1], [2, 2], [2, 4], [2, 5], [2, 6],
    [3, 1], [3, 2], [3, 4], [3, 5], [3, 6],
    [4, 1], [4, 2], [4, 4], [4, 5], [4, 6],
];


$labes = [
    5.50, 5.25, 6, 5.75, 5.90,
    6.50, 6.05, 5.35, 5.50, 5.90,
    5, 6.50, 6.10, 5.80, 5.90,
    5.15, 7.25, 7.50, 5.75, 5.90,
];

$regression->train($monthsAndYears, $labes);

$result = $regression->predict([[5, 1], [5, 2], [5, 4], [5, 5], [5, 6]]);

var_dump($result);