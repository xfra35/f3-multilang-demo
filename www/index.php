<?php

chdir('..');

$f3=require('lib/base.php');

$f3->config('etc/config.ini');

@ini_set('error_log',$f3->LOGS.'error.log');

$f3->copy('ALIASES','_ALIASES');//backup of ALIASES for demo purpose

$f3->set('ml',Multilang::instance());

$f3->run();
