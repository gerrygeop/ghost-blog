<?php

class BlogModel {

    private $table = 'blogs';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBlogs()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    /* 
    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    } */

    public function insertBlog($data)
    {
        $query = "INSERT INTO ". $this->table ." (user_id, cover, title, content, created_at) VALUES (:user_id, :cover, :title, :content, :created_at)";

        $this->db->query($query);
        $this->db->bind('user_id', $data['userId']);
        $this->db->bind('cover', $data['cover']);
        $this->db->bind('title', $data['title']);
        $this->db->bind('content', $data['content']);
        $this->db->bind('created_at', $data['createdAt']);
        $this->db->execute();

        return $this->db->rowCount();
    }

   /*  public function updateMahasiswa($data)
    {
        $query = "UPDATE ". $this->table ." SET nama = :nama, nim = :nim, jurusan = :jurusan WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusMahasiswa($id)
    {
        $query = "DELETE FROM ". $this->able ." WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    } */
}