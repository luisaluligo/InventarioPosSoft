<?php


$proyecto = new mysqli('127.0.0.1', 'root', '', 'inventariopos');

    if ($proyecto->connect_errno){
    echo "Lo sentimos, esta página está esperimentando problemas";
    exit;
}

    else{

        
        $CcUsuario=$_POST['CcUsuario'];
        $UsuarioNombre=$_POST['UsuarioNombre'];
        $UsuarioClave=$_POST['UsuarioClave'];
        $UsuarioEmail=$_POST['UsuarioEmail'];
     

}


$sql = "INSERT INTO usuario (IdUsuario, CcUsuario, UsuarioNombre, UsuarioClave, UsuarioEmail) VALUES ('', '$CcUsuario', '$UsuarioNombre', '$UsuarioClave', '$UsuarioEmail')";
$var2 = $proyecto->query($sql);
    echo ('<script>alert("Usuario Creado Exitosamente")</script>');
    echo ("<script>location.href='../Index.php'</script>");

?>    