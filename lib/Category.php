<?php
    class Category
    {
        private $db;

        public function __construct()
        {
            $this->db=new Database;
        }

        public function getAllCategory()
        {
            $this->db->query("SELECT * FROM category");
            $result=$this->db->resultSet();
            return $result;
        }

        public function getSingleCategory($cate_id)
        {
            $this->db->query("SELECT * FROM category where id= :category ");
            $this->db->bind(":category",$cate_id);
            $result=$this->db->singleResult();
            return $result;
        }
    }
?>