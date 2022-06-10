<?php //conexao.php
     class Conexao {
        private static $dbNome = 'adocao'; 
        private static $dbHost = 'localhost'; 
        private static $dbUsuario = 'root'; 
        private static $dbSenha = ''; 

        private static $cont = null; 

        public function __construct()
        {
            die("Passei pelo Construtor da Classe Conexão"); 
        }

        public static function conectar(){
            if (self::$cont == null){
                try {       
                self::$cont = new PDO('mysql:host=localhost;dbname=adocao', self::$dbUsuario, self::$dbSenha); 
                            
            }
                catch(PDOException $exception){
                     die ($exception->getmessage()); 
                }
         
           }
           return self::$cont; 
       }

        public static function desconectar() {
            self::$cont = null; 
        }
   }

?>