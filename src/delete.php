<?php
	session_start();
    include_once("config.php");

			$code = ($_POST['product_code']);
	
	
$sql = "DELETE FROM products WHERE product_code='".$code."'"; 

if (mysqli_query($mysqli, $sql)) 
{
	echo '<script type="text/javascript">
		if(!alert("Product was deleted")) header("Location: remove_product.php");
		</script>';
} 
else 
{
	echo '<script type="text/javascript">
		if(!alert("No such Product Exists")) header("Location: remove_product.php");
		</script>';

}

?>
		