<?php 
require_once('nopagy.class.php');
class Compra extends Nopagy{
    public function read(){
        $linea = $this->db->prepare("SELECT * FROM compra;");    
        $linea ->execute();
        $compras = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $compras;
    }
    public function readOne($id){
        $linea = $this->db->prepare("SELECT * FROM compra WHERE id_compra=:id_compra");    
        $linea->bindParam(':id_compra', $id, PDO::PARAM_INT);
        $linea ->execute();
        $animal = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $animal;
    }
    public function delete($id){
        $borrar = $this->db->prepare('DELETE FROM compra WHERE id_compra=:id_compra');
        $borrar->bindParam(':id_compra', $id, PDO::PARAM_INT);
        $borrar->execute();
        $cuenta = $borrar->rowCount();
        return $cuenta;
    }
    public function create($data){
        error_reporting(E_ALL ^ E_WARNING);
        $cuenta = null;
        $sql = "INSERT INTO compra(compra, fecha, id_cliente, total) VALUES (:compra, :fecha, :id_cliente, :total)";
        $insertar = $this->db->prepare($sql);
        $insertar->bindParam(':compra', $data['compra'], PDO::PARAM_INT);
        $insertar->bindParam(':fecha', $data['fecha'], PDO::PARAM_STR);
        $insertar->bindParam(':id_cliente', $data['id_cliente'], PDO::PARAM_INT);
        $insertar->bindParam(':total', $data['total'], PDO::PARAM_INT);
        $insertar->execute();
        $cuenta = $insertar->rowCount();
        return $cuenta;
    }
    public function update($id,$data){
        $sql="UPDATE compra SET compra=:compra, fecha=:fecha, total=:total WHERE id_compra=:id_compra";
        $actualizar = $this->db->prepare($sql);
        $actualizar->bindParam(':compra', $data['compra'], PDO::PARAM_INT);
        $actualizar->bindParam(':fecha', $data['fecha'], PDO::PARAM_STR);
        $actualizar->bindParam(':total', $data['total'], PDO::PARAM_INT);
        $actualizar->bindParam(':id_compra', $id, PDO::PARAM_INT);
        $actualizar->execute();
        $cuentaventa = $actualizar->rowCount();
        return $cuentaventa; 
    }
}
$compraObj = new Compra;
$compraObj->conexion();
?>