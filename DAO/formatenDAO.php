<?php
    class formatenDAO{

        protected $conn;
        
        function cadastraFormaAtendimento(formatenmodel $formAten){
            include_once 'conexaoformaten.php';
            $conex = new conexaoformaten();
            $conex-> fazConexao();
            $sql = "INSERT INTO atendimento (idFormaAtendimento, idPerguntaPublico, idUsuario, respostaAtendimento, dataCadastro, ativo )  VALUES (1,1,1, :respostaatendimento, :dataCadastro, :ativo)";
            $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':respostaatendimento', $formAten->getnomeAtendimento());
            $stmt->bindValue(':dataCadastro', $formAten->getdataCadastro());
            $stmt->bindValue(':ativo', $formAten->getativo());
            $res = $stmt->execute();
            print "<script>location.href='../view/teste.php'</script>";

        }

        function cadastranome(formatenmodel $formAten){
            include_once 'conexaoformaten.php';
            $conex = new conexaoformaten();
            $conex-> fazConexao();
            $sql = "INSERT INTO perfil (nomePerfil, dataCadastro, ativo )  VALUES (:nomePerfil, :dataCadastro, :ativo)";
            $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':nomePerfil', $formAten->getnomeAtendimento());
            $stmt->bindValue(':dataCadastro', $formAten->getdataCadastro());
            $stmt->bindValue(':ativo', $formAten->getativo());
            $res = $stmt->execute();
        }

        public function cadastraresposta(formatenmodel $formAten){
            include_once 'conexaoformaten.php';
            $conex = new conexaoformaten();
            $conex-> fazConexao();
            $sql = "INSERT INTO atendimento (idFormaAtendimento, idPerguntaPublico, idUsuario, respostaAtendimento, dataCadastro, ativo )  VALUES (1,1,1, :respostaatendimento, :dataCadastro, :ativo)";
            $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':respostaatendimento', $formAten->getnomeAtendimento());
            $stmt->bindValue(':dataCadastro', $formAten->getdataCadastro());
            $stmt->bindValue(':ativo', $formAten->getativo());
            $res = $stmt->execute();

            print "<script>location.href='../view2/bloco3form.php'</script>";

        }

        function incluirfinal(formatenmodel $formAten){
            include_once 'conexaoformaten.php';
            $conex = new conexaoformaten();
            $conex-> fazConexao();
            $sql = "INSERT INTO atendimento (idFormaAtendimento, idPerguntaPublico, idUsuario, respostaAtendimento, dataCadastro, ativo )  VALUES (1,1,1, :respostaatendimento, :dataCadastro, :ativo)";
            $stmt = $conex->conn->prepare($sql);
            $stmt->bindValue(':respostaatendimento', $formAten->getnomeAtendimento());
            $stmt->bindValue(':dataCadastro', $formAten->getdataCadastro());
            $stmt->bindValue(':ativo', $formAten->getativo());
            $res = $stmt->execute();

            print "<script>location.href='../view2/bloco4.php'</script>";

        }

        function listarusuario(){
            include_once 'conexaoformaten.php';
            $conex = new conexaoformaten();
            $conex->fazConexao();
            $sql="SELECT * FROM usuario ORDER BY idUsuario";
            return $conex->conn->query($sql);
        }
        
        function listarFormaAtendimento(){
            include_once 'conexaoformaten.php';
            $conex = new conexaoformaten();
            $conex->fazConexao();
            $sql="SELECT * FROM formaatendimento ORDER BY idFormaAtendimento";
            return $conex->conn->query($sql);
        }

        function listarPublico(){
            include_once 'conexaoformaten.php';
            $conex = new conexaoformaten();
            $conex->fazConexao();
            $sql="SELECT * FROM publico ORDER BY idPublico";            
            return $conex->conn->query($sql);
        }

       /* function listarPergunta(){
            include_once 'conexaoformaten.php';
            $conex = new conexaoformaten();
            $conex->fazConexao();
            $sql="SELECT * FROM publico ORDER BY idPublico";
            return $conex->conn->query($sql);
        }*/

    function excluirFormaAtendimento($idFormaAtendimento){
        include_once 'conexaoformaten.php';
        $conex = new conexaoformaten();
        $conex->fazConexao();
        $sql="DELETE FROM formaatendimento WHERE idFormaAtendimento=".$idFormaAtendimento;
        $res = $conex->conn->query($sql);
        if ($res) {
            echo "<script>alert('Exclusão realizada com sucesso!!!');</script>";
        }
        else
        {
            echo "<script>alert('Erro: não foi possível realizar a exclusão!!!');</script>";
        }
        echo "<script>location.href='../controller/processaAuto.php?op=Listar';</script>";

    }

    function resgataPorID($idFormaAtendimento){
        include_once 'Conconexaoformatenexao.php';
        $conex = new conexaoformaten();
        $conex->fazConexao();
        $sql ="SELECT * FROM formaatendimento WHERE idFormaAtendimento='$idFormaAtendimento'";
        return $conex->conn->query($sql);
    }

    function alterarFormaAtendimento(formatenmodel $formaten){
        include_once 'conexaoformaten.php';
        $conex = new conexaoformaten();
        $conex->fazConexao();
        $sql ="UPDATE formaatendimento SET nomeAtendimento = :nomeAtendimento, dataCadastro = :dataCadastro, ativo = :ativo WHERE idFormaAtendimento = :idFormaAtendimento"; 
        $stmt = $conex->conn->prepare($sql);
        $stmt->bindValue(':idFormaAtendimento',$auto->getidFormaAtendimento());
        $stmt->bindValue(':nomeAtendimento',$auto->getnomeAtendimento());
        $stmt->bindValue(':dataCadastro',$auto->getdataCadastro());
        $stmt->bindValue(':ativo',$auto->getativo());
        
        $res = $stmt->execute();
        if ($res) {
            echo "<script>alert('Alteração realizada com sucesso!!!');</script>";
        }
        else
        {
            echo "<script>alert('Erro: não foi possível realizar a alteração!!!');</script>";
        }
        echo "<script>location.href='../controller/processaAuto.php?op=Listar';</script>";

    }
    }
?>