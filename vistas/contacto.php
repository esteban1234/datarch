<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
<div class="banner4">
	<div class="fondo">
		<nav class="pull-left">
			<ul>
				<a class="selector" href="../index.php">INICIO</a>
				<a class="selector" href="nosotros.php">NOSOTROS</a>
				<a class="selector" href="servicios.php">SERVICIOS</a>
				<a class="selector" id="select2" href="contacto.php">CONTACTO</a>
			</ul>
		</nav>

		 <div class="op-menu">
            <i class="fa fa-bars fa-1x i-menu" aria-hidden="true"></i>
        </div>

		<figure class="pull-right logo">
			<img src="../img/ammex.png" alt="AMMEX" class="img-responsive">
		</figure>


		<div class="tit-form1">
			<div class=" col-md-6 tit pull-left text-right tit-contac">
				¡Entérate primero <br> de las mejores ofertas!
			</div>
			<div class="col-md-6 form1 pull-right">
				<form action="#" method="post" class="form">
            <div class="get-in-touch">
                <h3 class="text-center">
                   Solicita una cotización</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="txtNOMBRE" placeholder="Nombre" required/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="txtCORREO" placeholder="Correo" required/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="txtTELEFONO" placeholder="Teléfono" required/>
                </div>
                <div class="form-group">
                    <textarea id="txtCOMENTARIO" class="form-control" rows="3" placeholder="Mensaje" required></textarea>
                </div>
                 <div id="_AJAX_PRE_"></div><br>
                <input type="hidden" id="txtESTATUS" value="2">
                <a href="javascript:void(0)" class="btn btn-danger btn-sm btn-block" role="button" onclick="sendCORREO()"><i class="fas fa-sign-in-alt"></i> ENVIAR</a>
            </div>
            </form>
			</div>
		</div>
	</div>
</div>

<div class="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.55886701894!2d-89.62201568589252!3d21.0103129860084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5676a5f0bd43db%3A0xa172771e0ff815fc!2sCalle+7A+279D%2C+Campestre%2C+97120+M%C3%A9rida%2C+Yuc.!5e0!3m2!1ses-419!2smx!4v1520986259852" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

 <div class="container second-portion">
	<div class="row">
        <!-- Boxes de Acoes -->
    	<div class="col-sm-6 col-md-3">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">CORREO</h3>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; info@turismoammex.com
							<br>
							<br>
							<i class="fa fa-globe" aria-hidden="true"></i> &nbsp; www.turismoammex.comm
						</p>
					
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
			
        <div class="col-sm-6 col-md-3">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">TELEFONO</h3>
    					<p>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp; PENDIENTE
							
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>
		<div class="clearfix visible-sm"></div>
        <div class="col-sm-6 col-md-3">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">DIRECCION</h3>
    					<p>
							 <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; C. 7-A #279-E POR 40 Y 42 COL. FRACC. DEL NORTE, MERIDA, YUCATAN.
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>

		<div class="col-sm-6 col-md-3">
			<div class="box">							
				<div class="icon">
					<div class="image"><i class="far fa-clock" aria-hidden="true"></i></div>
					<div class="info">
						<h3 class="title">HORARIO</h3>
    					<p>
							 <i class="far fa-clock" aria-hidden="true"></i> &nbsp; Lunes a Viernes de 9 am a 6 pm
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div>		    
		
	    
	</div>
</div>
	
  
<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<!-- <script src="../js/funciondthc.js"></script> -->
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
</body>
</html>
