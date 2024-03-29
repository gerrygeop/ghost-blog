<?php

class BlogModel {

    private $tbl_blogs = 'blogs';
    private $tbl_users = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBlogs()
    {
        $query = "SELECT u.id, u.name, u.avatar, b.id, b.cover, b.title, b.content, b.created_at FROM ".
                    $this->tbl_blogs.
                    " as b JOIN ".
                    $this->tbl_users.
                    " as u ON u.id = b.user_id ORDER BY b.id DESC";

        $this->db->query($query);
        
        return $this->db->resultSet();
    }


    public function getBlogByIdWithUser($id)
    {
        $query = "SELECT u.id, u.name, u.avatar, b.id, b.cover, b.title, b.content, b.created_at FROM ". 
                    $this->tbl_blogs.
                    " as b JOIN ".
                    $this->tbl_users.
                    " as u ON u.id = b.user_id".
                    " WHERE b.id=:id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        return $this->db->single();
    }


    public function getBlogById($id)
    {
        $query = "SELECT * FROM ". $this->tbl_blogs ." WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        return $this->db->single();
    }


    public function getAllBlogByUserId($userId)
    {
        $query = "SELECT * FROM ". $this->tbl_blogs ." WHERE user_id=:user_id ORDER BY id DESC";

        $this->db->query($query);
        $this->db->bind('user_id', $userId);

        return $this->db->resultSet();
    }


    public function insertBlog($data)
    {
        $query = "INSERT INTO ". $this->tbl_blogs ." (user_id, cover, title, content, created_at) VALUES (:user_id, :cover, :title, :content, :created_at)";

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
    }*/

    public function deleteBlog($id)
    {
        $query = "DELETE FROM ". $this->tbl_blogs ." WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}