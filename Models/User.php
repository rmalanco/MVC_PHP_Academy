<?php

class User
{
    private $id;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $rol;
    private $image;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFirst_name()
    {
        return $this->first_name;
    }

    public function getLast_name()
    {
        return $this->last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setFirst_name($first_name)
    {
        $this->first_name = $this->db->real_escape_string($first_name);
    }

    public function setLast_name($last_name)
    {
        $this->last_name = $this->db->real_escape_string($last_name);
    }

    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getAll()
    {
        $users = $this->db->query("SELECT * FROM users");
        return $users;
    }

    public function getOne()
    {
        $user = $this->db->query("SELECT * FROM users WHERE id = {$this->getId()}");
        return $user->fetch_object();
    }

    public function login()
    {
        $result = false;
        $email = $this->email;
        $password = $this->password;

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $login = $this->db->query($sql);

        if ($login && $login->num_rows == 1) {
            $user = $login->fetch_object();
            $verify = password_verify($password, $user->password);
            if ($verify) {
                $result = $user;
            }
        }
        return $result;
    }

    public function register()
    {
        $sql = "INSERT INTO users (first_name, last_name, email, password, rol) VALUES('{$this->getFirst_name()}', '{$this->getLast_name()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user')";
        $save = $this->db->query($sql);
        $result = ($save) ? true : false;
        return $result;
    }

    public function save()
    {
        $sql = "INSERT INTO users (first_name, last_name, email, password, rol) VALUES('{$this->getFirst_name()}', '{$this->getLast_name()}', '{$this->getEmail()}', '{$this->getPassword()}', '{$this->getRol()}')";
        $save = $this->db->query($sql);
        $result = ($save) ? true : false;
        return $result;
    }

    public function update()
    {
        $sql = "UPDATE users SET first_name = '{$this->getFirst_name()}', last_name = '{$this->getLast_name()}', email = '{$this->getEmail()}', password = '{$this->getPassword()}', rol = '{$this->getRol()}' WHERE id = {$this->id}";
        $update = $this->db->query($sql);
        $result = ($update) ? true : false;
        return $result;
    }

    public function delete()
    {
        $sql = "DELETE FROM users WHERE id = {$this->id}";
        $delete = $this->db->query($sql);
        $result = ($delete) ? true : false;
        return $result;
    }
}
