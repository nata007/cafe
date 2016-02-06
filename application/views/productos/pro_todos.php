                <!-- Main content -->
                <section class="content">
                    <div class="row">

<!--		<div class="col-md-8"> linea original -->
            <div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						Todos los productos
					</header>
					<div class="panel-footer bg-white">
						<!-- <span class="pull-right badge badge-info">32</span> -->
						<button class="btn btn-primary btn-addon btn-sm" 
                        onClick="location.href='<?php echo site_url('Productos/nuevo_producto');?>'">
						<i class="fa fa-plus"></i> Adicionar producto
						</button>
					</div>
					<div class="panel-body table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Nombre</th>
                                      <th>Procesado</th>
                                      <th>Presentación</th>
                                      <th>Gramaje</th>
                                      <th>Precio</th>
                                  </tr>
                              </thead>
                              <tbody>
<?php		if(count($resultados)>=1){
			foreach($resultados as $re){ ?>
                                <tr>
                                  <td><?php echo $re->id_producto;?></td>
                                  <td><?php echo $re->pdcto_nombre;?></td>
                                  <td><?php echo $re->pdcto_procesado;?></td>
                                  <td><?php echo $re->pdcto_presentacion;?></td>
                                  <td><?php echo $re->pdcto_gramaje;?></td>
                                  <td><?php echo $re->pdcto_precio;?></td>
                              </tr>
				<?php } //fin de foreach 
                        }
                        else
                        { ?>
                <tr>
                    <td colspan="6">No se encontraron registros</td>
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
