<?php
require_once __DIR__ . '/../vendor/autoload.php';


/**
 * 
 * Solves the riddle using the blocks given in the challenge's description
 * 
 * 
 * @author  guerreroglez@gmail.com
 */


$token = '';
$shuffledBlocks = array("f319", "3720", "4e3e", "46ec", "c7df", "c1c7", "80fd", "c4ea");

$comparatorMock = new ComparatorMock;
$roofTopSort = new RoofTopSort( $comparatorMock );

$sortedBlocks = $roofTopSort->check($shuffledBlocks, $token);

echo join('', $sortedBlocks);

?>