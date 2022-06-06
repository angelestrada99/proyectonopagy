<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require_once("configuracion.php");
require_once('C://xampp/htdocs/vendor/autoload.php');
session_start();
class Nopagy{
    var $db = null;

public function conexion(){
    $dsn = SGBD.':dbname='.DB_NAME.';host='.DB_HOST;
    $this -> db = new PDO($dsn,DB_USER,DB_PASSWORD);
}
public function alerta($mensaje, $tipo){
    include_once("view/mensajes.php");
}
public function cargar_imagen($carpeta){
    if(isset($_FILES["foto"])){
        $foto = $_FILES["foto"];
        if($foto["error"] == 0){
            if($foto["size"] <= IMG_SIZE){
                if(in_array($foto["type"],IMG)){
                    $origen = $foto["tmp_name"];
                    $num = random_int(1, 100);
                    $destino = PATH."images/".$carpeta."/".$num."_".$foto["name"];
                    if(move_uploaded_file($origen,$destino)){
                        return "images/".$carpeta."/".$num."_".$foto["name"];
                    }
                }
            }
        }
    }
        return false;
}

/*
FUNCIÓN LOGIN -> FUNCIÓN PARA VALIDAR SI LA COMBINACIÓN USUARIO Y CONTRASEÑA ES CORRECTA
@PARAM STRING CORREO;
@PARAM STRIN CONTRASENA PLANA;
@PARAM BOOLEAN RETURN 
*/
public function login($correo, $contrasena){
    $contrasena = md5($contrasena);
    if($this->validateEmail($correo)){
        $sql = "SELECT * FROM usuario where correo=:correo and contrasena=:contrasena"; 
        $this->db->prepare($sql);
        $usuario = $this->db->prepare($sql);
        $usuario->bindParam(':correo', $correo, PDO::PARAM_STR);
        $usuario->bindParam(':contrasena', $contrasena, PDO::PARAM_STR);
        $usuario->execute();
        $usuario = $usuario->fetch(PDO::FETCH_ASSOC);
        if(isset($usuario["correo"])){
            $_SESSION['validado'] = true;
            $_SESSION['correo'] = $correo;
            $_SESSION['roles'] = $this->roles($correo);
            $_SESSION['permisos'] = $this->permisos($correo);
            return true;
        }}
        $this->logOut();
        return false;
}

/*
FUNCIÓN EN LA CUÁL LA COMBINACIÓN CORREO Y CONTRASENA NO FUE CORRECTA -> FUNCION QUE DESTRUYA LAS VARIABLES 
*/
public function logOut(){
    if(isset($_SESSION['validado'])) unset($_SESSION['validado']); //unset es para destruir variables 
    if(isset($_SESSION['correo'])) unset($_SESSION['correo']); 
    if(isset($_SESSION['roles'])) unset($_SESSION['roles']);
    if(isset($_SESSION['permisos'])) unset($_SESSION['permisos']);
    session_destroy();  
}

/*
FUNCIÓN PARA VALIDAR CORREO CON EXPRESIÓN REGULAR, OSEA ASEGURARSE QUE SE INTRODUZCA ALGO QUE SEA ESTRUCTURALMENTE UN CORREO
@PARAM VARCHAR CORREO
@RETURN BOOLEAN
*/
public function validateEmail($correo){
    if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    return false;
}

/*
MÉTODO PARA OBTENER LOS ROLES DE UN CORREO (USUARIO)
@PARAM VARCHAR CORREO;
@RETURN ROLES[];
*/
public function roles($correo){
    $roles=[];
    $sql="SELECT rol FROM usuario JOIN usuario_rol USING (id_usuario)
                        JOIN rol USING (id_rol)
                        WHERE correo=:correo";
    $this->db->prepare($sql);
    $rol = $this->db->prepare($sql);
    $rol->bindParam(':correo', $correo, PDO::PARAM_STR);
    $rol->execute();
    $rol = $rol->fetchAll(PDO::FETCH_ASSOC);
    if(isset($rol[0]["rol"])){
        foreach($rol as $r){
            array_push($roles, $r["rol"]);
        }
    }
    return $roles;
}

/*
MÉTODO PARA OBTENER LOS ROLES DE UN CORREO (USUARIO)
@PARAM VARCHAR CORREO;
@RETURN ROLES[];
*/
public function permisos($correo){
    $permisos=[];
    $sql="SELECT permiso FROM usuario JOIN usuario_rol USING (id_usuario)
          JOIN permiso_rol USING (id_rol)
          JOIN permiso USING (id_permiso)
          WHERE correo=:correo";
    $this->db->prepare($sql);
    $permiso = $this->db->prepare($sql);
    $permiso->bindParam(':correo', $correo, PDO::PARAM_STR);
    $permiso->execute();
    $permiso = $permiso->fetchAll(PDO::FETCH_ASSOC);
    if(isset($permiso[0]["permiso"])){
        foreach($permiso as $p){
            array_push($permisos, $p["permiso"]);
        }
    }
    return $permisos;
}

/*
FUNCIÓN(MÉTODO) PARA VALIDAR SI UN USUARIO ES VALIDO (SI ESTÁ DENTRO DE LA BD)
@PARAM $_SESSION
@PARAM RETURN BOOLEAN
*/
public function validateUser(){
    if(isset($_SESSION['validado'])){
        if($_SESSION['validado']){
            return true;
        }
    }
    return false;
}

/*
FUNCIÓN PARA VALIDAR LOS ROLES EXISTENTES DEL USUARIO, VALIDA SI POSEE UN ROL
@PARAM VARCHAR PERMISO;
@RETURN BOOL;
*/
public function validateRol($rol){
    if($this->validateUser()){
        $roles = $_SESSION['roles'];
        if(!in_array($rol, $roles)){
            $this->alertaError('Usted no tiene el rol necesario para realizar esta acción');
        }
    }else{
        $this->alertaError('Usted no es un usuario válido');
    }
}

/*
FUNCIÓN PARA VALIDAR LOS ROLES EXISTENTES DEL USUARIO, VALIDA SI POSEE UN ROL
@PARAM VARCHAR PERMISO;
@RETURN BOOL;
*/
public function validatePermiso($permiso){
    if($this->validateUser()){
        $permisos = $_SESSION['permisos'];
        if(!in_array($permiso, $permisos)){
            $this->alertaError('Usted no tiene el permiso necesario para realizar esta acción');
        }
    }else{
        $this->alertaError('Usted no es un usuario válido');
    }
}

public function validateToken($correo, $token){
    if($this->validateEmail($correo) && strlen($token)==16){
        $sql = "SELECT * FROM usuario where correo=:correo and token=:token"; 
        $tok = $this->db->prepare($sql);
        $tok->bindParam(':correo', $correo, PDO::PARAM_STR);
        $tok->bindParam(':token', $token, PDO::PARAM_STR);
        $tok->execute();
        $tokenn = $tok->fetch(PDO::FETCH_ASSOC);
        if(isset($tokenn['correo'])){
            return true;
        }}
        return false;
}

public function nuevaContrasena($correo, $contrasena, $token){
    $contrasena = md5($contrasena);
    $sql = 'UPDATE usuario set contrasena=:contrasena, token=null where correo=:correo and token=:token';
    $nueva = $this->db->prepare($sql);
    $nueva->bindParam(':correo', $correo, PDO::PARAM_STR);
    $nueva->bindParam(':contrasena', $contrasena, PDO::PARAM_STR);
    $nueva->bindParam(':token', $token, PDO::PARAM_STR);
    $cuenta = $nueva->execute();
    return $cuenta;
}

/*
FUNCIÓN PARA DETECTAR E INFORMAR ERRORES
*/
public function alertaError($mensaje){
    include_once("view/header_error.php");
    $this->alerta($mensaje, 'danger');
    //$this->logOut(); Mucha violencia
    include_once("view/footer.php");
    die();
}

public function enviarCorreo($destinatario, $asunto, $msj){
    require '../../vendor/autoload.php';
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPAuth = true;
    $mail->Username = EMAIL;
    $mail->Password = EMAIL_PASSWORD;
    $mail->setFrom(EMAIL, 'Angel Ricardo');
    $mail->addAddress($destinatario, $destinatario);
    $mail->Subject = $asunto;
    $mail->msgHTML($msj);
    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }    
}

