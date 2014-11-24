<?php

namespace App;

class Home extends _Base {

    function get($f3) {
        $cfg=$f3->read('etc/config.ini');
        $f3->set('cfg',$this->highlight($cfg));
        $f3->set('main','app/ui/pages/home.html');
    }

    /**
     * Quick .ini syntax highlighting
     * @param string $str
     * @return string
     */
    function highlight($str) {
        $str=preg_replace('/^([^\h\r\n\[;].*?)(\h*=\h*)([^\r\n]+)/m','<span class="ini_key">$1</span>$2<span class="ini_val">$3</span>',$str);
        $str=preg_replace('/^(\[.+?\])/m','<span class="ini_section">$1</span>',$str);
        return $str;
    }

}