<?php 
require_once('nopagy.class.php');
class Usuario extends Nopagy{
    public function read(){
        $linea = $this->db->prepare("SELECT * FROM usuario ORDER BY id_usuario;");    
        $linea ->execute();
        $usuarios = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $usuarios;
    }
    public function readOne($id){
        $linea = $this->db->prepare("SELECT * FROM usuario WHERE id_usuario=:id_usuario");    
        $linea->bindParam(':id_usuario', $id, PDO::PARAM_INT);
        $linea ->execute();
        $usuario = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $usuario;
    }
    public function delete($id){
        $borrar = $this->db->prepare('DELETE FROM usuario WHERE id_usuario=:id_usuario');
        $borrar->bindParam(':id_usuario', $id, PDO::PARAM_INT);
        $borrar->execute();
        $cuentauser = $borrar->rowCount();
        return $cuentauser;
    }
    public function create($data){
        $cuenta = null;
        $sql = "INSERT INTO usuario(correo, contrasena) VALUES (:correo, :contrasena)";
        $insertar = $this->db->prepare($sql);
        $insertar->bindParam(':correo', $data['correo'], PDO::PARAM_STR);
        $insertar->bindParam(':contrasena', md5($data['contrasena']), PDO::PARAM_STR);
        $insertar->execute();
        $cuenta = $insertar->rowCount();
        return $cuenta;
    }
    public function update($id,$data){
        $sql="UPDATE usuario SET correo=:correo, contrasena=:contrasena WHERE id_usuario=:id_usuario";
        $actualizar = $this->db->prepare($sql);
        $actualizar->bindParam(':correo', $data["correo"], PDO::PARAM_STR);
        $actualizar->bindParam(':contrasena', md5($data['contrasena']), PDO::PARAM_STR);
        $actualizar->bindParam(':id_usuario', $id, PDO::PARAM_INT);
        $actualizar->execute();
        $cuentauser = $actualizar->rowCount();
        return $cuentauser; 
    }
}
$usuarioObj = new Usuario;
$usuarioObj->conexion();
?>