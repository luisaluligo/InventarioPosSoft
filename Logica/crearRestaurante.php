<?php


$proyecto = new mysqli('127.0.0.1', 'root', '', 'inventariopos');

    if ($proyecto->connect_errno){
    echo "Lo sentimos, esta página está esperimentando problemas";
    exit;
}

    else{

        
        $RestNombre=$_POST['RestNombre'];
        $RestEspecialidad=$_POST['RestEspecialidad'];
        $RestComercial=$_POST['RestComercial'];
        $RestPos=$_POST['RestPos'];
     

}


$sql = "INSERT INTO restaurante (IdRestaurante, RestNombre, RestEspecialidad, RestComercial, RestPos) VALUES ('', '$RestNombre', '$RestEspecialidad', '$RestComercial', '$RestPos')";
$var2 = $proyecto->query($sql);
    echo ('<script>alert("Restaurante Creado Exitosamente")</script>');
    echo ("<script>location.href='../Presentacion/html/fmrRestaurante.php'</script>");

?>    