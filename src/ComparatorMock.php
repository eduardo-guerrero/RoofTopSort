<?php

/**
 * ComparatorApi
 *
 * Tells wether an element of a blocks set is sequential to another 
 * by doing a search over a harcoded blocks set 
 * 
 * @author  guerreroglez@gmail.com
 */

class ComparatorMock implements ComparatorInterface {
    function isSequential( string $block1, string $block2, string $token ) : bool {
        $mockElements = array("f319", "46ec", "c1c7", "3720", "c7df", "c4ea", "4e3e", "80fd" );

        $indexBlock1 = array_search( $block1, $mockElements );
        $indexBlock2 = array_search( $block2, $mockElements );

        return $indexBlock1 == ($indexBlock2-1);
    }
}

?>