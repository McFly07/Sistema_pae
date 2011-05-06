 <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PROVEEDOR
                </h3>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a class="active" href="<?php SERVERURL; ?>new-proveedor"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PROVEEDOR</a>
                    </li>
                    <li>
                        <a href="<?php SERVERURL; ?>list-proveedor"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PROVEEDORES</a>
                    </li>
                    <li>
                        <a href="<?php SERVERURL; ?>buscar-proveedor"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PROVEEDOR</a>
                    </li>
                </ul>
            </div>
            
            <!--CONTENT-->
            <div class="container-fluid">
				<form action="" class="form-neon" autocomplete="off">
					<fieldset>
						<legend><i class="far fa-plus-square"></i> &nbsp; Información del proveedor</legend>
						<div class="container-fluid">
							<div class="row">

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="" class="bmd-label-floating" style="color: black">Nombre del proveedor</label>
                                        <input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="" id="" maxlength="140">
                                    </div>
                                </div>

								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="" class="bmd-label-floating" style="color: black">Rif</label>
										<input type="text" pattern="[a-zA-Z0-9-]{1,45}" class="form-control" name="" id="" maxlength="45">
									</div>
								</div>

								<div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="cliente_telefono" class="bmd-label-floating" style="color: black">Teléfono</label>
                                        <input type="text" pattern="[0-9()+]{1,20}" class="form-control" name="cliente_telefono" id="cliente_telefono" maxlength="20">
                                    </div>
                                </div>

								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="item_estado" class="bmd-label-floating" style="color: black">Sector</label>
										<select class="form-control" name="" id="">
											<option value="" selected="" disabled="">Seleccione una sector</option>
											<option value="Público">Público</option>
											<option value="Privado">Privado</option>
										</select>
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