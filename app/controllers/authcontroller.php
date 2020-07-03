<?php

namespace Controllers;

class AuthController extends App {
    public function __construct()
    {
        parent::__construct();
    }

    function login($f3){
        $f3->clear('SESSION');
        $f3->set('COOKIE.sent',TRUE);
        $f3->set('title', 'Login');
        //$f3->set('inc','home/login/login.html');
        $this->renderView('home/index.php');
    }
    function logout($f3){
        $f3->clear('SESSION');
        //$f3->reroute('/login');
        $this->renderView('home/index.php');
    }
    function auth($f3){
        if(!$f3->get('COOKIE.sent')){
            $f3->set('flash', 'Cookies must be enabled in order to login.');
        } else {
            $username = $f3->get('POST.username');
            $password = $f3->get('POST.password');
            $hashed_pass = password_hash($password, PASSWORD_BCRYPT);
            //$user = $this->database->select('users', ['id', 'email', 'password'], [ 'email' => $email]);
            $user = $this->database->select('user', ['id', 'username', 'password'], [ 'username' => $username]);
            if(!empty($user)){ // user is found
                if(!password_verify($password, $user[0]['password'])){ // pass mismatch
                    $f3->set('flash', 'Password mismatch. Please try again.');
                } else { // all okay
                    $f3->set('SESSION.user_id', $user[0]['id']);
                    $f3->reroute('/admin');
                    //$this->renderView('home/login/login.html');
                    //echo "sukses";
                }
            } else { // no user
                $f3->set('flash', 'User doesn\'t exist. Please enter valid email.');
            }
        }
        $this->login($f3);
    }

}

