<?php
class Banco{
    static $dbNome ='banco_projeto';
    static $dbHost ='localhost';
    static $dbUsuario ='root';
    static $dbSenha ='';
    static $con = null;

    public function __construct(){
        die('');

    }
    public static function conectar(){
        if(null == self::$con){
            try{
                self::$con = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbNome, self::$dbUsuario,self::$dbSenha);
                }catch(PDOException $exception){
                    die($exception->getMessage());
                }
            }
            return self::$con;
        }
        public static function desconectar(){
            self::$con = null;
        }
    }

?>