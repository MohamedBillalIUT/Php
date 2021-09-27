<?php
require_once 'Conf.php';
class Model{
    private static $pdo= NULL;
    static function init($password,$hostname,$database_name,$login){
        $password->Conf::getpassword();
        $login -> Conf::getLogin();
        $database_name -> Conf::getDatabase();
        $hostname -> Conf::getHostname();
        self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name",$login,$password);


    }

    /**
     * @return null
     */
    public static function getPdo()
    {
        if (self::$pdo.is_null()) {
            return null;
        }
        return self::$pdo;
    }
}

?>