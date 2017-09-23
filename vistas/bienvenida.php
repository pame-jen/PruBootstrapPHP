<?php 

	include("compartidas/cabeceras.php");
 ?>
 <style>
		#MyCarousel{
			position: relative;
		}
		
		#Principal{
			position: absolute;
			top:3%;
			width: 75%;
			left:12.5%;
		}
		
		.carousel-item{
			height: 48rem;
		}
		.dis-3{
			background-color: rgba(147, 214, 195, 0.5);
			border-radius: 5px;
			padding-top:15px;
			padding-bottom:15px; 
			padding-left: 25px;
			margin:5px;
			margin-bottom: 45px;
			color:white;
		}
		.dis-4{
			background-color: rgba(147, 214, 195, 0.5);
			border-radius: 5px;
			padding-top:15px;
			padding-bottom:15px; 
			margin:5px;
			margin-top: 45px;
			color:white;
		}
		@media (min-width: 900px;) {
			.carousel-item{height: 100%;}
		}
	</style>

 	<div id="MyCarousel" style="position: absolute;top:0px;" class="carousel slide" data-ride="carousel">
	
	  <div class="carousel-inner"  role="listbox">
	    <div class="carousel-item active">
	      <img class="d-block img-fluid" src="../img/sublim_3.jpeg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block img-fluid" src="../img/friends.jpg" alt="Second slide">
	    </div>
	    <div class="carousel-item" >
	      <img class="d-block img-fluid" src="../img/teclado_2.jpg" alt="Third slide">
	    </div>
	  </div>
	 
	<div id="Principal">
		
			<br>
			<div class="dis-3">
			        <h1 class="display-3">Proyecto de Ejemplos</h1>
			        <p class="lead">Creación de un proyecto que contiene ejemplos de una Página PHP con estilos de Bootstrap.</p>
		      	</div>
		      
	            <div id="Cuerpo" class="container-fluid">
		<div class="row">
		      <div class="col dis-4">
		             <h4>Ir a página Compuesta</h4>
		             <p>Ésta página, es un ejemplo de la composición entre diferentes páginas encargadas cada una de lo suyo.</p>
		             <p><a class="btn btn-primary" href= "../vistas/paginaCompuesta.php" role="button">Ver Detalles »</a></p>
		      </div>
		      <div class="col dis-4">
		             <h4>Bienvenida</h4>
		             <p>Página Principal que direccióna a los diferentes ejemplos </p>
		             <p><a class="btn btn-primary" href="../vistas/bien.php" role="button">Ver Detalles »</a></p>
		     </div>
		      <div class="col dis-4">
		             <h4>Form-Validación</h4>
		             <p>En esta página se realiza una importante validación al ingreso de datos o formularios de ingreso</p>
		             <p><a class="btn btn-primary" href="../vistas/form.php" role="button">Ver Detalles »</a></p>
		      </div>
		       <div class="col dis-4">
		             <h4>Formulario-Vindicate</h4>
		             <p>En esta página se aprecia una segunda versión de una validación de datos</p>
		             <p><a class="btn btn-primary" href="../vistas/form_20170920.php" role="button">Ver Detalles »</a></p>
		      </div>
		</div>
	           </div>
	  </div>
	 
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