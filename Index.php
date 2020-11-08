   <?php
                extract ($_REQUEST);
                if (!isset($_REQUEST ['x']))
                    $x=0;
                
                 ?> 
<!DOCTYPE html>
    <html>
	<head>
	<title>Bienvenido InsVentario POS</title>
        <link rel="Stylesheet" type="text/css" href="./Presentacion/css/estilosLogin.css" />
	<link href="https://fonts.googleapis.com/css?family=Ultra&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	</head>
        <body>
          
            
	<section class="contenedor">
		<div id="cabezera">
			
			<p>LOGIN<br><i class="fas fa-user"></i></p>
		</div>
		
		<!--Ingreso usuario-->
		<div class="ingreso">
                    
                    <form action='Logica/validaInicioSesion.php' method="POST">
			
			<span class="fontawesome-user"></span>
                        <input type="number" name="cedula"  required placeholder="Cedula" autocomplete="off" >
			<!--Ingresar contraseña-->
			<span class="fontawesome-lock"></span>
			<input type="password" name="clave"  required placeholder="Contraseña" autocomplete="off" >
			<input type="submit" value="Iniciar sesion" name="butonC" id="butond" class="button" >  
                        
                        <?php
               if ($x==1)
                   echo "<br> Usuario no registrado con los datos ingresados,vuelva a intentarlo";
               if ($x==2)
                   echo "<br> Debe iniciar sesion para poder ingresar a la aplicacion";
               if ($x==3)
                   echo "<br> El usuario ha cerrado la sesion";
               
               
               ?>
                        
                        <!--recuperar contraseña-->
			</form>
                   </div>
             
                <br>
	<center>
	 <p><a  href="./Presentacion/html/fmrUsuario.php" class="btn btn-secondary btn-lg">Regístrate </a></p>	
	</center>			
	
	</section>
           
		<footer> Copyrigth -todos los derechos reservados ADSI 2.0 </footer>
		
</body>
</html>