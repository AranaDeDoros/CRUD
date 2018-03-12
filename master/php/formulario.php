<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from estados where idEstado = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>

<?php if($person!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">
    <label for="estado">Estado</label>
    <input type="text" class="form-control" value="<?php echo $person->estado; ?>" name="estado" required>
  </div>
  <div class="form-group">
    <label for="capital">Capital</label>
    <input type="text" class="form-control" value="<?php echo $person->capital; ?>" name="capital" required>
  </div>
  <div class="form-group">
    <label for="gobernador">Gobernador</label>
    <input type="text" class="form-control" value="<?php echo $person->gobernador; ?>" name="gobernador" required>
  </div>
  <div class="form-group">
    <label for="partidoPolitico">Partido Politio</label>
    <input type="text" class="form-control" value="<?php echo $person->partidoPolitico; ?>" name="partidoPolitico" >
  </div>
  <div class="form-group">
    <label for="poblacion">Poblacion</label>
    <input type="text" class="form-control" value="<?php echo $person->poblacion; ?>" name="poblacion" >
  </div>
<input type="hidden" name="id" value="<?php echo $person->idEstado; ?>">
  <button type="submit" class="btn btn-info btn-lg">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">No se encuentra</p>
<?php endif;?>