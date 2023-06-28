
<?php
class Login  {
    private $db;
    private $usuarios;
    private $pass;
    private $retorno;

    public function __construct($conexion, $usuarios, $pass) {
        $this->db = $conexion;
        $this->usuarios = $usuarios;
        $this->pass = $pass;
    }

    private function limpiarInput($data) {
        //$data = trim($data);
        // $data = stripslashes(trim($data));
        return htmlspecialchars(stripslashes(trim($data)));
    }
    public function existeUsuario() : bool {
        $retorno = false;
        $query = "SELECT nombre FROM usuario WHERE nombre = '$this->usuarios'";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        if (count($result) > 0) $retorno = true;
        return $retorno;
    }

    public function iniciarSesion() {
        //$retorno = [];
        $query = "SELECT 
                    id,
                    tipo
                    FROM usuario
                    WHERE nombre = '$this->usuarios' 
                    AND contraseña = '$this->pass'";
        $statement = $this->db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
       // if (count($result) === 1)
            $this->retorno = $result;
        return $this->retorno;
    }
}