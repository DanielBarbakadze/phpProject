<?php
require_once __DIR__ . '/../helpers.php';
require_once __DIR__ . '/../Request.php';
require_once __DIR__ . '/../Router.php';
require_once __DIR__ . '/../db/Database.php';

session_start();

$db = new Database();

$router = new Router(new Request);

$router->get('/', 'index');
$router->get('/profile', 'profile');
$router->post('/result', function (IRequest $request) use ($router){



    return $router->renderOnlyView('result');
});
$router->get('/login', function () use ($router) {
    return $router->renderOnlyView('login', [
        'errors' => [],
        'data' => [
            'email' => '',
            'password' => ''
        ]
    ]);
});
$router->get('/logout', function () {
    session_unset();
    session_destroy();
    redirect('/');
});

$router->get('/signup', function (IRequest $request) use ($router){

    return $router->renderOnlyView('signup');
});

$router->post('/login', function (IRequest $request) use ($db, $router) {
    $body = $request->getBody();
    if ($db->loginUser($body['email'], $body['password'])) {
        redirect('/');
    } else {
        return $router->renderOnlyView('login', [
            'errors' => [
                'password' => 'Username or password is incorrect',
            ],
            'data' => [
                'email' => $body['email'],
                'password' => $body['password']
            ]
        ]);
    }
});
$router->post('/submit-signup', function (IRequest $request) use ($db) {
    $body = $request->getBody();
    if(strlen($body['email'])==0){
        $_SESSION['errEmaillen']=true;
        redirect('/signup');
    }
    else if($db->signupUser($body['email'])!=0){
        $_SESSION['errEmail']=true;
        redirect('/signup');
    };
    if($body['password']!=$body['repeat']){
        $_SESSION['errPass']=true;
        redirect('/signup');
    }
    if(strlen($body['password'])<5){
        $_SESSION['errPasslen']=true;
        redirect('/signup');
    }
    if(strlen($body['fullname'])==0){
        $_SESSION['errName']=true;
        redirect('/signup');
    }
    if(
        !($db->signupUser($body['email'])!=0) &&
        !($body['password']!=$body['repeat']) &&
        !(strlen($body['password'])<5) &&
        !(strlen($body['fullname'])==0) &&
        !(strlen($body['email'])==0)
    ){
        $_SESSION['SuccesSignup']=true;
        $_SESSION['E-mail']=$body['email'];
        $db->createRecord($body['fullname'],$body['email'],$body['password']);
        redirect('/login');
    }
});