<?php
/**
 * 
 * @author: Shaun Hare
 * Date: 04/10/2014
 * Time: 13:23
 * 
 */

namespace ShaunHare\Csp;




class NonceCreator {

    const NUMBER_BYTES = 22;




    /**
     * Create a nonce
     * @return string
     */
    public function getNonce()
    {



        $nonce = hash('sha512',$this->makeRandomString());

        return $nonce;

    }

    /**
     * Make Random String uses open ssl to make a random string for use as a nonce in form of a hashed string
     * @return string
     */
    public function makeRandomString()
    {

       $strong;

       $randomNumber = openssl_random_pseudo_bytes(NonceCreator::NUMBER_BYTES,$strong);


       return $randomNumber;

    }



} 