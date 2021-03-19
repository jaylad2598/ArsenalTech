<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function register($data)
    {
        $this->db->query('insert into users(username,email,password,contact,createdate) values (:username,:email,:password,:contact,:createdate)');

        //bind value
        $this->db->bind('username',$data['username']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('password',$data['password']);
        $this->db->bind('contact',$data['contact']);
        $this->db->bind('createdate',$data['createdate']);

        //execute function
        if($this->db->execute())
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function login($username,$password)
    {
        $this->db->query('select * from users where username = :username');
        $this->db->bind(':username',$username);
        $row = $this->db->single();
        $hashedPassword = $row->password;

        if(password_verify($password,$hashedPassword))
        {
            return $row;
        }
        else{
            return false;
        }
    }

    public function findUserByEmail($email)
    {
        $this->db->query('select * from users where email = :email');
        $this->db->bind('email',$email);

        if($this->db->rowCount() >0)
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function getUsers() {
        $this->db->query("SELECT * FROM users");

        $result = $this->db->resultSet();

        return $result;
    }

}
