<?php
/**
 * 
 * @author: Shaun Hare
 * Date: 05/10/2014
 * Time: 15:44
 * 
 */

namespace ShaunHare\Csp;

use ShaunHare\Csp\NonceCreator;

class NonceCreatorTestCase  extends \PHPUnit_Framework_TestCase{

    private $nonceCreator;
    private $MockRandomNumber;

    protected function setUp()
    {

        $this->nonceCreator = new NonceCreator();

    }

    /**
     * @test
     */
    public function GetNonceReturnsString()
    {


        $nonce = $this->nonceCreator->getNonce();
        $this->assertInternalType('string',$nonce);


    }

    /**
     * @test
     */
    public function GetNonceDoesNotReturnSameValueTwice()
    {

        $firstNonce = $this->nonceCreator->getNonce();
        $secondNonce = $this->nonceCreator->getNonce();

        $this->assertNotEquals($firstNonce,$secondNonce);

    }



} 