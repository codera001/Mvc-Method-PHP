<?php
// *PDO Database Class
// *Connect to database
// *Create prepared statements
// *Bind values
// $Return rows and results

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    // Whenever we prepare our database we make use of the handler
    private $dbh;
    private $stmt;
    private $error;

    // to access a property within a class we make use of the this keyword
    public function __construct()
    {
        //    set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            //   for persistent connections, it can increase performance by checking if its established with the database
            PDO::ATTR_PERSISTENT => true,
            // to handle and throw errors, silent, warning, exceptions
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        // Create PDO instance
        try {
           $this->dbh = new PDO($dsn, $this->user, $this->pass, $options); 
        }catch(PDOException $e){
          $this->error = $e->getMessage();
          echo $this->error;
        }
    }

    // prepare statements with query
    public function query($sql){
        $this->stmt = $this->dbh->prepare($sql);

    }

    //bind values
    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    

            }
        }
        $this->stmt->bindValue($param, $value, $type);      
    }


    // execute the prepared statement
    public function execute(){
       return $this->stmt->execute(); 
    }

    // get result set as an array of objects
   public function resultSet(){
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_OBJ);
   }

//    get single record as object
   public function single(){
    return $this->stmt->fetchAll(PDO::FETCH_OBJ);
   }

   public function rowCount(){
    return $this->stmt->rowCount();
   }
}