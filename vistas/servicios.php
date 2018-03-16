<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

	<div class="banner3">
	<div class="fondo">
		<nav class="pull-left">
			<ul>
				<a class="selector" href="../index.php">INICIO</a>
				<a class="selector" href="nosotros.php">NOSOTROS</a>
				<a class="selector" id="select2" href="servicios.php">SERVICIOS</a>
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
			<div class=" col-md-6 tit pull-left text-right tit-serv">
				Viajes: busque, <br> compare y <br> ahorre
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
                <a href="javascript:void(0)" class="btn btn-danger btn-sm btn-block" role="button" onclick="sendCORREO()"><i class="fas fa-sign-in-alt" ></i> ENVIAR</a>
            </div>
            </form>
			</div>
		</div>
	</div>
</div>
 
 <div class="container" style="padding: 5% 0%;">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">DESTINOS</h1>
        </div>

        <div align="center" class="cont-op">
            <button class="btn btn-default filter-button" data-filter="all">Todos</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">México</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Norte America</button>
            <button class="btn btn-default filter-button" data-filter="spray">Europa</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Latino America</button>
        </div>
        <br/>



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
                <img src="../img/aguazaul01.jpg" class="img-responsive">
                <div class="nameimg">Agua Azul, Chiapas</div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter sprinkle">
                <img src="../img/norteamerica0101.jpg" class="img-responsive">
                <div class="nameimg">Estados Unidos</div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
                <img src="../img/monterrey01.jpg" class="img-responsive">
                <div class="nameimg">Monterrey</div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter irrigation">
                <img src="../img/latino0101.jpg" class="img-responsive">
                <div class="nameimg">Machu Picchu</div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter spray">
                <img src="../img/europa0101.jpg" class="img-responsive">
                <div class="nameimg">Estrasburgo</div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter irrigation">
                <img src="../img/latino0202.jpg" class="img-responsive">
                <div class="nameimg">Lima</div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter spray">
                <img src="../img/europa0202.jpg" class="img-responsive">
                <div class="nameimg">Grecia</div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter irrigation">
                <img src="../img/brasil01.jpg" class="img-responsive">
                <div class="nameimg">Brasil</div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter irrigation">
                <img src="../img/argentina01.jpg" class="img-responsive">
                <div class="nameimg">Argentina</div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter hdpe">
                <img src="../img/toluca01.jpg" class="img-responsive">
                <div class="nameimg">Toluca</div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter spray">
                <img src="../img/europa0303.jpg" class="img-responsive">
                <div class="nameimg">Ámsterdam</div>
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-12 filter sprinkle">
                <img src="../img/toronto01.jpg" class="img-responsive">
                <div class="nameimg">Toronto, Canada</div>
            </div>
        </div>
    </div>
</section>

	
	

<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/arriba.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/galeria.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
</body>
</html>

