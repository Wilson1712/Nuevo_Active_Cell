<?php 
    class Index extends Controlador{
        public function __construct(){
            parent::__construct();
        }

        public function index(){
           // echo "Metodo index";
           $this->view->render($this,"index");
        }

        public function userlogin(){
            if(isset($_POST["email"]) && isset($_POST["password"])){
                echo $this->model->userlogin($_POST["email"], $_POST["password"]);
            }
        }

    }
?>