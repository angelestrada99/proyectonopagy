<?php 
require_once('nopagy.class.php');
class Permiso extends Nopagy{
    public function read(){
        $linea = $this->db->prepare("SELECT * FROM permiso ORDER BY id_permiso;");    
        $linea ->execute();
        $permisos = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $permisos;
    }
    public function readOne($id){
        $linea = $this->db->prepare("SELECT * FROM permiso WHERE id_permiso=:id_permiso");    
        $linea->bindParam(':id_permiso', $id, PDO::PARAM_INT);
        $linea ->execute();
        $permiso = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $permiso;
    }
    public function delete($id){
        $borrar = $this->db->prepare('DELETE FROM permiso WHERE id_permiso=:id_permiso');
        $borrar->bindParam(':id_permiso', $id, PDO::PARAM_INT);
        $borrar->execute();
        $cuentapermiso = $borrar->rowCount();
        return $cuentapermiso;
    }
    public function create($data){
        $cuenta = null;
        $sql = "INSERT INTO permiso(permiso) VALUES (:permiso)";
        $insertar = $this->db->prepare($sql);
        $insertar->bindParam(':permiso', $data['permiso'], PDO::PARAM_STR);
        $insertar->execute();
        $cuenta = $insertar->rowCount();
        return $cuenta;
    }
    public function update($id,$data){
        $sql="UPDATE permiso SET permiso=:permiso WHERE id_permiso=:id_permiso";
        $actualizar = $this->db->prepare($sql);
        $actualizar->bindParam(':permiso', $data["permiso"], PDO::PARAM_STR);
        $actualizar->bindParam(':id_permiso', $id, PDO::PARAM_INT);
        $actualizar->execute();
        $cuentapermiso = $actualizar->rowCount();
        return $cuentapermiso; 
    }
}
$permisoObj = new Permiso;
try{
    $permisoObj->conexion();
}catch(Exception $e){
echo 'error de bd';
}
?>