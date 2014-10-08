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

    public function compose($view)
    {
        $view->with('csp-header',header("Content-Security-Policy:".$cspPolicy));
        $view->with("csp-script",$this->makeScriptTag());
    }

    public function makeScriptTag()
    {

    }
    private function makeClosingScriptTag()
    {
        return "</script>";

    }
    private function makeOpeningScriptTag()
    {




    }
} 