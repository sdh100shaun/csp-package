<?php
/**
 * 
 * @author: Shaun Hare
 * Date: 03/10/2014
 * Time: 18:43
 * 
 */

namespace ShaunHare\Csp\Composers;


class CspComposer {

    private $nonceCreator;

    private $cspPolicy;


    public function __construct( NonceCreator $nonceCreator )
    {

        $this->nonceCreator = $nonceCreator;

    }

    public function compose($view)
    {


        $view->with('csp-header',header("Content-Security-Policy:".$this->cspPolicy));

        $view->with("csp-script",$this->makeScriptTag());
    }



    public function makeScriptTag()
    {

    }

    /**
     * Make the script src tag
     */
    private function makeScriptSrc()
    {
        if(empty($this->cspPolicy["script-src"])
        {
            $this->cspPolicy["script-src"] ="self";

        }
        
        if(isset($this->nonceCreator) && !empty($this->nonceCreator->getNonce()))
        {
            $this->cspPolicy["script-src"] .=" nonce-".$this->nonceCreator->getNonce();
        }

    }

    private function makeClosingScriptTag()
    {
        return "</script>";

    }

    private function makeOpeningScriptTag()
    {


    }
} 