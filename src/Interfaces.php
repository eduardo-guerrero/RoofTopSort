<?php

interface ComparatorInterface{
    function isSequential( string $block1, string $block2, string $token ) : bool;
}
interface RoofTopSortInterface{
    function check( array $blocks, string $token ) : array ;
}
?>