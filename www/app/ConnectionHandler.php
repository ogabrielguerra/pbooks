<?php

    namespace app;
    use \PDO;

    class ConnectionHandler{

        private static $resource = NULL;

        private static function initialize(){
            if(!self::$resource){
                try {
                    $con = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE . ";charset=utf8mb4", USERNAME, PASSWORD);
                }catch(\PDOException $e){
                    throw new \PDOException($e->getMessage(), (int)$e->getCode());
                }
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
                self::$resource = $con;
            }
        }

        public static function getConnRes() : PDO{
            self::initialize();
            return self::$resource;
        }
    }