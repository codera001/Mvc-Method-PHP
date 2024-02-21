<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', '_DATABASE NAME_');

// App root
define('APPROOT', dirname(dirname(__FILE__)));

// uRL Root
define('URLROOT','_URL_');

// Site name
define('SITENAME', '_NAME OF SITE_');

// $host = 'localhost';
// $user = 'root';
// $password = '';
// $dbname = 'mvcmethods';

// set DSN(Data source name)
// $dsn = 'mysql:host=' . $host . ';dbname=' .$dbname;

// create a PDO instance to prevent sql injections
// $pdo = new PDO($dsn, $user, $password);
// $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// $status = 'admin';
// $sql = "SELECT * FROM users WHERE status =:status";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['status' => $status]);
// $users = $stmt->fetchAll();

// foreach($users as $user){
//     echo $user->name. '<br>';
// }

// $sql = 'INSERT INTO users(name, email, status) VALUES(:name, :email, :status)';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['name' => $name, 'email' => $email, 'status' => $status ]);
// echo 'Added user';