<?php
// Singleton to connect db.
// For those that read comments, this is a design pattern !
// Check it out.
class DBConnection extends PdoStatement{
    // Hold the class instance.
    private static $instance = null;
    private $conn;

    private $host = 'localhost:3308';

    private $user = 'root';
    private $pass = '';
    private $name = 'portfoliov3';

    // The db connection is established in the private constructor.
    private function __construct()
    {
      $this->conn = new PDO("mysql:host={$this->host};
      dbname={$this->name}",$this->user,$this->pass);
    }

    public static function getInstance()
    {
      if(!self::$instance)
      {
        self::$instance = new DBConnection();
      }

      return self::$instance;
    }

    public function getConnection()
    {
      return $this->conn;
    }
  }
  ?>