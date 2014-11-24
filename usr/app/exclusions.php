<?php

namespace App;

class Exclusions extends _Base {

    function get($f3) {
        $alias=$f3->get('ALIAS');
        $ml=\Multilang::instance();
        $excluded=array();
        foreach($ml->languages() as $lang)
            if (!$ml->isLocalized($alias,$lang))
                $excluded[]=\Locale::getDisplayLanguage($lang,$ml->current);
        $f3->set('excluded',$excluded);
        $f3->set('main','app/ui/pages/exclusions.html');
    }

}