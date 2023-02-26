<h2>Estou na minha página home!</h2>
<ul>
<?php
	$clientes = \Models\HomeModel::pegaClientes();
	foreach ($clientes as $value) {

?>
	<li><?php echo $value['nome']; ?></li>
<?php
	}
?>

</ul>