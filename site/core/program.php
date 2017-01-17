<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RU Radio-Programación</title>
	<link type="image/x-icon" href="../img/thunder_bluebg.png" rel="icon" /> 
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
	<script src="../JS/jquery.js"></script>
	<script src="../JS/jquery.dataTables.min.js">
	
	</script>
</head>
<body>
<header>
	<?php 
		include('nav.php');
	 ?>
</header>
<script>
	$.extend( true, $.fn.dataTable.defaults, {
    	"searching": false,
    	"ordering": false
	});
	$(document).ready(function() {
    	$('#myTable').DataTable( {
        	"dom": '<"toolbar">frtip'
    	});
 
    	$("div.toolbar").html('<br>');
	});
	$(document).ready(function(){
    	$('#myTable').DataTable();
	});

</script>
<br>
<div class="logo">
		<br>
		<br>
		<img src="../img/logo_esp2.png" alt="">
</div>
<br>
<img src="../img/program.png" class="titleimg progim">
<br>
<br>
<table id="myTable" class="table table-striped table-bordered dt-responsive nowrap">
	<thead>
		<tr>
			<th class="table_header">Programa</th>
			<th class="table_header">Descripción</th>
			<th class="table_header">Horario</th>
		</tr>
	</thead>
	<tbody>
		 <tr>
            <td>Chavorockeando</td>
            <td>Mezclamos hits del pasado y presente. Apto para chavorockers y nuevos adeptos.</td>
            <td>4:00pm-6:00pm</td>
        </tr>
		<tr>
            <td>Hora del Estudihambre</td>
            <td>Ló más nuevo de la escena rock a nivel mundial.</td>
            <td>6:00pm-9:00pm</td>
        </tr>
        <tr>
            <td>American Old Rock Story</td>
            <td>Lo más emblemático del rock norteamericano de los 70's y 80's.</td>
            <td>9:00pm-10:00pm</td>
        </tr>
        <tr>
            <td>Los Dorados 90's</td>
            <td>El "Rock en tu Idioma" que todos amamos.</td>
            <td>10:00pm-12:00am</td>
        </tr>
        <tr>
            <td>Gustos Culposos</td>
            <td>Música POP de todas las épocas, colores y sabores.</td>
            <td>12:00am-1:00am</td>
        </tr>
       
	</tbody>
</table>
<?php 
 	include('footer.html');
?>

</body>
</html>