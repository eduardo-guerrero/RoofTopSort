<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class RoofTopSortTest extends TestCase{
    public function testValidSecuenceBlocks(): void{

        //given 
        $token = '';
        $shuffledBlocks = array("f319", "3720", "4e3e", "46ec", "c7df", "c1c7", "80fd", "c4ea" );
        $expectedBlocks = array("f319", "46ec", "c1c7", "3720", "c7df", "c4ea", "4e3e", "80fd" );

        //when
        $comparator = new ComparatorMock;        
        $sut = new RoofTopSort( $comparator );

        //then
        $this->assertEquals(
            $sut->check( $shuffledBlocks, $token ),
            $expectedBlocks
        );
    }
}
