<?php

    class perguntamodel{
        protected $idperguntapublico;
        protected $descricaopergunta;
        protected $datacadastro;
        protected $nomePublico;
        protected $ativo;


        function __construct($idperguntapublico, $descricaopergunta, $datacadastro, $ativo, $nomePublico)
        {
            $this->idperguntapublico = $idperguntapublico;
            $this->descricaopergunta = $descricaopergunta;
            $this->datacadastro = $datacadastro;
            $this->ativo = $ativo;
            $this->nomePublico = $nomePublico;


        }

        public function getidperguntapublico(){
            return $this->idperguntapublico;
        }

        public function setidperguntapublico($idperguntapublico){
            $this->idperguntapublico = $idperguntapublico;
        }

        public function getdescricaopergunta(){
            return $this->descricaopergunta;
        }

        public function setdescricaopergunta($descricaopergunta){
            $this->descricaopergunta = $descricaopergunta;
        }

        public function getdatacadastro(){
            return $this->datacadastro;
        }

        public function setdatacadastro($datacadastro){
            $this->datacadastro = $datacadastro;
        }

        public function getativo(){
            return $this->ativo;
        }

        public function setativo($ativo){
            $this->ativo = $ativo;
        }
        public function getnomePublico(){
            return $this->nomePublico;
        }
        public function setnomePublico($nomePublico){
            $this->nomePublico = $nomePublico;
        }

        function listarPergunta(){
            include_once "../perguntaDAO/perguntaDAO.php";
            $atendimento = new perguntaDAO(null);
            return $atendimento->listarPergunta();
        }

        
        function pegaid(){
            include_once "../perguntaDAO/perguntaDAO.php";
            $atendimento = new perguntaDAO(null);
            return $atendimento->pegaid();
        }

        function pegaidpergunta(){
            include_once "../perguntaDAO/perguntaDAO.php";
            $atendimento = new perguntaDAO(null);
            return $atendimento->pegaid();
        }
        function pegaidpublico(){
            include_once "../perguntaDAO/perguntaDAO.php";
            $atendimento = new perguntaDAO(null);
            return $atendimento->pegaidpublico();
        }
        function listarTipoAten(){
            include_once "../perguntaDAO/perguntaDAO.php";
            $atendimento = new perguntaDAO(null);
            return $atendimento->listarTipoAten();
        }

        function listarid(){
            include_once "../perguntaDAO/perguntaDAO.php";
            $atendimento = new perguntaDAO(null);
            return $atendimento->listarid();
        }


    }

?>