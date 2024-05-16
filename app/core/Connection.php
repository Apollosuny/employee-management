<?php 

class Connection {
    private static $instance = null, $conn = null;

    private function __construct($config)
    {
        // Connect database
        try {
            $connection = @mysqli_connect($config['host'], $config['user'], $config['password'], $config['databaseName'], $config['port']);
            self::$conn = $connection;
        } catch (Exception $exception) {
            App::$app->loadError('connection-error');
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