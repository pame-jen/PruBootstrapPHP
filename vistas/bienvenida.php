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
	<div class="row">
 			<button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="prueba tooltip">
  				Tooltip on top
			</button>

			<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
			  	Popover on top
			</button>

			<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
		</div>
<br>
<br>
		<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
		  <button type="button" class="btn btn-secondary">1</button>
		  <button type="button" class="btn btn-secondary">2</button>
		  <div class="btn-group" role="group">
		    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		      Dropdown
		    </button>
		    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
		      <a class="dropdown-item" href="#">Dropdown link</a>
		      <a class="dropdown-item" href="#">Dropdown link</a>
		    </div>
		  </div>
		</div>
 	</div>
<br>
<br>
 	<div class="alert alert-primary" role="alert">
  		This is a primary alert—check it out!
	</div>
<br>
<br>
<!-- HTML to write -->
<a href="#" data-toggle="tooltip" title="Some tooltip text!">Hover over me</a>


<!-- Generated markup by the plugin -->
<div class="tooltip bs-tooltip-top" role="tooltip">
  <div class="arrow"></div>
  <div class="tooltip-inner">
    Some tooltip text!
  </div>
</div>

<br>
<br>

 <div class="row">
      <label id="use-selector-label">
        <input id="use-selector" type="text">
        <span data-title="Debe Ingresar nombre">Use selector option</span>
      </label>
    </div>
<br>
<br>
<br>
<div class="form-group has-success">
  <label class="form-control-label" for="inputSuccess1">Input with success</label>
  <input type="text" class="form-control" id="inputSuccess1">
  <div class="form-control-feedback">Success! You've done it.</div>
  <small class="form-text text-muted">Example help text that remains unchanged.</small>
</div>
<div class="form-group has-warning">
  <label class="form-control-label" for="inputWarning1">Input with warning</label>
  <input type="text" class="form-control form-control-warning" id="inputWarning1">
  <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
  <small class="form-text text-muted">Example help text that remains unchanged.</small>
</div>
<div class="form-group has-danger">
  <label class="form-control-label" for="inputDanger1">Input with danger</label>
  <input type="text" class="form-control form-control-danger" id="inputDanger1">
  <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
  <small class="form-text text-muted">Example help text that remains unchanged.</small>
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

 		// $('#example').tooltip('show');
 		function ValidaForm(nombre,apellido,edad){
 			if (nombre==''){
 				$('#Lbl-Nombre input').tooltip();
 			}else{
 				$('#Lbl-Nombre input').tooltip('disable');
 			}
 			if (apellido==''){
				$('#Lbl-Apellido input').tooltip();
 			}else{
 				$('#Lbl-Apellido input').tooltip('disable');
 			}
 			if (edad==''){
 				$('#Lbl-Edad input').tooltip();
 			}else{
 				$('#Lbl-Edad input').tooltip('disable');
 			}

 			
 		}
 		// activa tooltip de etiqueta span ubicada en la caja de texto use-selector
 		// $('#use-selector-label span').tooltip();

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