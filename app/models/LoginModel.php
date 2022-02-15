<?php
class LoginModel
{
    private $table = 'user';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function checkLogin($data)
    {
        $query = "SELECT * FROM tbl_admin WHERE nama = :nama AND katasandi =:katasandi";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('katasandi', $data['katasandi']);
        $data = $this->db->single();
        return $data;
    }
}