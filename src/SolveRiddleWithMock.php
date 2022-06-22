<?php
require_once __DIR__ . '/../vendor/autoload.php';

$token = '';
$shuffledBlocks = array("f319", "3720", "4e3e", "46ec", "c7df", "c1c7", "80fd", "c4ea");

$comparatorMock = new ComparatorMock;
$roofTopSort = new RoofTopSort( $comparatorMock );

$sortedBlocks = $roofTopSort->check($shuffledBlocks, $token);

echo join('', $sortedBlocks);

?>