<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>
<header>
        <nav class="pull-left">
            <ul>
                <a class="selector" href="../index.php">INICIO</a>
                <a class="selector" href="nosotros.php">NOSOTROS</a>
                <a class="selector" href="servicios.php">PRODUCTOS</a>
                <a class="selector" id="select" href="contacto.php">CONTACTO</a>
            </ul>
        </nav>

        <figure class="logo pull-right">
            <img src="../img/datarch.png" alt="DATARCH" class="img-responsive">
        </figure>
    </header>

    <div class="mapa">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d567.9026705510128!2d-93.12229897926382!3d16.757831289421038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd8f210e08741%3A0x2d09c0a7da9b746a!2sc2%2C+Av.+4a.+Nte.+Pte.+688%2C+Guadalupe%2C+29000+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1521829883929" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <div class="section" style="padding: 5% 0%; background: #BA5417;">
      <div class="container">
      	 <h2 class="text-center" style="color: #fff;">Ven a vernos o contáctanos</h2> <br><br>
        <div class="row">
          <div class="col-md-6" style="color: #fff;">
            <!-- <h1>A title</h1> -->
            <p></p>
            <p>
            <b>Dirección:</b> Av. 4ta Nte Pte #688 C2 por C. 5-A y C. 6ta Pte Cond Argentin Col. Teran, Tuxtla Gutierrez, Chiapas. C.P. 29050 <br><br>
            <b>Horario:</b> Lunes a Viernes de 9 am a 6 pm <br><br>
        	<b>Correo:</b> info@serviciosdatarch.com <br><br>
    		<b>Teléfono:</b> PENDIENTE<br></p>
            <p></p>
          </div>
          <div class="col-md-6">
            <!-- <h1>A title</h1> -->
            <p></p>
            <p class="textoc">No dudes en contactarnos. <br><br> Estamos aquí para atenderte y ayudarte a encontrar lo que necesitas.</p>
            <p></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
		<div class="container">
			<div class="formBox">
				<form>
						<div class="row">
							<div class="col-sm-12">
								<h1>¡Contáctanos ya!</h1>
								<h2 class="text-center">Dinos qué necesitas y te responderemos en las próximas 24 horas</h2>
							</div>
						</div> <br><br>

						<div class="row">
							<div class="col-sm-6">
								<div class="inputBox ">
									<div class="inputText">Nombre (s):</div>
									<input type="text" name="" class="input">
								</div>
							</div>

							<div class="col-sm-6">
								<div class="inputBox">
									<div class="inputText">Apellido (s):</div>
									<input type="text" name="" class="input">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6">
								<div class="inputBox">
									<div class="inputText">Correo:</div>
									<input type="text" name="" class="input">
								</div>
							</div>

							<div class="col-sm-6">
								<div class="inputBox">
									<div class="inputText">Teléfono:</div>
									<input type="text" name="" class="input">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<div class="inputBox">
									<div class="inputText">Comentario:</div>
									<textarea class="input"></textarea>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								<input type="submit" name="" class="button" value="ENVIAR MENSAJE">
							</div>
						</div>
				</form>
			</div>
		</div>
	</div>
  
<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<script src="../js/form.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
</body>
</html>
