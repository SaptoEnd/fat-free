<?php

use Medoo\Medoo;

/// FRAMEWORK CONFIG ///
$basepath = $f3->get('BASE');
// echo $basepath;
$f3->set('AUTOLOAD', 'app/');
$f3->set('UI', 'app/views/');
$f3->set('TEMP', 'tmp/');
$f3->set('ASSETS', $basepath . '/assets');

$f3->set('ENV', 'dev'); /* dev OR production */
$f3->set('MAINTENANCE', false);

/// LOG FOR ENV ///
if ($f3->get('ENV') == 'dev') {
    // ON ERRORS ROUTE
    $f3->set('ONERROR', function($f3) {
        $con = new Controllers\App();
        $con->renderView('layout/404.php');
    });
} else {
    $f3->set('DEBUG', 2);
}

/// DATABASE CONFIG ///
try {
    $database = new Medoo([
        
        'database_type' => 'mysql',
        'database_name' => 'folder',
        'server' => 'localhost',
        'username' => 'root',
        'password' => ''
    ]);

} catch (Exception $exc) {
    if (strpos($exc->getMessage(), '1045') !== false || strpos($exc->getMessage(), '1044') !== false) {
        $f3->set('ERR', ['code' => '1045', 'message' => 'Database connection problem']);
    } else if (strpos($exc->getMessage(), '1040') !== false) {
        $f3->set('ERR', ['code' => '1040', 'message' => 'Too many connections']);
    } else {
        $f3->set('ERR', ['code' => '404', 'message' => 'Opps. Something happen. Page not found']);
    }
}
