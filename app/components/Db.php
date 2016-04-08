<?php
class Db{
    public function DbConnection(){
        $paramsPath = ROOT . '/app/config/db_params.php';
        $params = include($paramsPath);
        $dsn = "mysql:host=" . $params['host'] . ";dbname=" . $params['db_name'];
        $db = new PDO($dsn, $params['username'], $params['password']);
        return $db;
    }
}
?>