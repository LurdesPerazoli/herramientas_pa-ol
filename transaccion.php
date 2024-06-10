<!DOCTYPE html>
<html lang="es">
<head>	
	<title>Realizar Transaccion</title>
	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
       <link rel="stylesheet" href="css/estilo.css">
	</head>
	<body>
		  <header>
    
</header>

		<form action="realizando_transaccion.php" method="post">
			<p><h1>Complete los datos</h1></p>
			Id de la Herramienta solicitada<input type="number" name="id_herramienta">
			<br>
			Cantidad a retirar <input type="number" name="cantidad">
			<br>
			Cantidad de dias <input type="number" name="plazo">
			<br>
			Estado <input type="text" name="estado">
			<br>
			ID Del usuario que retira <input type="number" name="id_usuario">
			<br>
		
			<input type="submit" value="Enviar" class="btn btn-dark">
		</form>

		 <center><br><a href='admin.php'><button type='button' class='btn btn-secondary'>VOLVER AL MENU ANTERIOR</button></a></center>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
	</body>
</html>