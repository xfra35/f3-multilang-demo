<?php

namespace App;

class Error extends _Base {

    /**
     * Custom Error handler
     * @param \Base $f3
     */
    function handler($f3) {
        while (ob_get_level())
            ob_end_clean();
        if (!headers_sent())
            $f3->expire(0);
        $f3->set('main','app/ui/pages/error.html');
        echo \Template::instance()->render('app/ui/index.html');
        die();
    }

}