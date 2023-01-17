<?php

require_once 'models/user.php';

class UserController
{
    public function login()
    {
        if (isset($_POST)) {
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            if ($email && $password) {
                $user = new User();
                $user->setEmail($email);
                $user->setPassword($password);
                $identity = $user->login();

                if ($identity && is_object($identity)) {
                    $_SESSION['user'] = $identity;
                    if ($identity->rol == 'admin') {
                        $_SESSION['admin'] = true;
                    }
                } else {
                    $_SESSION['error_login'] = 'Login failed';
                }
            } else {
                $_SESSION['error_login'] = 'Login failed';
            }
        }
        header("Location:" . base_url);
    }

    public function logout()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }

        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }

        header("Location:" . base_url);
    }

    public function register()
    {
        if (isset($_POST)) {
            $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : false;
            $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            if ($first_name && $last_name && $email && $password) {
                $user = new User();
                $user->setFirst_name($first_name);
                $user->setLast_name($last_name);
                $user->setEmail($email);
                $user->setPassword($password);
                $register = $user->register();

                if ($register) {
                    $_SESSION['register'] = 'complete';
                } else {
                    $_SESSION['register'] = 'failed';
                }
            } else {
                $_SESSION['register'] = 'failed';
            }
        } else {
            $_SESSION['register'] = 'failed';
        }
        header("Location:" . base_url . 'register/index');
    }

    public function save()
    {
        if (isset($_POST)) {
            $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : false;
            $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            $role = isset($_POST['role']) ? $_POST['role'] : false;

            if ($first_name && $last_name && $email && $password) {
                $user = new User();
                $user->setFirst_name($first_name);
                $user->setLast_name($last_name);
                $user->setEmail($email);
                $user->setPassword($password);
                $user->setRol($role);
                $save = $user->save();

                if ($save) {
                    $_SESSION['register'] = 'complete';
                } else {
                    $_SESSION['register'] = 'failed';
                }
            } else {
                $_SESSION['register'] = 'failed';
            }
        } else {
            $_SESSION['register'] = 'failed';
        }
        header("Location:" . base_url);
    }

    public function edit()
    {
        if (isset($_SESSION['user']) || isset($_SESSION['admin'])) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $user = new User();
                $user->setId($id);
                $user = $user->getOne();
                $_SESSION['edit'] = true;
                require_once 'views/pages/register.php';
            } else {
                header("Location:" . base_url . "home/index");
            }
        } else {
            header("Location:" . base_url . "login/index");
        }
    }

    public function create()
    {
        if (isset($_SESSION['user']) || isset($_SESSION['admin'])) {
            $_SESSION['edit'] = false;
            require_once 'views/pages/register.php';
        } else {
            header("Location:" . base_url . "login/index");
        }
    }

    public function update()
    {
        if (isset($_SESSION['user']) || isset($_SESSION['admin'])) {
            if (isset($_POST)) {
                $id = isset($_POST['id']) ? $_POST['id'] : false;
                $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : false;
                $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : false;
                $email = isset($_POST['email']) ? $_POST['email'] : false;
                $password = isset($_POST['password']) ? $_POST['password'] : false;
                $role = isset($_POST['role']) ? $_POST['role'] : false;

                if ($id && $first_name && $last_name && $email && $password) {
                    $user = new User();
                    $user->setId($id);
                    $user->setFirst_name($first_name);
                    $user->setLast_name($last_name);
                    $user->setEmail($email);
                    $user->setPassword($password);
                    $user->setRol($role);
                    $update = $user->update();
                    echo var_dump($update);
                    if ($update) {
                        $_SESSION['register'] = 'complete';
                    } else {
                        $_SESSION['register'] = 'failed';
                    }
                } else {
                    $_SESSION['register'] = 'failed';
                }
            } else {
                $_SESSION['register'] = 'failed';
            }
            header("Location:" . base_url);
        } else {
            header("Location:" . base_url . "login/index");
        }
    }

    public function delete()
    {
        if (isset($_SESSION['user']) || isset($_SESSION['admin'])) {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $user = new User();
                $user->setId($id);
                $delete = $user->delete();
                if ($delete) {
                    $_SESSION['register'] = 'complete';
                } else {
                    $_SESSION['register'] = 'failed';
                }
            } else {
                $_SESSION['register'] = 'failed';
            }
            header("Location:" . base_url);
        } else {
            header("Location:" . base_url . "login/index");
        }
    }

    // profile recibe el id del usuario que se quiere ver

    public function profile()
    {
        if (isset($_SESSION['user']) || isset($_SESSION['admin'])) {
            if (isset($_SESSION['user']->id)) {
                $id = $_SESSION['user']->id;
                $user = new User();
                $user->setId($id);
                $user = $user->getOne();
                $_SESSION['edit_profile'] = true;
                require_once 'views/pages/profile.php';
            } else {
                header("Location:" . base_url . "home/index");
            }
        } else {
            header("Location:" . base_url . "login/index");
        }
    }
}
