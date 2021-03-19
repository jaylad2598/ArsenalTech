<?php
    class Post{
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function findAllPosts()
        {
            $this->db->query('select * from posts ORDER BY createat ASC');
            $result = $this->db->resultSet();
            return $result;
        }

        public function addPost($data)
        {
            $user_id = $_SESSION['user_id'];
            $this->db->query('INSERT INTO posts(user_id,title,body) values(:user_id,:title,:body)');
            $this->db->bind('user_id',$user_id);
            $this->db->bind('title',$data['title']);
            $this->db->bind('body',$data['body']);

            if($this->db->execute())
            {
                return true;
            }
            else{

                return false;
            }
        }

        public function findPostById($id)
        {
            $this->db->query("select * from posts where id= :id");
            $this->db->bind(':id', $id);
            $row = $this->db->single();
            return $row;
        }

        public function findUserBlog($id)
        {
            $this->db->query("select * from posts where user_id= :id");
            $this->db->bind(':id', $id);
            $row = $this->db->resultSet();
            return $row;
        }

        public function updatePost($data)
        {
            $this->db->query('update posts SET title =:title,body =:body where id= :id');
            $this->db->bind(':id',$data['id']);
            $this->db->bind(':title',$data['title']);
            $this->db->bind(':body',$data['body']);

            if($this->db->execute())
            {
                return true;
            }
            else{

                return false;
            }
        }

        public function deletePost($id)
        {
            $this->db->query('delete from posts where id=:id');
            $this->db->bind(':id',$id);
            if($this->db->execute())
            {
                return true;
            }
            else{
                return false;
            }
        }
    }