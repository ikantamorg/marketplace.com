<?php

class Db {

    private static $config = array(
        'username' => 'marketplacephp',
        'password' => 'Kantam#1',
        'host' => 'dropship.dot5hostingmysql.com',
        'dbname' => 'marketplacephp'
    );
    private static $_instance;

    public function addSubscriber($email){
        if(!$this->getSubscriber($email)){
            $stmt = self::getConnect()->prepare("INSERT INTO marketplacephp_subscribe (`email`, `created`) VALUES (:email, :created)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':created', date("Y-m-d H:i:s"));
            $result = $stmt->execute();
        }else{
            $result = true;
        }
        return $result;



    }

    public function getSubscriber($email){

        $stmt = self::getConnect()->prepare("SELECT * FROM marketplacephp_subscribe WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch();

    }

    public static function getConnect($config = null){
        //config db example:$config=array('host'=>'localhost', 'dbname'=>'imp_db', 'username'=>'root', 'password'=>'');
        if(!$config){
            $config = self::$config;
        }
        $_username = $config['username'];
        $_password=$config['password'];
        $_dbname=$config['dbname'];
        $_host=$config['host'];

        if($config){
            self::$_instance=null;
        }


        if(!self::$_instance){
            self::$_instance = new PDO("mysql:host=".$_host.";dbname=".$_dbname, $_username, $_password);
            self::$_instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$_instance;


    }

}

?>