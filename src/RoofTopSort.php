<?php

/**
 * RoofTopSort
 * 
 * Orders a set of blocks by comparing and swaping the block's positions.
 * The comparison is dictated by the ComparatorInterface
 * 
 * @author  guerreroglez@gmail.com
 */

class RoofTopSort implements RoofTopSortInterface {
    private $comparator;

    function __construct( ComparatorInterface $comparator) {
        $this->comparator = $comparator; 
    }

    function check( array $blocks, string $token ) : array{
        foreach($blocks as $i => &$elem) {
            for ($j = $i+1; $j < count($blocks); $j++) {
                
                $nextElem = $blocks[$j];
                $swap = $this->comparator->isSequential( $elem, $nextElem, $token );
                
                if ($swap){
                    $blocks[$j] = $blocks[$i+1];
                    $blocks[$i+1] = $nextElem;
                }
            } 
        }   

        return $blocks;     
    }
}

?>
