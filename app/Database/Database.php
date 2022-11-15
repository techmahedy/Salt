<?php

namespace App\Database;

use PDO;

class Database
{  
   public PDO $pdo;

   public function __construct(array $config)
   {   
        $config = $config['db'];
        
        $dsn = "{$config['connection']}:host={$config['host']};port={$config['port']};dbname={$config['database']}";
        $user = $config['user'] ?: '';
        $password = $config['password'] ?: '';

        $this->pdo = new PDO($dsn, $user, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        dd('connection successfull');
   }
}