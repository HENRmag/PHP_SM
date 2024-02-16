<?php

    abstract class Connection{
        private static $conn;
        public static function getConn(){
            $servername = "localhost";
            $username = "root";
            $password = "root";
            // if(self::$conn = null){
            //     self::$conn = new PDO("mysql: host=localhost; dbname=L3Inf;","root","root");
            //}
            return self::$conn;
            try{
                self::$conn = new PDO("mysql: host=$servername; dbname=L3Inf;", $username, $password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
            }catch(PDOException $e){
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }
?>