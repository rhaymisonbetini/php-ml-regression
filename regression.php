<?php

require_once __DIR__ . '/vendor/autoload.php';

use Phpml\Regression\LeastSquares;

$regression = new LeastSquares();

$amostral = [[2], [4], [6], [8], [10]];
$labels   = [[2.35], [9.25], [7.28], [17.42], [8.70]];

$regression->train($amostral, $labels);

$result = $regression->predict([[12],[50]]);

echo $result[0] . "\n";
echo $result[1];