public function recuperar($correo){
    $sql='SELECT correo from usuario where correo=:correo';
    $recuperar=$this->db->prepare($sql);
    $recuperar->bindParam(':correo', $correo, PDO::PARAM_STR);
    $recuperar->execute();
    $recuperado = $recuperar->fetchAll(PDO::FETCH_ASSOC);
    if($recuperado[0]['correo']){
        $token=substr(md5(md5($correo.random_int(1,100000).'madrid'.md5(random_int(1,500))).soundex('uculele')),0,16);
        $sql='UPDATE usuario set token=:token where correo=:correo';
        $update=$this->db->prepare($sql);
        $update->bindParam(':correo', $correo, PDO::PARAM_STR);
        $update->bindParam(':token', $token, PDO::PARAM_STR);
        $update->execute();
        $mensaje = "<h2>Apreciable usuario presione el siguiente vinculo para restablecer su contraseña.<h2>
        <br><br><br>
        <a href=\"http://localhost/proyectonopagy/admin/login.php?accion=restablecer&correo=$correo&token=$token\"
        target=\"_blank\">Recuperar contraseña
        </a>
        <br><br>
        Si usted no solicitó esta acción, por favor ignore este correo y contacte al administrador.";
        $this->enviarCorreo($correo, "Recuperacion de contrasena", $mensaje);
        return true;
    }
    return false;
}

public function pdf($orientacion, $tamano, $contenido, $nombre){
        error_reporting(E_ALL ^ E_WARNING);
        ob_clean();
        // Horizontal/vertical, tamaño de letra, idioma
        $html2pdf = new HTML2PDF($orientacion, $tamano, 'es');
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($contenido);
        $html2pdf->Output($nombre);
        die();
}

public function get_include_contents($filename){
    if(is_file($filename)){
        ob_start();
        include $filename;
        return ob_get_clean();
    }return false;
}

public function json($datos, $status, $msj){
    ob_clean();
    header("Content-type: application/javascript");
    http_response_code($status);
    array_push($datos, $msj);
    $datos = json_encode($datos, JSON_PRETTY_PRINT);
    echo $datos;
    die();
}
}
$Nopagy = new Nopagy;
$Nopagy->conexion();
?>
