<?php
$err = Base::instance()->get('ERR');
if (empty($err)) {
    $err['code'] = '404';
    $err['message'] = 'Page not found';
}
?>
<h1><?= $err['code'] ?></h1>
<h4 class="uk-text-danger"><?= $err['message'] ?></h4>
