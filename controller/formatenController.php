<?php
    
    class formatenController{

        
        public function cadastraFormaAtendimento( $nomeAtendimento, $dataCadastro, $ativo){
            include_once "../model/formatenmodel.php";
            $formAten = new formatenmodel(1, $nomeAtendimento, $dataCadastro, $ativo );
            $formAten->cadastraFormaAtendimento($formAten);
        }

        public static function cadastranome( $nomeAtendimento, $dataCadastro, $ativo){
            include_once "../model/formatenmodel.php";
            $formAten = new formatenmodel(1, $nomeAtendimento, $dataCadastro, $ativo );
            $formAten->cadastraFormaAtendimento($formAten);
        }

        public function incluirfinal( $nomeAtendimento, $dataCadastro, $ativo){
            include_once "../model/formatenmodel.php";
            $formAten = new formatenmodel(1, $nomeAtendimento, $dataCadastro, $ativo );
            $formAten->incluirfinal($formAten);
        }
        public static function cadastraresposta( $nomeAtendimento, $dataCadastro, $ativo){
            include_once "../model/formatenmodel.php";
            $formAten = new formatenmodel(1, $nomeAtendimento, $dataCadastro, $ativo );
            $formAten->cadastraresposta($formAten);

        }

        public static function listarusuario(){
            include_once "../model/formatenmodel.php";
            $model =new formatenmodel(null,null,null,null); 
            return $model->listarusuario();
        }

        public static function listarFormaAtendimento(){
            include_once "../model/formatenmodel.php";
            $model =new formatenmodel(null,null,null,null); 
            return $model->listarFormaAtendimento();
        }
        public static function listarPublico(){
            include_once "../model/formatenmodel.php";
            $model =new formatenmodel(null,null,null,null); 
            return $model->listarPublico();
        }
        



        public static function resgataPorID($idFormaAtendimento){
            include_once "../model/formatenmodel.php";
            $model =new formatenmodel(null,null,null,null,null); 
            return $model->resgataPorID($idFormaAtendimento);
        }

        function alterarFormaAtendimento($idFormaAtendimento, $nomeAtendimento, $dataCadastro, $ativo){
            include_once "../model/formatenmodel.php";
            $model = new formatenmodel($idFormaAtendimento, $nomeAtendimento, $dataCadastro, $ativo); 
            $model->alterarFormaAtendimento($model);
        }

    }
?>