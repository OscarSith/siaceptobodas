<?php include 'tpl/header.tpl.php'; ?>
<?php include 'tpl/breadcrumbs-row.tpl.html'; ?>
<section class="container">
	<article>
		<div class="col-sm-12">
			<h2 class="page-header">SERVICIOS</h2>
		</div>
		<div class="row service-content">
			<div class="col-sm-6" id="service-image">
				<img src="assets/images/servicios1.jpg" alt="" class="img-responsive" id="servicios1">
				<img src="assets/images/servicios2.jpg" alt="" class="img-responsive hidden" id="servicios2">
				<img src="assets/images/servicios3.jpg" alt="" class="img-responsive hidden" id="servicios3">
			</div>
			<div class="col-sm-6">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" data-img="servicios1"><i class="fa fa-chevron-circle-right"></i>PRODUCCIÓN GENERAL</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
							<p>Creado para parejas que recién empiezan los preparativos y no cuentan con el tiempo suficiente para realizarlo, dejando toda la producción a nuestras manos.</p>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading" role="tab" id="headingTwo">
						  <h4 class="panel-title">
						    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" data-img="servicios2"><i class="fa fa-chevron-circle-right"></i>SERVICIOS ADICIONALES</a>
						  </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						  <div class="panel-body">
						  	<p>Creado para aquellas parejas que cuentan con servicios contratados y desean el servicio de organización y apoyo profesional para las instancias o detalles faltantes.</p>
						  </div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-heading" role="tab" id="headingThree">
						  <h4 class="panel-title">
						    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" data-img="servicios3"><i class="fa fa-chevron-circle-right"></i>PRODUCCIÓN A DISTANCIA</a>
						  </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						  <div class="panel-body">
						    <p>Creado para parejas que se encuentran en el extranjero y desean realizar una boda en el Perú, intregrando sus gustos y decisiones en la planificación, a pesar de la distancia.</p>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
	<article>
		<div class="col-md-12 col-lg-10 col-lg-offset-1">
			<h2>CONTACTO</h2>
			<form role="form" class="contact-form" action="SendMail/fast-contact.php" id="contact-form" method="post">
			<input type="hidden" name="page" value="Servicios">
				<div class="form-group" id="content-messages">
					<?php if (isset($_SESSION['SUCCESS'])): ?>
						<div id="success" class="alert alert-success" role="alert"><?= $_SESSION['SUCCESS'] ?></div>
						<?php unset($_SESSION['SUCCESS']) ?>
					<?php endif ?>
					<?php if (isset($_SESSION['ERROR'])): ?>
						<div id="error" class="alert alert-danger" role="alert"><?php echo $_SESSION['ERROR'] ?></div>
						<?php unset($_SESSION['ERROR']) ?>
					<?php endif ?>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="controls col-sm-6 wow bounceInUp">
							<input type="text" placeholder="Nombre" name="nombre" class="form-control" required>
						</div>
						<div class="controls col-sm-6 wow bounceInUp" data-wow-delay="0.3s">
							<input type="email" class="email form-control" placeholder="Correo" name="email" required>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="controls wow fadeInUp" data-wow-delay="0.5s">
						<textarea rows="7" placeholder="Escribe su mensaje..." name="mensaje" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group text-center">
					<button type="submit" id="submit" class="btn btn-success">ENVIAR</button>
				</div>
			</form>
		</div>
	</article>
</section>
<?php include 'tpl/footer.tpl.html'; ?>