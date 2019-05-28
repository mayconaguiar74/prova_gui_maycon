<?php
	include ("ConexaoCliente.php");
	$listarCliente = new Cliente();
	$valor = $listarCliente->buscarTodos();
?>	
<table border="1">
	<th>id</th>	
	<th>nome</th>
	<th>telefone</th>
	<th>celular</th>		
	<th>email</th>
	<th>endereco</th>
	<th>numero</th>
	<th>bairro</th>
	<th>cidade</th>
	<th>cep</th>
	<th>celular</th>
	<?php
		foreach($valor as $linha){
	?>
	<tr>
		<td><?php echo $linha["id"]; ?></td>
		<td><?php echo $linha["nome"]; ?></td>
		<td><?php echo $linha["telefone"]; ?></td>
		<td><?php echo $linha["celular"]; ?></td>
		<td><?php echo $linha["email"]; ?></td>	
		<td><?php echo $linha["endereco"]; ?></td>	
		<td><?php echo $linha["numero"]; ?></td>
		<td><?php echo $linha["bairro"]; ?></td>
		<td><?php echo $linha["cidade"]; ?></td>
		<td><?php echo $linha["cep"]; ?></td>
		<td><?php echo $linha["celular"]; ?></td>
	</tr>
	<?php
	}		
	?>
</table>