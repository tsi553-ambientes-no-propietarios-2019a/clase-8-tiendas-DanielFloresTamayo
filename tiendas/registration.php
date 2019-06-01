<?php 
// llamamos a la conexion de la base de datos
include('common/utils.php');
// Mensaje de error si exite alguno
if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>

<!---------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!------------------------------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <!------------------------------------------------------->
</head>
<body>

<!---------------------------------------------------------->
<center>
<!---------------------------------------------------------->
<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
<!---------------------------------------------------------->
<div class="container" style = "padding-top: 10px">
        <div class="col-md-5" style = "border: black 1px solid">

            <legend class="text-left header">TiendasEC</legend>
            <hr noshade="noshade" size="2" width="100%" />          
                <form action="php/process_registration.php" class="form-inline" method="POST">
                    <fieldset>
                        <legend class="text-center header">Registro de tienda</legend>

                        <div class="form-group" style = "padding-bottom:25px" >
                            <div class = "container">
                                <div class="row" >
                                    <div class="col">
                                    <span>Nombre de la tienda</span>
                                    </div>
                                    <div class="col">
									<input type="text" name="store" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: end">
                                    <span>Usuario</span>
                                    </div>
                                    <div class="col">
									<input type="text" name="username" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style = "padding-bottom:25px">
                            <div class = "container">
                                <div class="row">
                                    <div class="col" style="text-align: end">
                                    <span>Contraseña</span>
                                    </div>
                                    <div class="col">
									<input type="password" name="password" required="required">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style = "padding-bottom:10px"> 
                            <div class="col text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Registrar</button>    
                            </div>            
                        </div>                           
                    </fieldset>
                </form>            
        </div>
    </div>
</div>
</center>
<!---------------------------------------------------------->

<!----------------------------------------------------------->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
<!----------------------------------------------------------->   
</body>
</html>