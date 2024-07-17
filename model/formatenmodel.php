<?php 
    class formatenmodel{

        protected $idFormaAtendimento;
        protected $dataCadastro;
        protected $ativo;
        protected $nomeAtendimento;
    

        function __construct($idFormaAtendimento, $nomeAtendimento, $dataCadastro, $ativo){

            $this->idFormaAtendimento = $idFormaAtendimento;
            $this->nomeAtendimento = $nomeAtendimento;
            $this->dataCadastro = $dataCadastro;
            $this->ativo = $ativo;
            
    
        } 

        function cadastraFormaAtendimento(formatenmodel $formAten){
            include_once "../DAO/formatenDAO.php";
            $atendimento = new formatenDAO();
            $atendimento->cadastraFormaAtendimento($this);
        }

        function incluirfinal(formatenmodel $formAten){
            include_once "../DAO/formatenDAO.php";
            $atendimento = new formatenDAO();
            $atendimento->incluirfinal($this);
        }

        function cadastranome(formatenmodel $formAten){
            include_once "../DAO/formatenDAO.php";
            $atendimento = new formatenDAO();
            $atendimento->cadastraFormaAtendimento($this);
        }

        function cadastraresposta(formatenmodel $formAten){
            include_once "../DAO/formatenDAO.php";
            $atendimento = new formatenDAO();
            $atendimento->cadastraresposta($this);
        }

        function listarusuario(){
            include_once "../DAO/formatenDAO.php";
            $atendimento = new formatenDAO(null);
            return $atendimento->listarusuario();
        }

        function listarFormaAtendimento(){
            include_once "../DAO/formatenDAO.php";
            $atendimento = new formatenDAO(null);
            return $atendimento->listarFormaAtendimento();
        }

        function listarPublico(){
            include_once "../DAO/formatenDAO.php";
            $atendimento = new formatenDAO(null);
            return $atendimento->listarPublico();
        }
        function listarPergunta(){
            include_once "../DAO/formatenDAO.php";
            $atendimento = new formatenDAO(null);
            return $atendimento->listarPergunta();
        }



        function excluirFormaAtendimento($idFormaAtendimento){
            include_once "../DAO/formatenDAO.php";
            $atendimento = new formatenDAO();
            $atendimento->excluirFormaAtendimento($idFormaAtendimento);
        }

        public function resgataPorID($idFormaAtendimento){
            include_once "../dao/formatenDAO.php";
            $dao =new formatenDAO(null); 
            return $dao->resgataPorID($idFormaAtendimento);
        }
 
        public function  alterarFormaAtendimento($model){
            include_once "../DAO/formatenDAO.php";
            $atendimento = new formatenDAO();
            $atendimento->alterarFormaAtendimento($this);    
        
        }           

        public function getidFormaAtendimento(){
            return $this->idFormaAtendimento;
        }

        public function setidFormaAtendimento($idFormaAtendimento){
            $this->idFormaAtendimento = $idFormaAtendimento;
        }
        public function getdataCadastro(){
            return $this->dataCadastro;
        }

        public function setdataCadastro($dataCadastro){
            $this->dataCadastro = $dataCadastro;
        }

        public function getativo(){
            return $this->ativo;
        }
        public function setativo($ativo){
            $this->ativo = $ativo;
        }

        public function getnomeAtendimento(){
            return $this->nomeAtendimento;
        }
        public function setnomeAtendimento($nomeAtendimento){
            $this->nomeAtendimento = $nomeAtendimento;
        }

        
    }


?>