<?php
/**
 * Locale class fallback (in case intl extension is not present)
 */
class Locale {

    static function getDisplayLanguage($language,$ref) {
        return $language;
    }

}
