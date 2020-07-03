<?php

require_once('lib/autoload.php');

$f3 = \Base::instance();

require_once 'config.php';

if ($f3->get('MAINTENANCE') == true) {
        $f3->route('GET /*', function($f3) {
            $con = new Controllers\App();
            $con->renderView('layout/maintenance.php');
        }
    );
} else {
    // Load routes
    require_once 'routes.php';
}

$f3->run();
