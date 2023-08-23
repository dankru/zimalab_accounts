<?php
// Default model

class Model {
    protected $db = null;

    public function __construct() {
        $this -> db = DB::connToDB();
    }

    public function select($table, $params) {
        $sql = 'SELECT * FROM ' . $table;

        // add params to query
        if (!empty($params)){
            $i = 0;
            foreach ($params as $param => $value){
                if (!is_numeric($value)) {
                    $value = "'".$value."'";
                }
                if ($i === 0) {
                    $sql = $sql . " WHERE $param = $value";
                }
                else {
                    $sql = $sql . " AND $param = $value";
                }
                $i++;

            }
        }
        $query = $this->db->prepare($sql." ORDER BY id DESC");
        $query -> execute();
        $err = $query -> errorInfo();
        if ($err[0] !== PDO::ERR_NONE) {
            echo($err);
            exit();
        }
        return $query->fetchAll();
    }
    public function insert($table, $params)
    {
        $columns = '';
        $values = '';
        // convert params to proper query string
        foreach($params as $key => $value) {
            $columns = implode(', ', array_keys($params));
            $values = implode(', ', array_map(function ($item) {return "'" . "$item" . "'";}, array_values($params)));
        }
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        $query = $this->db->prepare($sql);
        $query->execute();
    }
    public function checkUser($email, $password){
        $sql = "SELECT * FROM account WHERE email = :email AND password = :password";

        $query = $this->db->prepare($sql);
        // pass email and pass parameters to placeholders
        $query->bindValue(":email", $email, PDO::PARAM_STR);
        $query->bindValue(":password", $password, PDO::PARAM_STR);
        $query->execute();

        $res = $query->fetch(PDO::FETCH_ASSOC);
        if(!empty($res)){
            return $res;
        } else {
            return false;
        }
    }
}
