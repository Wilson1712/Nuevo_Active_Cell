<?php
    class Index_modelo extends Conexion{
        function __construct(){
           parent::__construct();
        }

        function userlogin($email, $password){
            $clausula = "Email = :Email";
            $parametro = array('Email' => $email);
            $responsive = $this->db->select1("*",'usuarios',$clausula,$parametro);
            return $responsive;
        }
    }
?>
