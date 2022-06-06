<?php 
require_once('nopagy.class.php');
class Clientes extends Nopagy {
    public function read(){
        $linea = $this -> db->prepare("SELECT * from clientes");
        $linea->execute();
        $clientes = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $clientes;
    }
    public function readOne($id){
        $linea = $this -> db->prepare("SELECT * from clientes where id_cliente = :id_cliente");
        $linea->bindParam(':id_cliente', $id, PDO::PARAM_INT);
        $linea->execute();
        $clientes = $linea->fetchAll(PDO::FETCH_ASSOC);
        return $clientes;
    }
    public function delete($id){
        $borrar = $this->db->prepare('delete from clientes where id_cliente=:id_cliente');
        $borrar->bindParam(':id_cliente', $id, PDO::PARAM_INT);
        $borrar->execute();
        $cuenta = $borrar->rowCount();
        return $cuenta;
    }
    public function create($data){
        $cuenta = null;
        $sql= "insert into clientes(nombre,apellidos,foto,id_municipio) values (:nombre,:apellidos,:foto,:id_municipio)";
        $insertar = $this->db->prepare($sql);
        $insertar->bindParam(':nombre', $data['nombre'], PDO::PARAM_STR);
        $insertar->bindParam(':apellidos', $data['apellidos'], PDO::PARAM_STR);
        $insertar->bindParam(':foto', $data['foto'], PDO::PARAM_STR);
        $insertar->bindParam(':id_municipio', $data['id_municipio'], PDO::PARAM_INT);
        $insertar->execute();
        $cuenta = $insertar->rowCount();
        return $cuenta;
    }
    public function update($id, $data){
        $sql="update clientes set nombre=:nombre, apellidos=:apellidos, foto=:foto where id_cliente=:id_cliente";
        $actualizar = $this->db->prepare($sql);
        $actualizar->bindParam(':nombre', $data["nombre"], PDO::PARAM_STR);
        $actualizar->bindParam(':apellidos', $data["apellidos"], PDO::PARAM_STR);
        $actualizar->bindParam(':foto', $data["foto"], PDO::PARAM_STR);
        $actualizar->bindParam(':id_cliente', $id, PDO::PARAM_INT);
        $actualizar->execute();
        $cuentacli = $actualizar->rowCount();
        return $cuentacli; 
    }
}
$Clientes = new Clientes;
$Clientes->conexion();
?>