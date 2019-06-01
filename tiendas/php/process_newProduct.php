<?php 
include('../common/utils.php');

if($_POST) {
	if (isset($_POST['code']) && isset($_POST['name']) && isset($_POST['type']) && isset($_POST['stock']) && isset($_POST['price']) && !empty($_POST['code']) && !empty($_POST['name']) && !empty($_POST['type']) && !empty($_POST['stock']) && !empty($_POST['price'])) {
		$code = $_POST['code'];
		$name = $_POST['name'];
		$type = $_POST['type'];
		$stock = $_POST['stock'];
		$price = $_POST['price'];
		$user = $_SESSION['user']['id'];

		$sql_insert = "INSERT INTO product
		(code, name, type, stock, price, user)
		VALUES ('$code','$name', '$type', '$stock', '$price', '$user')";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../home_tienda.php');
		}
	} else {
		redirect('../new_product.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../new_product.php');
}