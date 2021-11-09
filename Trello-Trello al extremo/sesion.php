<?php
//print_r($_POST);

if(isset($_POST['correo']) && ($_POST['contraseña'])){
    
    require_once 'conexion.php';

    $sql = "SELECT * FROM login WHERE correo= '".$_POST['correo']."'
            AND contraseña = '".$_POST['contraseña']."'";   
    
    $res = consulta($conn,$sql);
    if(mysqli_num_rows($res)==1){
        session_start();
        $_SESSION = mysql_fetch_row($res);
    }
}
?>

<form method="POST">
Correo electronico: <input type="email" name="correo"><br>
Contraseña: <input type="password" name="contraseña"><br>
<input type="submit" name="enviar"><br>

</form>