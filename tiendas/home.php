<?php
// llamamos a la conexion de la base de datos
include('common/utils.php');
//print_r($_SESSION['user']);
//Llamamos a la funcion creada para obtener los productos

$tienda = getTiendas($conn);
$products = getProducts($conn);

//Obterner las variable

$variable1=($_GET['variable1']);


// Mostar las variables




?>

<!------------------------------------------------------------------------------>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!------------------------------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <!------------------------------------------------------->
</head>
<body>

<!---------------------------------------------------------->
<center>
<div class="container" style = "padding-top: 10px">
        <div class="col-md-5" style = "border: black 1px solid">            
                    <fieldset>
                        <legend class="text-center header" style = "padding-top:20px">
						<div><a href="php/logout.php"><h5>Cerrar sesión</h5></a></div>
						<h2>Bienvenido <?php echo $_SESSION['user']['username']; ?></h2>
						</legend>
                        <hr noshade="noshade" size="2" width="100%" />
                        <legend class="text-left header">Tienda: <?php echo $variable1?></legend>

                        

                        <div style = "padding-bottom:10px"> 
                            
							<a href="new_product.php" class="btn btn-primary btn-lg active btn-sm" role="button" aria-pressed="true">Añadir productos</a>
                            
							
							<a href="home_tienda.php" class="btn btn-primary btn-lg active btn-sm" role="button" aria-pressed="true">Volver a atras</a>
                                       
                        </div>

                    </fieldset>
<!------------------------------------------------------------------------->
					<table>
						<thead>
							<tr >
								<th>Código</th>
								<th>Nombre</th>
								<th>Tipo</th>
								<th>Stock</th>
								<th>Precio</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($products as $p) { ?>
								<tr>
									<td><?php echo $p['code'] ?></td>
									<td><?php echo $p['name'] ?></td>
									<td><?php echo $p['type'] ?></td>
									<td><?php echo $p['stock'] ?></td>
									<td><?php echo $p['price']?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>

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