
<html>
	<head>
    <title>Funcionalidades CRUD usando PHP, Jquery y MySQL</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
        <script> w3IncludeHTML();</script>
	</head>
	<body>

<?php include "php/navbar.php";?>

</div>
<div class="container">
      
<div class="row">
<div class="col-md-12">
        <h1>Funcionalidades CRUD usando PHP, Jquery y MySQL</h1>
                <p class="lead">CRUD</p>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-success btn-lg pull-right"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Agregar</a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/agregar.php">
  <div class="form-group">
    <label for="estado">Estado</label>
    <input type="text" class="form-control" name="estado" required>
  </div>
  <div class="form-group">
    <label for="capital">Capital</label>
    <input type="text" class="form-control" name="capital" required>
  </div>
  <div class="form-group">
    <label for="gobernador">Gobernador</label>
    <input type="text" class="form-control" name="gobernador" required>
  </div>
  <div class="form-group">
    <label for="partidoPolitico">Partido Politico</label>
    <input type="text" class="form-control" name="partidoPolitico" >
  </div>
  <div class="form-group">
    <label for="poblacion">Poblacion</label>
    <input type="text" class="form-control" name="poblacion" >
  </div>

  <button type="submit" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tabla.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>