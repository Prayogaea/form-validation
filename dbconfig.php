<?php
    class Database
    {
        
        private $host = "localhost";
        private $db_name = "login_lengkap";
        private $username = "maria";
        private $password = "prayogaea123";
        public $conn;
        
        public function dbConnection()
        {
        
        $this->conn = null;    
            try
            {
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            }
        catch(PDOException $exception)
            {
                echo "Connection error: " . $exception->getMessage();
            }
            
            return $this->conn;
        }
    }
?>