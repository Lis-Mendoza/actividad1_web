<table border="1">
	<th>id</th>
	<th>Nombre</th>
	<th>email</th>
	<th></th>
	<?php foreach ($usuarios as $usuario) : ?>
		<tr>
			<?
			echo "<td>".$usuario['id']."</td>";
			echo "<td>".$usuario['nombre']."</td>";
			echo "<td>".$usuario['email']."</td>";
			echo "<td><a href=./ver/".$usuario['id'].">Ver</a></td>";
			?>
		</tr>
	<?php endforeach ?>
</table>