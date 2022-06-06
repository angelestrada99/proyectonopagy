<?php 
require_once('nopagy.class.php');
class Usuario_rol extends Nopagy{
    public function read(){
        $linea = $this->db->prepare("SELECT * FROM usuario_rol;");    
        $linea ->execute();
        $usuarios_roles = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $usuarios_roles;
    }
    public function readOne($id){
        $linea = $this->db->prepare("SELECT * FROM usuario_rol WHERE id_usuario=:id_usuario");    
        $linea->bindParam(':id_usuario', $id, PDO::PARAM_INT);
        $linea ->execute();
        $animal = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $animal;
    }
    public function delete($id){
        $borrar = $this->db->prepare('DELETE FROM usuario_rol WHERE id_usuario=:id_usuario');
        $borrar->bindParam(':id_usuario', $id, PDO::PARAM_INT);
        $borrar->execute();
        $cuenta = $borrar->rowCount();
        return $cuenta;
    }
    public function create($data){
        error_reporting(E_ALL ^ E_WARNING);
        $cuenta = null;
        $sql = "INSERT INTO usuario_rol(id_usuario, id_rol) VALUES (:id_usuario, :id_rol)";
        $insertar = $this->db->prepare($sql);
        $insertar->bindParam(':id_usuario', $data['id_usuario'], PDO::PARAM_INT);
        $insertar->bindParam(':id_rol', $data['id_rol'], PDO::PARAM_INT);
        $insertar->execute();
        $cuenta = $insertar->rowCount();
        return $cuenta;
    }
    public function update($id,$data){
        $sql="UPDATE usuario_rol SET id_usuario=:id_usuario, id_rol=:id_rol WHERE id_usuario=:id_usuario";
        $actualizar = $this->db->prepare($sql);
        $actualizar->bindParam(':id_usuario', $data['id_usuario'], PDO::PARAM_INT);
        $actualizar->bindParam(':id_rol', $data['id_rol'], PDO::PARAM_INT);
        $actualizar->bindParam(':id_usuario', $id, PDO::PARAM_INT);
        $actualizar->execute();
        $cuentarela = $actualizar->rowCount();
        return $cuentarela; 
    }
}
$usuario_rolObj = new Usuario_rol;
$usuario_rolObj->conexion();
?>