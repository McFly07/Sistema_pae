<!--::::::::::::::::::::::::::::::::::::::::::
===	 		   Header de página		       ===
:::::::::::::::::::::::::::::::::::::::::::--> 
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS
				</h3>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="<?php SERVERURL; ?>new-producto"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PRODUCTO</a>
					</li>
					<li>
						<a class="active" href="<?php SERVERURL; ?>list-producto"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS</a>
					</li>
					<li>
						<a href="<?php SERVERURL; ?>buscar-producto"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PRODUCTO</a>
					</li>
				</ul>	
			</div>
			
	<!--::::::::::::::::::::::::::::::::::::::::::
	===	 		 	 Contenido		   		   ===
	:::::::::::::::::::::::::::::::::::::::::::--> 
			<div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-dark table-sm">
						<thead>
							<tr class="text-center roboto-medium">
								<th>NUMERO</th>
								<th>Fecha de caducidad</th>
								<th>CÓDIGO</th>
								<th>NOMBRE</th>
								<th>CANTIDAD</th>
								<th>GRUPO</th>
								<th>MEDIDA</th>
								<th>Observación</th>
								<th>ACTUALIZAR</th>
								<th>ELIMINAR</th>
							</tr>
						</thead>
						<tbody>
							<tr class="text-center" >
								<td>1</td>
								<td>24 10 2022</td>
								<td>gra-100</td>
								<td>avena</td>
								<td>24</td>
								<td>Granos</td>
								<td>K</td>
								<td>Producto roto</td>
								<td>
									<a href="actualizar-product.php" class="btn btn-success">
	  									<i class="fas fa-sync-alt"></i>	
									</a>
								</td>
								<td>
									<form action="">
										<button type="button" class="btn btn-warning">
		  									<i class="far fa-trash-alt"></i>
										</button>
									</form>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Anterior</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Siguiente</a>
						</li>
					</ul>
				</nav>
			</div>