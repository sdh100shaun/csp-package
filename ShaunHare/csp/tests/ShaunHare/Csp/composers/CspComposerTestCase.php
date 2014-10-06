<?php
/**
 * 
 * @author: Shaun Hare
 * Date: 06/10/2014
 * Time: 20:48
 * 
 */

namespace ShaunHare\Csp\composers;


class CspComposerTestCase {

    private $composer;

    public function setUp()
    {
        $this->composer = new CspComposer();

    }

    public function testMakeOpeningScriptTagIncludesNonce()
    {

        $this->composer->makeOpeningScriptTag();

    }

} 