<?php 
  class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbName = DB_NAME;

    private $dbh;
    private $state;

    public function __construct()
    {
      // dsn = data source name
      $dsn = "mysql:host=$this->host;dbname=$this->dbName";
      $option = [
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

      try{
        $this->dbh = new PDO($dsn, $this->user, '', $option);
      } catch (PDOException $e){
        die($e->getMessage());
      }
    }

    public function query($query){
      $this->state = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = NULL){
      if(is_null($type)){
        switch (true){
          case is_int($value) :
            $type = PDO::PARAM_INT;
            break;
          case is_bool($value) :
            $type = PDO::PARAM_BOOL;
            break;
          case is_null($value): 
            $type = PDO::PARAM_NULL;
            break;
          default :
            $type = PDO::PARAM_STR;
            break;
        }
      }
     $this->state->bindValue($param, $value, $type);
    }

    public function execute(){
      $this->state->execute();
    }

    public function resultSet(){
      $this->execute();
      return $this->state->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single(){
      $this->execute();
      return $this->state->fetch(PDO::FETCH_ASSOC);
    }
    public function listenChange(){
     return $this->state->rowCount();
    }

  }

 ?> 