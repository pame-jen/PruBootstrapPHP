<?php 

	include("compartidas/cabeceras.php");
 ?>

 	<div class="container">
 	<div class="row">
 		<form action="" method="">
 		<br>
 		<br>
 		<div class="form-group">
			<label id="Lbl-Nombre" for="nombre">Ingrese Nombre
				<!-- <span data-title="Debe Ingresar Nombre">Ingrese Nombre</span> -->
				<input class="form-control" data-title="Debe Ingresar Nombre" data-placement="right" type="text" name="nombre" id="nombre">
			</label>
		</div>

		<div class="form-group">
			<label id="Lbl-Apellido" for="apellido">Ingrese Apellido
				<!-- <span data-title="Debe Ingresar Apellido">Ingrese Apellido</span> -->
				<input class="form-control" data-title="Debe Ingresar Apellido" data-placement="right" type="text" id="apellido">
			</label>
			
		</div>

		<div class="form-group">
			<label id="Lbl-Edad" for="edad">Ingrese Edad
				<!-- <span data-title="Debe Ingresar Edad">Ingrese Edad</span> -->
				<input class="form-control" data-title="Debe Ingresar Edad" data-placement="right" type="number" id="edad">
			</label>
			
		</div>

		<br>
		<button type="button" class="btn btn-primary" id="btnEnviar" >Enviar</button>
		<br>	
		
 		</form>
 		
	</div>
	

<?php 
	include("compartidas/scripts.php");
 ?>
 	<script>
 		$(function(){
 			$("#btnEnviar").click(function(){
 				EnviarFormulario(); 				
 			});
 		});


 		function EnviarFormulario(){

			var nomb=$("#nombre").val();
			var apel=$("#apellido").val();
			var ed=$("#edad").val();
			ValidaForm(nomb,apel,ed);
			if(nomb!='' && apel!='' && ed!=''){
			$.ajax({
				type:"POST",
				url:"../controladores/controladorUno.php",
				data:{nombre:nomb,apellido:apel,edad:ed},
				success:function(response){
					//$("#respuesta").append(response);
					alert(response);
				},
				error:function(){
					alert('llamado fallido');
				}
			});
		}
 		}

 	</script>


 <?php 

 	include("compartidas/pieDePagina.php");
  ?>