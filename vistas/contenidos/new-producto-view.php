                    <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO PRODUCTO
                </h3>
            </div>
            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a class="active" href="<?php SERVERURL; ?>new-producto"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO PRODUCTO</a>
                    </li>
                    <li>
                        <a href="<?php SERVERURL; ?>list-producto"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTO</a>
                    </li>
                    <li>
                        <a href="<?php SERVERURL; ?>buscar-producto"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; BUSCAR PRODUCTO</a>
                    </li>
                </ul>
            </div>
            
					<form action="" autocomplete="off">
						<fieldset>
							<legend><i class="far fa-plus-square"></i> &nbsp; Registrar producto</legend>
							<div class="container-fluid">
								<div class="row">
									<div class="col-12 col-md-6">
										<div class="form-group">
											<label for="prestamo_fecha_inicio">Fecha de registro</label>
											<input type="date" class="form-control" name="prestamo_fecha_inicio" id="admin-dni">
										</div>
									</div>

									<div class="col-12 col-md-6">
										<div class="form-group">
										<label for="" class="bmd-label-floating" style="color: black">Nombre del producto</label>
										<input type="text" class="form-control" name="" id="">
										</div>
									</div>
									
									
									<div class="col-12 col-md-6">
								<div class="form-group bm-form-group is-filled">
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
											<label for="" class="bmd-label-floating">Cantidad de productos</label>
											<input type="text" pattern="[0-9.]{1,10}" class="form-control" name="prestamo_total" id="prestamo_total" maxlength="10">
										</div>
									</div>
	                                <div class="col-12">
	                                    <div class="form-group">
	                                        <label for="prestamo_observacion" class="bmd-label-floating">Observación</label>
	                                        <input type="text" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ#() ]{1,400}" class="form-control" name="prestamo_observacion" id="prestamo_observacion" maxlength="400">
	                                    </div>
	                                </div>
								</div>
							</div>
						</fieldset>
						<br><br><br>
						<p class="text-center" style="margin-top: 40px;">
							<button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
							&nbsp; &nbsp;
							<button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
						</p>
					</form>
            	</div>
			</div>