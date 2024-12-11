<?php 

    function db_conection(){
        $HOST = '127.0.0.1';
        $USER = 'root';
        $PASS = '';
        $SERVER_PORT = '3306';
        $DB_NAME = 'Student_Data';

        try {
            $pdo = new PDO("mysql:localhost=$HOST, port=$SERVER_PORT", $USER, $PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "CREATE DATABASE IF NOT EXISTS $DB_NAME";
            $pdo->exec($sql);

            $pdo->exec("USE $DB_NAME");
            
            return $pdo;
        } catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
        }
    }
    db_conection();

 ?>