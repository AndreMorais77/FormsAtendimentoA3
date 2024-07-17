<?php 
    class perguntaDAO{
        protected $conn;

        function listarPergunta(){
            include_once 'conexaopergunta.php';
            $conex = new conexaopergunta();
            $conex->fazConexao();
            $sql="SELECT * FROM perguntapublico ORDER BY descricaoPergunta";
            return $conex->conn->query($sql);
    }

    function pegaid(){
        include_once 'conexaopergunta.php';
        $conex = new conexaopergunta();
        $conex->fazConexao();
        $sql="SELECT * FROM atendimento WHERE respostaAtendimento";
        return $conex->conn->query($sql);
    }

    function pegaidpergunta(){
        include_once 'conexaopergunta.php';
        $conex = new conexaopergunta();
        $conex->fazConexao();
        $sql="SELECT * FROM perguntapublico order by idPerguntaPulbico";
        return $conex->conn->query($sql);
    }


    function pegaidpublico(){
        include_once 'conexaopergunta.php';
        $conex = new conexaopergunta();
        $conex->fazConexao();
        $sql="SELECT * FROM publico WHERE idPublico";
        return $conex->conn->query($sql);
    }
    function listartipoAten(){
        include_once 'conexaopergunta.php';
        $conex = new conexaopergunta();
        $conex->fazConexao();
        $sql="SELECT * FROM tipoatendimento ORDER BY idtipoatendimento";
        return $conex->conn->query($sql);
}
    function listarid(){
        include_once 'conexaopergunta.php';
        $conex = new conexaopergunta();
        $conex->fazConexao();
        $id_desejado = 2;
        $sql="SELECT * FROM publico WHERE idPublico";
        return $conex->conn->query($sql);
    }
}
?>