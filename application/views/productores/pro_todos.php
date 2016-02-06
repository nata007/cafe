                <!-- Main content -->
                <section class="content">
                    <div class="row">

<!--		<div class="col-md-8"> linea original -->
            <div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						Todos los productores
					</header>
					<div class="panel-footer bg-white">
						<!-- <span class="pull-right badge badge-info">32</span> -->
						<button class="btn btn-primary btn-addon btn-sm" 
                        onClick="location.href='<?php echo site_url('Productores/nuevo_productor');?>'">
						<i class="fa fa-plus"></i> Adicionar productor
						</button>
					</div>
					<div class="panel-body table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>Clave</th>
                                      <th>Nombre</th>
                                      <th>RFC</th>
                                      <th>Calle</th>
                                      <th>Num. Ext</th>
                                      <th>Telefono</th>
                                      <th>Fecha ingreso</th>
                                  </tr>
                              </thead>
                              <tbody>
<?php		if(count($resultados)>=1){
			foreach($resultados as $re){ ?>
                                <tr>
                                  <td><?php echo $re->clave_productor;?></td>
                                  <td><?php echo $re->prd_nombre;?></td>
                                  <td><?php echo $re->prd_rfc;?></td>
                                  <td><?php echo $re->prd_calle;?></td>
                                  <td><?php echo $re->prd_numero;?></td>
                                  <td><?php echo $re->prd_telefono;?></td>
                                  <td><?php echo $re->prd_fecha_ingreso;?></td>
                              </tr>
				<?php } //fin de foreach 
                        }
                        else
                        { ?>
                <tr>
                    <td colspan="7">No se encontraron registros</td>
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
