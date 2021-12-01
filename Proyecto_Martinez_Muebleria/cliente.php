<?php include('Header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Registro Clientes</h1>
			</div>

			<div class="articulo">
			<form>
					<!-- Name input -->
					<div class="form-outline mb-4">
						<input type="text" id="form5Example1" class="form-control" />
						<label class="form-label" for="form5Example1">Nombre</label>
					</div>

					<!-- Email input -->
					<div class="form-outline mb-4">
						<input type="email" id="form5Example2" class="form-control" />
						<label class="form-label" for="form5Example2">Correo Electronico</label>
					</div>
					

					<!-- Submit button -->
					<button type="submit" class="btn btn-info btn-block mb-4">Suscribirse</button>
			</form>
			</div>

			<?php include('SideBar.php'); ?>
		</div>
	</section>
	<?php include('Footer.php'); ?>
</body>
</html>