<?php


/**
 * ComparatorApi
 *
 * Tells wether an element of a block set is sequential to another 
 * by performing a call to Rooftop's Api 
 * 
 * @author  guerreroglez@gmail.com
 */

use GuzzleHttp\Client;

class ComparatorApi implements ComparatorInterface {

    var $url = "https://rooftop-career-switch.herokuapp.com/check?token=";

    function isSequential( string $block1, string $block2, string $token ) : bool {

        $client = new Client();

        $response = $client->post($this->url.$token, [
            GuzzleHttp\RequestOptions::JSON => ['blocks' => array($block1, $block2) ] 
        ]);
        
        $json = json_decode($response->getBody()->getContents());
        return $json->message;
    }

}

?>