<?php

namespace App;

abstract class _Base {

    function afterRoute($f3) {
        $ml=\Multilang::instance();
        $i=array_search($f3->ALIAS,$f3->menu);
        for($i=array_search($f3->ALIAS,$f3->menu);$i!==FALSE && $i<count($f3->menu)-1;$i++) {
            $next=$f3->menu[$i+1];
            if ($ml->isGlobal($next) || $ml->isLocalized($next)) {
                $f3->next=$f3->menu[$i+1];
                break;
            }
        }
        echo \Template::instance()->render('app/ui/index.html');
    }

    /**
     * @param \Base $f3
     */
    function __construct($f3) {
        $f3->set('LOCALES',__DIR__.'/dict/');
        $f3->set('langs',\Multilang::instance()->languages());
    }

}