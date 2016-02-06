                <!-- Main content -->
                <section class="content">
                    <div class="row">

<!--		<div class="col-md-8"> linea original -->
            <div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						Todos los empleados
					</header>
					<div class="panel-footer bg-white">
						<!-- <span class="pull-right badge badge-info">32</span> -->
						<button class="btn btn-primary btn-addon btn-sm" 
                        onClick="location.href='<?php echo site_url('Empleados/nuevo_usuario');?>'">
						<i class="fa fa-plus"></i> Adicionar empleado
						</button>
					</div>
					<div class="panel-body table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>#</th>
                                      <th>Nombre y Apellido</th>
                                      <th>CURP</th>
                                      <th>Calle</th>
                                      <th>Num.</th>
                                      <th>Lugar</th>
                                      <th>Estado</th>
                                      <th>Teléfono</th>
                                  </tr>
                              </thead>
                              <tbody>
<?php		if(count($resultados)>=1){
			foreach($resultados as $re){ ?>
                                <tr>
                                  <td><?php echo $re->id_empleado;?></td>
                                  <td><?php echo $re->em_nombre;?></td>
                                  <td><?php echo $re->em_curp;?></td>
                                  <td><?php echo $re->calle;?></td>
                                  <td><?php echo $re->numero;?></td>
                                  <td><?php echo $re->lugar;?></td>
                                  <td><?php echo $re->estado;?></td>
                                  <td><?php echo $re->telefono;?></td>
                              </tr>
				<?php } //fin de foreach 
                        }
                        else
                        { ?>
                <tr>
                    <td colspan="8">No se encontraron registros</td>
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
