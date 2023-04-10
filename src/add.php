<?php
session_start();
include_once("config.php");


$code = ($_POST['product_code']);
$pname = ($_POST['product_name']);
$cat = ($_POST['category']);
$fan = ($_POST['fandom']);
$fees = ($_POST['price']);
$quant = ($_POST['product_qty']);

$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$error = $_FILES['image']['error'];

if ($error === UPLOAD_ERR_OK) {

	$data = file_get_contents($tmp_name);
    // Set the file path and move the file to the XAMPP server directory

    // Connect to the database


    // Check connection

	$data = mysqli_real_escape_string($mysqli, $data);

    // Insert the file path into the database
	
	$sql = "INSERT INTO products(product_code,product_name,category,fandom,price,product_qty,product_img_name) VALUES ('$code','$pname','$cat','$fan','$fees','$quant','$name')";


	if (mysqli_query($mysqli, $sql)) {
		$upload_dir = "res/product/";
		$path = $upload_dir . $name;
		move_uploaded_file($tmp_name, $path);

		echo '<script type="text/javascript">
			if(!alert("New Product was added"))  header("Location: /add_product.php");
			</script>';
	} else {
		echo '<script type="text/javascript">
		if(!alert("Something is error #_#")) header("Location: /add_product.php");
		</script>';
	}
    // Close the database connection
    mysqli_close($mysqli);
  } else {
    echo "Error uploading file: " . $error;
  }







?>