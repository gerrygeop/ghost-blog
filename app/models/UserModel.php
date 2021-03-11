<?php

class UserModel {

    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    
    /* Insert data user yang telah di validasi
    dari controller ke dalam database */
    public function insert($data)
    {
        $query = "INSERT INTO ". $this->table ." (avatar, name, username, email, password) VALUES (:avatar, :name, :username, :email, :password)";

        $this->db->query($query);
        $this->db->bind('avatar', $data['avatar']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        
        return $this->db->rowCount();
    }


    /* Update data user */
    public function update($id)
    {
        // Coming soon
    }

    /* Cari user berdasarkan username */
    public function findUserByUsername($username)
    {
        $query = "SELECT username FROM ". $this->table ." WHERE username = :username";

        $this->db->query($query);
        $this->db->bind('username', $username);
        $this->db->execute();

        if ( $this->db->rowCount() > 0 ) {
            return true;
        } else {
            return false;
        }
    }

    public function loginUser($username, $password)
    {
        $query = "SELECT * FROM ". $this->table ." WHERE username=:username";

        $this->db->query($query);
        $this->db->bind('username', $username);

        $row = $this->db->single();
        $hashPassword = $row['password'];

        if ( password_verify($password, $hashPassword) ) {
            return $row;
        } else {
            return false;
        }
    }
}