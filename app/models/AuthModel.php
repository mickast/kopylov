<?php

class AuthModel
{
    public $db;

    public function __construct()
    {
        $DbObject = new Db();
        $this->db = $DbObject->DbConnection();
    }

    public function authorization($login, $pass)
    {
        $return = false;
        $pass = $this->db->quote($pass);
        $pdh = $this->db->query("SELECT * from users WHERE username=$login and password=$pass");
        if ($pdh != false) {
            $result = $pdh->rowCount();
            if ($result == 1) {
                $return = $login;
            }
        }
        return $return;
    }
}

?>