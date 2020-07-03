<?php

$f3->route('GET /', 'Controllers\Home->index'); //login
#POST /login=AuthController->auth
$f3->route('POST /login', 'Controllers\AuthController->auth');
$f3->route('GET /login', 'Controllers\AuthController->login');
#GET /admin=AdminController->profile
$f3->route('GET /admin', 'Controllers\AdminController->profile');

//unggah file
$f3->route('GET /upload', 'Controllers\Upload->tampil');
$f3->route('GET /insert_files', 'Controllers\Upload->uploads');
//unggah file
$f3->route('POST /upload/proses', 'Controllers\Upload->proses');
$f3->route('GET /hapus', 'Controllers\Upload->hapus'); // hapus file
//$f3->route('GET /list_file', 'Controllers\Upload->tampil');
//inset name
$f3->route('GET /user/insert', 'Controllers\Insert->inserts');
$f3->route('GET /hapus_f', 'Controllers\Insert->hapus_f'); //hapus folder
$f3->route('GET|POST /user/inserts', 'Controllers\Insert->inserts_proses');
#GET /login=AuthController->login

$f3->route('GET /logout', 'Controllers\AuthController->logout'); //logout
#GET /logout=AuthController->logout






$f3->route('GET|POST /@controller', 'Controllers\@controller->index');
$f3->route('GET|POST /@controller/@action', 'Controllers\@controller->@action');
$f3->route('GET|POST /@controller/@action/@param', 'Controllers\@controller->@action');

// $f3->route('GET|POST /@controller/@action/*', 'Controllers\@controller->@action');
$f3->route('GET /Journal/issue/@journal_id/@issue', 'Controllers\Journal->issue');
$f3->route('GET /Author/view/@author_ipi/@journal_id', 'Controllers\Author->view');
$f3->route('GET /Citation/site/@citeformat/@article_id', 'Controllers\Citation->site');
// $f3->route('GET|POST /@controller/@action/*', 'Controllers\@controller->@action');
/*//open pages create_folder

$f3->route('GET|POST /halaman', 'Controllers\Home->halaman');
//open pages open_file.php
$f3->route('GET|POST /open_files', 'Controllers\Home->open_files');*/