<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="../CSS/estilos.css">
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	
    <title>registrar usuario</title>
	

</head>  
<!-- <script type="text/javascript">


    function confirmar()
    {
    
        var respuesta = confirm(" USUARIO REGISTRADO");
    
        if (respuesta == true)
        {
            return true;
        }
    else{
        return false;
    }
    }
    </script> -->
<body>

   
   
    <form class="formulario" action="../../Logica/registrarUsuario.php" method="POST">

        <h1>REGISTRAR USUARIO</h1>
        <div class="contenedor">
        
        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" name="CcUsuario"  id="CcUsuario"  placeholder="Ingrese Cédula"required>
            </div>

            <div class="input-contenedor">
               <i class="fas fa-user icon"></i>
               <input type="text" name="UsuarioNombre"  id="UsuarioNombre"  placeholder="Ingrese Nombre" required>
                </div>

               <div class="input-contenedor">
                   <i class="fas fa-user icon"></i>
                   <input type="text" name="UsuarioClave"  id="UsuarioClave"  placeholder="Ingrese Clave" required>
                   </div>

                   <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input type="email" name="UsuarioEmail"  id="UsuarioEmail"  placeholder="Ingrese Email"required>
                    </div>
                
            </div>

           

        <input type="submit" value="Registrar usuario" class="btn btn-secondary btn-lg " onclick="return confirmar()">
         
        <a href="/Index.php" class="btn btn-primary btn-l" tabindex="-1" role="button" aria-disabled="true">Iniciar Sesión</a>
  
	

     </form>
     <footer> Copyrigth -todos los drechos reservados ADSI 2.0 </footer>
</body>
</html>