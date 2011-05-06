<!-- Page header -->
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR PRODUCTO
				</h3>
			</div>

			<div class="container-fluid">
				<ul class="full-box list-unstyled page-nav-tabs">
					<li>
						<a href="<?php SERVERURL; ?>new-producto"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PRODUCTO</a>
					</li>
					<li>
						<a href="<?php SERVERURL; ?>list-producto"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS</a>
					</li>
					<li>
						<a href="<?php SERVERURL; ?>buscar-producto"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PRODUCTOS</a>
					</li>
				</ul>	
			</div>
			
			<!-- Content here-->
			<div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR</legend>
						<div class="container-fluid">
							<div class="row">
								<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="" class="bmd-label-floating" style="color: black">Nombre del producto</label>
									<input type="text" class="form-control" name="" id="">
								</div>
							</div>

							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="" class="bmd-label-floating" style="color: black">Cantidad de productos</label>
									<input type="number" pattern="[0-9()+]{1,20}" class="form-control" name="" id="">
								</div>
							</div>

							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="item_estado" class="bmd-label-floating" style="color: black">grupo</label>
										<select class="form-control" name="" id="">
											<option value="" selected="" disabled="">Seleccione un grupo</option>
											<option value="Cereales">Cereales</option>
											<option value="Lacteos">Lacteos</option>
											<option value="Enlatados">Enlatados</option>
											<option value="Viveres">Viveres</option>
											<option value="Granos">Granos</option>
											<option value="Frutas">Frutas</option>
											<option value="Otro">Otro</option>
										</select>
								</div>
							</div>

							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="item_estado" class="bmd-label-floating" style="color: black">Medida</label>
										<select class="form-control" name="" id="">
											<option value="" selected="" disabled="">Seleccione una medida</option>
											<option value="G">G</option>
											<option value="MG">MG</option>
											<option value="KG">KG</option>
										</select>
								</div>
							</div>

							</div>
						</div>
					</fieldset>
					<br><br><br>
					<p class="text-center" style="margin-top: 40px;">
						<button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync-alt"></i> &nbsp; ACTUALIZAR</button>
					</p>
				</form>
			</div>	