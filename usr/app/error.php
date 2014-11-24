<?php

namespace App;

class Error extends _Base {

    function handler($f3) {
        while (ob_get_level())
            ob_end_clean();
        $f3->set('main','app/ui/pages/error.html');
        echo \Template::instance()->render('app/ui/index.html');
        die();
    }

}