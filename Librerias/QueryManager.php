<?php
    class QueryManager{
        private $pdo;
        function __construct($user,$pass,$db){
            try{
                $this->pdo = new PDO('mysql:host=localhost;dbname='.$db.';charset=utf8',$user,$pass,
                [
                    PDO::ATTR_EMULATE_PREPARES=> false,
                    PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
                ]
            );
            }catch(PDOException $e){
                print "!Error¡".$e->getMessage();
                die();
            }
        }
        function select1($attr,$tablas,$clausula,$parametro){
            try{
                if($clausula==""){
                    $query ="SELECT ".$attr." FROM ".$tablas;
                }else{
                    $query ="SELECT ".$attr." FROM ".$tablas." WHERE ".$clausula;
                }
                $sth = $this->pdo->prepare($query);
                $sth->execute($parametro);
                $responsive - $sth->fetch(PDO::FETCH_ASSOC);
                return array("results"=> $responsive);
            }catch(PDOException $e){
                return $e->getMessage();
            }
            $pdo - null;
        }
    }

?>