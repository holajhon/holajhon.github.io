<?php 
$inc = include("Conexion.php");
if ($inc) {
	$consulta = "SELECT * FROM rutina";
	$resultado = mysqli_query($conn,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $cedula = $row['cedula'];
	    $nombre = $row['nombre'];
	    $lunes = $row['lunes'];
	    $martes = $row['martes'];
		$miercoles = $row['miercoles'];
		$jueves = $row['jueves'];
		$viernes = $row['viernes'];
		$sabado = $row['sabado'];
		
	    ?>
        <div>
        	<h2><?php echo $nombre; ?></h2>
			
			<h3>cedula: <?php echo $cedula; ?></h3>
			<h3><?php echo $lunes; ?></h3>
			<h3><?php echo $martes; ?></h3>
			<h3><?php echo $miercoles; ?></h3>
			<h3><?php echo $jueves; ?></h3>
			<h3><?php echo $viernes; ?></h3>
			<h3><?php echo $sabado; ?></h3>
			
        	
        </div> 
	    <?php
	    }
	}
}
?>