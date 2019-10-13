<?php

class Usuario{

    private $id_usuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;


    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    public function getDeslogin()
    {
        return $this->deslogin;
    }

    public function setDeslogin($deslogin)
    {
        $this->deslogin = $deslogin;
    }

    public function getDessenha()
    {
        return $this->dessenha;
    }

    public function setDessenha($dessenha)
    {
        $this->dessenha = $dessenha;
    }

    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    public function setDtcadastro($dtcadastro)
    {
        $this->dtcadastro = $dtcadastro;
    }

    public function loadById($id) {

            $sql= new Sql();

            $results = $sql->select("Select*from tb_usuarios where id_usuario=:ID", array(
                ":ID"=>$id

        ));
            if(count($results)>0){
                $row = $results[0];
                $this->setIdUsuario($row['id_usuario']);
                $this->setDeslogin($row['deslogin']);
                $this->setDessenha($row['dessenha']);
                $this->setDtcadastro(new DateTime($row['dtcadastro']));
            }
    }

    public function __toString()
    {
        return json_encode(array(
            "id_usuario"=>$this->getIdUsuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha()
        ));
    }








}

?>