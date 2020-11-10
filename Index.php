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

        <link rel="stylesheet" href="./Presentacion/css/bootstrap.min.css">
        
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
			<input type="submit" value="Iniciar sesion" name="butonC" id="butond" class="btn btn-primary btn-lg"  >  
                        
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
				
	
	</section>
           
		<footer> Copyrigth -todos los derechos reservados ADSI 2.0 </footer>
		
</body>
</html>