<?php

declare(strict_types=1);

namespace Controllers;

use App\Auth;
use App\User;

class AuthController
{

    public function login(): void
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        (new Auth())->login($username, $password);
    }

    public function logout(): void
    {
        session_start();
        session_destroy();
        redirect('/login');
        exit();
    }

    public function register(): void
    {
        $userName   = $_POST['name'];
        $userEmail = $_POST['email'];
        $position   = $_POST['position'];
        $password   = $_POST['password'];
        $gender     = $_POST['gender'];
        $phone      = $_POST['phone'];
        if((new User())->isUserExists($userName)){
            echo "user already exists";
        }
        else{
            (new User())->createUser($userName, $userEmail, $position, $password, $gender, $phone);
            header("Location: /");
            exit();
        }
    }


}