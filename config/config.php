<?php

require 'constants.php';

class Database{
    public $con;
    public function __construct(){
        $pdoOptions=array(
    
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES=>false
    );
    try{
    $this->con =new PDO(
        "mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DATABASE, //DSN
            
        MYSQL_USER, 
        MYSQL_PASSWORD, 
        $pdoOptions 
            
            );
       // die('connected');
    }
    catch(PDOException $ex){
        echo('not connected');

    }
        

        }
}
$obj = new Database;

?>