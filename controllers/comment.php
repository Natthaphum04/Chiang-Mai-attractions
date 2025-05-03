<?php 

include './DB/db.php';

class comment {
    private $db;
    private $name;
    private $comment;
    private $table = "tbl_comment";

    public function __construct(){
        $this->db = new DB();
    }

    public function setData($name, $comment) {
        $this->name = $name;
        $this->comment = $comment;
    }

    public function create(){
        $query = "INSERT INTO $this->table(name, comment, comment_time) VALUE ('$this->name', '$this->comment', now())";
        $insert_comment = $this->db->insert($query);
        return $insert_comment;
    }

    public function index(){
        $query = "SELECT * FROM $this->table ORDER BY id DESC";
        $result = $this->db->select($query);
        return $result;
    }

    public function dataFormat($data){
        date_default_timezone_set('Asia/Bangkok');
        $data = date('M j, h:i:s a', time());
        return $data;
    }

}


?>