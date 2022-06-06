<?php 
require_once('nopagy.class.php');
class Rol extends Nopagy{
    public function read(){
        $linea = $this->db->prepare("SELECT * FROM rol ORDER BY id_rol;");    
        $linea ->execute();
        $roles = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $roles;
    }
    public function readOne($id){
        $linea = $this->db->prepare("SELECT * FROM rol WHERE id_rol=:id_rol");    
        $linea->bindParam(':id_rol', $id, PDO::PARAM_INT);
        $linea ->execute();
        $rol = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $rol;
    }
    public function delete($id){
        $borrar = $this->db->prepare('DELETE FROM rol WHERE id_rol=:id_rol');
        $borrar->bindParam(':id_rol', $id, PDO::PARAM_INT);
        $borrar->execute();
        $cuentarol = $borrar->rowCount();
        return $cuentarol;
    }
    public function create($data){
        $cuenta = null;
        $sql = "INSERT INTO rol(rol) VALUES (:rol)";
        $insertar = $this->db->prepare($sql);
        $insertar->bindParam(':rol', $data['rol'], PDO::PARAM_STR);
        $insertar->execute();
        $cuenta = $insertar->rowCount();
        return $cuenta;
    }
    public function update($id,$data){
        $sql="UPDATE rol SET rol=:rol WHERE id_rol=:id_rol";
        $actualizar = $this->db->prepare($sql);
        $actualizar->bindParam(':rol', $data["rol"], PDO::PARAM_STR);
        $actualizar->bindParam(':id_rol', $id, PDO::PARAM_INT);
        $actualizar->execute();
        $cuentarol = $actualizar->rowCount();
        return $cuentarol; 
    }
}
$rolObj = new Rol;
$rolObj->conexion();
?>