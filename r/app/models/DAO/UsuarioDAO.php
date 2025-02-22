<?php

use app\models\ModelDAO;

class UsuarioDAO extends ModelDAO
{

    public function __construct()
    {
        parent::__construct('usuario');
    }

    public function obterUsuarioLogin($login): array|null
    {
        $query = $this->conn->prepare(
            "SELECT * from usuario WHERE e_mail = :email AND senha = :senha");
        $query->bindValue("email", $login['email']);
        $query->bindValue("senha", $login['senha']);
        $query->execute();
        $usuario = null;

        if ($query->rowCount() > 0) {
            $usuario = $query->fetch();
        }

        return $usuario;
    }
}
