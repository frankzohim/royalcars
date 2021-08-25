<?php

/**
* MySQLi Database class for PHP5.*, PHP7.* & PHP8.*
* The class contains main functions to manage your database.
* created 20.08.2021
* updated: 20.08.2021
* 
* @author Frank Zohim   
*/

namespace app\Models;
class Database {
    protected $host;
    protected $database;
    protected $user;
    protected $password;
    public $link;
    
  /**
  * Sets the connection credentials to connect to your database.
  *
  * @param string $host - the host of your database
  * @param string $database - your database name
  * @param string $user - the username of your database
  * @param string $password - the password of your database
  * @return resource $link
  */
    
    public function __construct($host,$database,$user,$password) {
        $this->host = $host;
        $this->database = $database;
        $this->user = $user;
        $this->password = $password;
    }
    
  /**
  * Connect to the database with credentials initailize in the __construct method.
  * @return resource $link
  */
    
    public function connect(){
        try {
            #using \ before PDO for calling global namespace since the class is using a local namespaces
            $this->link = new \PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
            // set the PDO error mode to exception
            $this->link->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $this->link;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}


