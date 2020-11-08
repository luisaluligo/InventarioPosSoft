<?php


$proyecto = new mysqli('127.0.0.1', 'root', '', 'inventariopos');

    if ($proyecto->connect_errno){
    echo "Lo sentimos, esta página está esperimentando problemas";
    exit;
}

    else{

        
        $IdRestaurante=$_GET['id'];
       
     

}

/* if ($buscar==0){ 
    echo '<script>
          alert("Id no está registrado");
          </script>'; 
  } else{
 */

$sql = "DELETE FROM restaurante WHERE IdRestaurante = ".$IdRestaurante ;
$var2 = $proyecto->query($sql);
    echo ('<script>alert("Restaruante borrado exitosamente")</script>');
    echo ("<script>location.href='../Presentacion/html/fmrListarRestaurante.php'</script>"); 


 

?>  



   