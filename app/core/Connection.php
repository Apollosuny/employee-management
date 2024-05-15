<?php 

class Connection {
    private static $instance = null, $conn = null;

    private function __construct($config)
    {

        // Connect database
        try {
            $connection = @mysqli_connect($config['host'], $config['user'], $config['password'], $config['databaseName'], '3308');
            self::$conn = $connection;
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