<?php
    class perguntacontroller{

        
        
        public static function listarPergunta(){
            include_once "../perguntamodel/perguntamodel.php";
            $model =new perguntamodel(null,null,null,null,null); 
            return $model->listarPergunta();
        }
        public static function listarTipoAten(){
            include_once "../perguntamodel/perguntamodel.php";
            $model =new perguntamodel(null,null,null,null,null); 
            return $model->listarTipoAten();
        }
        
        public static function pegaid(){
            include_once "../perguntamodel/perguntamodel.php";
            $model =new perguntamodel(null,null,null,null,null); 
            return $model->pegaid();
        }

        public static function pegaidpergunta(){
            include_once "../perguntamodel/perguntamodel.php";
            $model =new perguntamodel(null,null,null,null,null); 
            return $model->pegaid();
        }
        public static function pegaidpublico(){
            include_once "../perguntamodel/perguntamodel.php";
            $model =new perguntamodel(null,null,null,null,null); 
            return $model->pegaidpublico();
        }
        
        
        public static function listarid(){
            include_once "../perguntamodel/perguntamodel.php";
            $model =new perguntamodel(null,null,null,null,null); 
            return $model->listarid();
        }
    }

?>