               <!-- Main content -->
                <section class="content">
                    <div class="row">

<!--		<div class="col-md-8"> linea original -->
            <div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						Todos los clientes
					</header>
					<div class="panel-footer bg-white">
						<!-- <span class="pull-right badge badge-info">32</span> -->
						<button class="btn btn-primary btn-addon btn-sm" 
                        onClick="location.href='<?php echo site_url('organizacion/nueva_organizacion');?>'">
						<i class="fa fa-plus"></i> Añadir organización
						</button>
					</div>
					<div class="panel-body table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Lugar</th>
                                      <th>Calle</th>
                                      <th>Numero</th>
                                      <th>Responsable</th>
                                      <th>Rol</th>
                                      <th>Clave</th>
                                  </tr>
                              </thead>
                              <tbody>
<?php		if(count($resultados)>=1){
			foreach($resultados as $re){ ?>
                                <tr>
                                  <td><?php echo $re->id_organizacion;?></td>
                                  <td><?php echo $re->ca_lugar;?></td>
                                  <td><?php echo $re->ca_calle;?></td>
                                  <td><?php echo $re->ca_numero;?></td>
                                  <td><?php echo $re->ca_responsable;?></td>
                                  <td><?php echo $re->rol;?></td>
                                  <td><?php echo $re->clave_prod;?></td>
                              </tr>
				<?php } //fin de foreach 
                        }
                        else
                        { ?>
                <tr>
                    <td colspan="10">No se encontraron registros</td>
                </tr>
                <?	}//fin de if-else ?>
                          </tbody>
                      </table>
					</div>
				</section>
			</div><!--end col-6 -->
          
              </div><!-- row end -->
                </section><!-- /.content -->
                

            </aside><!-- /.right-side -->
            
            <div class="footer-main">
				Derechos Reservados &copy CAFE, 2016
            </div>
        </div><!-- ./wrapper -->
</body>
</html>