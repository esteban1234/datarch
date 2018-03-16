<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

<div class="banner2">
	<div class="fondo">
		<nav class="pull-left">
			<ul>
				<a class="selector" href="../index.php">INICIO</a>
				<a class="selector" id="select" href="nosotros.php">NOSOTROS</a>
				<a class="selector" href="servicios.php">SERVICIOS</a>
				<a class="selector" href="contacto.php">CONTACTO</a>
			</ul>
		</nav>
    
    <div class="op-menu">
      <i class="fa fa-bars fa-1x i-menu" aria-hidden="true"></i>
    </div>

		<figure class="pull-right logo">
			<img src="../img/ammex.png" alt="AMMEX" class="img-responsive">
		</figure>


		<div class="tit-form1">
			<div class=" col-md-6 tit pull-left text-right">
				Aquí podrás encontrar los mejores paquetes y tips para tu viaje
			</div>
			<div class="col-md-6 form1 pull-right">
				<form  method="post" class="form">
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

<div class="section" style="padding: 5% 0%;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center tit-pammex">¿Por qué comprar en AMMEX?</h1>
            <p class="text-center">Expertos en viajes</p>
          </div>
        </div> <br><br>
        <div class="row">
          <div class="col-xs-12 col-sm-1 col-md-1 cont-i">
            <i class="fas fa-user-plus fa-5x tamano-i" style="color: #ED6A16;"></i>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3">
            <h3 class="text-left tit-alp">Atención personalizada</h3>
            <p class="text-left subtit-alp">Siempre asesoramiento personalizado por profesionales expertos en Viajes.</p>
          </div>
          <div class="col-xs-12 col-sm-1 col-md-1 cont-i">
            <i class="fas fa-thumbs-up fa-5x tamano-i" style="color: #ED6A16;"></i>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3">
            <h3 class="text-left tit-alp">La mejor atención post-venta</h3>
            <p class="text-left subtit-alp">Ofreciéndote la mejor atención, las mejores ofertas de viajes y los mejores precios.</p>
          </div>
          <div class="col-xs-12 col-sm-1 col-md-1 cont-i">
            <i class="fas fa-credit-card fa-5x tamano-i" style="color: #ED6A16;"></i>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3">
            <h3 class="text-left tit-alp">Los mejores precios</h3>
            <p class="text-left subtit-alp">Trabajamos con Todas las Tarjetas y Bancos para tus vacaciones soñadas.</p>
          </div>
        </div>
        
      </div>
    </div>

    <div class="section" style="padding: 5% 0%; background-color: #ED6A16;">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-4">
            <figure class="logo2">
			       <img src="../img/ammex.jpg" alt="AMMEX" class="img-responsive">
			      </figure>
            <h2 class="tit-nmv" style="color: #fff;">NOSOTROS</h2>
            <p class="txt-nmv" style="color: #fff;">AMMEX es una agencia de viajes. Una empresa que cuenta con experiencia en el ramo de turismo, especializados en viajes grupales y personalizados alrededor del mundo. Nos distingue una excelente atención al cliente, su satisfacción siempre es nuestra prioridad; por lo mismo ofrecemos servicios integrales en el exterior, sin intermediarios y siempre acompañados por un miembro de la empresa desde el inicio del viaje.</p>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="iconos" style=" text-align: center;">
            	<i class="fas fa-handshake fa-5x" style="color: #fff;"></i>
            </div>
            <h2 class="tit-nmv" style="color: #fff;">MISION</h2>
            <p class="txt-nmv" style="color: #fff;">Satisfacer las necesidades de nuestros clientes a través de la prestación de un servicio profesional, eficiente y personalizado ofreciendo las mejores opciones, tarifas y horarios en: excursiones, paquetes, boletos de avión, cruceros y más.</p>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="iconos" style=" text-align: center;">
            	<i class="fas fa-chart-line fa-5x" style="color: #fff;"></i>
            </div>
            <h2 class="tit-nmv" style="color: #fff;">VISION</h2>
            <p class="txt-nmv" style="color: #fff;">Ser una empresa líder, brindando al cliente una satisfacción total, asimismo seguir proporcionando un servicio de calidad y seguridad que beneficie a la empresa, pero sobre todo a los usuarios de nuestro servicio</p>
          </div>
        </div>
      </div>
    </div>


    <div class="section" style="padding: 5% 0%;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center tit-ecn">¡Ellos ya confiaron en nosotros!</h1>
            <!-- <p class="text-center">Expertos en viajes</p> -->
          </div>
        </div> <br><br>
        <div class="row">
          <div class="col-xs-12 col-md-1 cont-i">
            <i class=" fas fa-user-circle fa-5x" style="color: #ED6A16;"></i>
          </div>
          <div class="col-xs-12 col-md-3">
            <h3 class="text-left tit-rcv">Raul</h3>
            <p class="text-left subtit-rcv">Todo resultó tal como estaba planificado y detallado en el itinerario, totalmente recomendables y confiables.</p>
          </div>
          <div class="col-xs-12 col-md-1 cont-i">
            <i class="fas fa-user-circle fa-5x" style="color: #ED6A16;"></i>
          </div>
          <div class="col-xs-12 col-md-3">
            <h3 class="text-left tit-rcv">Carlos</h3>
            <p class="text-left subtit-rcv">Excelente agencia, la recomiendo 100%. Todo resultó perfecto.</p>
          </div>
          <div class="col-xs-12 col-md-1 cont-i">
            <i class="fas fa-user-circle fa-5x" style="color: #ED6A16;"></i>
          </div>
          <div class="col-xs-12 col-md-3">
            <h3 class="text-left tit-rcv">Veronica</h3>
            <p class="text-left subtit-rcv">Es la primera vez que viajo con esta Agencia y todo me resultó como uno espera: todo como un reloj de arena.</p>
          </div>
        </div>
        
      </div>
    </div>

    <div class="container" style="margin-bottom: 2%;">
	<div class="row text-center">
            <a href="contacto.php" class="btn btn-warning btn-outline btn-lg">CONTACTANOS</a>
	</div>
</div>

<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>


<script src="../js/jquery.js"></script>
<script src="../js/arriba.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
</body>
</html>
