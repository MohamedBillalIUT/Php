<?php
require_once 'Conf.php';
class Model{
    private static $pdo= null;
    static function init(){
        $password=Conf::getpassword();
        $login=Conf::getLogin();
        $database_name =Conf::getDatabase();
        $hostname = Conf::getHostname();
        try {
            self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $login, $password);
        } catch (PDOException $e){
            echo $e ->getMessage();

// On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            die();
        }
    }

    /**
     * @return null
     */
    public static function getPDO()
    {
        if (is_null(self::$pdo)) {
            self::init();
        }
        return self::$pdo;
    }

}
?>