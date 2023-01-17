<?php

require_once 'models/user.php';

class HomeController
{
    private  $title;
    public function index()
    {
        if (isset($_SESSION['user']) || isset($_SESSION['admin'])) {
            $users = new User();
            $users = $users->getAll();
            require_once 'views/pages/home.php';
        } else {
            header("Location:" . base_url . "login/index");
        }
    }
}
