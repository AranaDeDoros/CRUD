<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from estados";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
	  <div class="panel panel-default">
<table class="table table-bordered table-hover">
<div class="panel-heading">Lista de Presidentes de la República</div>
<thead>
	<th>Estado</th>
	<th>Capital</th>
	<th>Gobernador</th>
	<th>Partido Político</th>
	<th>Población</th>
	<th>Acciones</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["estado"]; ?></td>
	<td><?php echo $r["capital"]; ?></td>
	<td><?php echo $r["gobernador"]; ?></td>
	<td><?php echo $r["partidoPolitico"]; ?></td>
	<td><?php echo $r["poblacion"]; ?></td>
	<td style="width:150px;">
		<a data-toggle="modal" href="./editar.php?id=<?php echo $r["idEstado"];?>" class="btn btn-sm btn-primary"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Editar</a>
		<a href="#" id="del-<?php echo $r["idEstado"];?>" class="btn btn-sm btn-danger"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["idEstado"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Borrar?");
			if(p){
				window.location="./php/eliminar.php?id="+<?php echo $r["idEstado"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
</div>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
