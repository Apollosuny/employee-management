<?php 

class Connection {
    private static $instance = null, $conn = null;

    private function __construct($config)
    {

        // Connect database
        try {
            $dsn = 'mysql:dbname='.$config['databaseName'].';host='.$config['host'];
            $options = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];
            $connect = new PDO($dsn, $config['user'], $config['password'], $options);
            self::$conn = $connect;
        } catch (Exception $exception) {
            $mess = $exception->getMessage();
            App::$app->loadError('404', ['messages'=>$mess]);
            die();
        }
    }

    public static function getInstance($config) {
        if (self::$instance == null) {
            $connection = new Connection($config);
            self::$instance = self::$conn;
        }

        return self::$instance;
    }
}