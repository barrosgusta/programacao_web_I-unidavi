<?php

include 'controller/pessoa_controller.php';

session_start();

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
        header('Location: /login');
    break;

    case '/login':
        if (isset($_SESSION['user'])) {
            header('Location: /home');
            exit();
        }

        PessoaController::login();
    break;

    case '/logout':
        PessoaController::logout();
    break;

    case '/cadastro':
        if (isset($_SESSION['user'])) {
            header('Location: /home');
            exit();
        }

        PessoaController::cadastro();
    break;

    case '/home':
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
        include 'view/home.php';
    break;

    case '/pessoa':
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
        PessoaController::index();
    break;

    // case '/pessoa/form':
    //     PessoaController::form();
    // break;

    case '/pessoa/form/insert':
        PessoaController::insert();
    break;

    // case '/pessoa/form/update':
    //     PessoaController::update();
    // break;

    // case '/pessoa/form/delete':
    //     PessoaController::delete();
    // break;
}