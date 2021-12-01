<?php include('Header.php'); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Registro Ventas</h1>
			</div>

			<div class="articulo">
			<form>
					<!-- 2 column grid layout with text inputs for the first and last names -->
					<div class="row mb-4">
						<div class="col">
						<div class="form-outline">
							<input type="text" id="form6Example1" class="form-control" />
							<label class="form-label" for="form6Example1">Numero de venta</label>
						</div>
						</div>
						<div class="col">
						<div class="form-outline">
							<input type="text" id="form6Example2" class="form-control" />
							<label class="form-label" for="form6Example2">Producto vendido</label>
						</div>
						</div>
					</div>

					<!-- Text input -->
					<div class="form-outline mb-4">
						<input type="text" id="form6Example3" class="form-control" />
						<label class="form-label" for="form6Example3">Mes</label>
					</div>

					<!-- Text input -->
					<div class="form-outline mb-4">
						<input type="text" id="form6Example4" class="form-control" />
						<label class="form-label" for="form6Example4">Dia</label>
					</div>

					<!-- Email input -->
					<div class="form-outline mb-4">
						<input type="email" id="form6Example5" class="form-control" />
						<label class="form-label" for="form6Example5">año</label>
					</div>
					<!-- Submit button -->
					<button type="submit" class="btn btn-info btn-block mb-4">Registrar</button>
		    </form>
			</div>

			<?php include('SideBar.php'); ?>
		</div>
	</section>
	<?php include('Footer.php'); ?>
</body>
</html>