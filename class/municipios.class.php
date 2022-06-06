<?php 
require_once('nopagy.class.php');
class Municipio extends Nopagy{
    public function read(){
        $linea = $this->db->prepare("SELECT * FROM municipio ORDER BY municipio;");    
        $linea ->execute();
        $municipios = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $municipios;
    }
    public function readOne($id){
        $linea = $this->db->prepare("SELECT * FROM municipio WHERE id_municipio=:id_municipio");    
        $linea->bindParam(':id_municipio', $id, PDO::PARAM_INT);
        $linea ->execute();
        $animal = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $animal;
    }
    public function delete($id){
        $borrar = $this->db->prepare('DELETE FROM municipio WHERE id_municipio=:id_municipio');
        $borrar->bindParam(':id_municipio', $id, PDO::PARAM_INT);
        $borrar->execute();
        $cuenta = $borrar->rowCount();
        return $cuenta;
    }
    public function create($data){
        error_reporting(E_ALL ^ E_WARNING);
        $cuenta = null;
        $sql = "INSERT INTO municipio(municipio, costoxenvio, id_estado) VALUES (:municipio, :costoxenvio, :id_estado)";
        $insertar = $this->db->prepare($sql);
        $insertar->bindParam(':municipio', $data['municipio'], PDO::PARAM_STR);
        $insertar->bindParam(':costoxenvio', $data['costoxenvio'], PDO::PARAM_STR);
        $insertar->bindParam(':id_estado', $data['id_estado'], PDO::PARAM_INT);
        $insertar->execute();
        $cuenta = $insertar->rowCount();
        return $cuenta;
    }
    public function update($id,$data){
        $sql="UPDATE municipio SET municipio=:municipio, costoxenvio=:costoxenvio WHERE id_municipio=:id_municipio";
        $actualizar = $this->db->prepare($sql);
        $actualizar->bindParam(':municipio', $data['municipio'], PDO::PARAM_STR);
        $actualizar->bindParam(':costoxenvio', $data['costoxenvio'], PDO::PARAM_STR);
        $actualizar->bindParam(':id_municipio', $id, PDO::PARAM_INT);
        $actualizar->execute();
        $cuentamuni = $actualizar->rowCount();
        return $cuentamuni; 
    }
}
$municipioObj = new Municipio;
$municipioObj->conexion();
?>