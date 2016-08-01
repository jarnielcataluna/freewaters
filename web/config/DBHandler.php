<?php

require_once('config.php');

class DBHandler{
    private $host = DBHOST;
    private $db = DBNAME;
    private $user = DBUSER;
    private $pwd = DBPWD;
    private $port = DBPORT;
    private $pdo;

    public function __construct($host = null, $db = null, $user = null, $pwd = null, $port = null)
    {
        $this->host = $host ? $host : $this->host;
        $this->db = $db ? $db : $this->db;
        $this->user = $user ? $user : $this->user;
        $this->pwd = $pwd ? $pwd : $this->pwd;
        $this->port = $port ? $port : $this->port;
    }

    public function getConnection()
    {
        return $this->pdo;
    }

    public function connect()
    {
        $this->pdo = new PDO(
            'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->db,
            $this->user,
            $this->pwd,
            array(
                PDO::ATTR_PERSISTENT => false
            )
        );

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        if (!$this->pdo) {
            die ("Could not connect to database!\n");
        } else {

        }
    }

    public function isConnected()
    {
        if ($this->pdo) {
            return true;
        } else {
            return false;
        }
    }

    public function buildTables(){
        $sql =  'DROP TABLE IF EXISTS `leads`;
                CREATE TABLE `leads` ( `id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(255) NOT NULL , `code` VARCHAR(25) NOT NULL , `date` DATETIME NOT NULL , `status` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';

        $query = $this->pdo->prepare($sql);
        $query->execute();
    }

    public function buildRaffleTables(){
        $sql =  'DROP TABLE IF EXISTS `leads_raffle`;
                CREATE TABLE `leads_raffle` ( `id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(255) NOT NULL , `code` VARCHAR(25) NOT NULL , `date` DATETIME NOT NULL , `status` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';

        $query = $this->pdo->prepare($sql);
        $query->execute();
    }

    public function insertLead($data){
        if(!is_null($data)){
            $now = new DateTime();
            $email = $data['email'];
            $code = $data['code'];
            $date = $now->format('Y-m-d H:i:s');
            $status = 1;

            $sql = "INSERT INTO `leads` (`email`, `code`, `date`, `status`) VALUES (:email, :code, :date, :status)";
            $query = $this->pdo->prepare($sql);
            if($query->execute(array(
                ':email' => $email,
                ':code' => $code,
                ':date' => $date,
                ':status' => $status
            ))){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }


    public function insertRaffleLead($data){
        if(!is_null($data)){
            $now = new DateTime();
            $email = $data['email'];
            $code = $data['code'];
            $date = $now->format('Y-m-d H:i:s');
            $status = 1;

            $sql = "INSERT INTO `leads_raffle` (`email`, `code`, `date`, `status`) VALUES (:email, :code, :date, :status)";
            $query = $this->pdo->prepare($sql);
            if($query->execute(array(
                ':email' => $email,
                ':code' => $code,
                ':date' => $date,
                ':status' => $status
            ))){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

}