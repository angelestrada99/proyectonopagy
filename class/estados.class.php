<?php 
require_once('nopagy.class.php');
class Estados extends Nopagy {
    public function read(){
        $linea = $this -> db->prepare("SELECT * from estado");
        $linea->execute();
        $estados = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $estados;
    }
    public function readOne($id){
        $linea = $this -> db->prepare("SELECT * from estado where id_estado = :id_estado");
        $linea->bindParam(':id_estado', $id, PDO::PARAM_INT);
        $linea->execute();
        $estados = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $estados;
    }
    public function delete($id){
        $borrar = $this->db->prepare('delete from estado where id_estado=:id_estado');
        $borrar->bindParam(':id_estado', $id, PDO::PARAM_INT);
        $borrar->execute();
        $cuenta = $borrar->rowCount();
        return $cuenta;
    }
    public function create($data){
        $cuenta = null;
        $sql= "insert into estado(estado,foto) values (:estado,:foto)";
        $insertar = $this->db->prepare($sql);
        $insertar->bindParam(':estado', $data['estado'], PDO::PARAM_STR);
        $insertar->bindParam(':foto', $data['foto'], PDO::PARAM_STR);
        $insertar->execute();
        $cuenta = $insertar->rowCount();
        return $cuenta;
    }
    public function update($id, $data){
        $sql="update estado set estado=:estado, foto=:foto where id_estado=:id_estado";
        $actualizar = $this->db->prepare($sql);
        $actualizar->bindParam(':estado', $data["estado"], PDO::PARAM_STR);
        $actualizar->bindParam(':foto', $data["foto"], PDO::PARAM_STR);
        $actualizar->bindParam(':id_estado', $id, PDO::PARAM_INT);
        $actualizar->execute();
        $cuentaest = $actualizar->rowCount();
        return $cuentaest; 
    }
}
$Estados = new Estados;
$Estados->conexion();
?>