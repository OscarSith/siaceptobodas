<?php include 'tpl/header.tpl.php'; ?>
<?php include 'tpl/breadcrumbs-row.tpl.html'; ?>
<section class="container">
	<h1 class="page-header">COTIZACIÓN</h1>
	<div class="col-lg-10 col-lg-offset-1">
		<form class="form-horizontal" method="post" action="SendMail/send-cotizacion.php">
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
			<div class="bloque">
				<h3>INFORMACIÓN PERSONAL</h3>
				<div class="form-group">
					<label for="" class="control-label col-sm-3">NOMBRES Y APELLIDOS</label>
					<div class="col-sm-9"><input type="text" class="form-control" name="nombres" required></div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-3">CORREO</label>
					<div class="col-sm-4 has-feedback">
						<input type="email" class="form-control" name="correo" required>
						<div class="form-control-feedback"><i class="fa fa-envelope"></i></div>
					</div>
					<label for="" class="control-label col-sm-2">TEL./CEL.</label>
					<div class="col-sm-3 has-feedback">
						<input type="text" class="form-control" name="telefono">
						<div class="form-control-feedback"><i class="fa fa-phone"></i></div>
					</div>
				</div>
			</div>
			<div class="bloque">
				<h3>INFORMACIÓN DEL EVENTO</h3>
				<div class="form-group">
					<label for="" class="control-label col-sm-3">TIPO DE SERVICIO</label>
					<div class="col-sm-9">
						<div class="row">
							<div class="col-sm-4">
								<div class="radio">
									<label for="p_general">
										<input type="radio" id="p_general" name="servicio" value="PRODUCCIÓN GENERAL"> PRODUCCIÓN GENERAL
									</label>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="radio">
									<label for="s_adicionales">
										<input type="radio" id="s_adicionales" name="servicio" value="SERVICIOS ADICIONALES"> SERVICIOS ADICIONALES
									</label>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="radio">
									<label for="p_distancia">
										<input type="radio" id="p_distancia" name="servicio" value="PRODUCCIÓN DISTANCIA"> PRODUCCIÓN DISTANCIA
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-3">LOCACIÓN</label>
					<div class="col-sm-9">
						<div class="radio">
							<label for="si_tengo"><input type="radio" id="si_tengo" name="locacion" value="SI TENGO"> SI TENGO</label>
						</div>
						<div class="radio">
							<label for="no_tengo"><input type="radio" id="no_tengo" name="locacion" value="NO TENGO"> NO TENGO</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="" class="control-label col-sm-3">POSIBLE FECHA</label>
					<div class="col-sm-3 has-feedback">
						<input type="text" class="form-control" name="posible_fecha" id="posible_fecha">
						<div class="form-control-feedback"><i class="fa fa-calendar"></i></div>
					</div>
					<label for="" class="control-label col-sm-3">NRO. INVITADOS</label>
					<div class="col-sm-3 has-feedback">
						<input type="text" class="form-control" name="nro_invitados">
						<div class="form-control-feedback"><i class="fa fa-group"></i></div>
					</div>
				</div>
			</div>
			<div class="form-group text-center">
				<button class="btn btn-success">ENVIAR</button>
				<button type="reset" class="btn btn-success">LIMPIAR</button>
			</div>
		</form>
	</div>

</section>
<?php include 'tpl/footer.tpl.html'; ?>