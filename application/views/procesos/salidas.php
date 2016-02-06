                <!-- Main content -->
                <section class="content">
                    <div class="row">

<!--		<div class="col-md-8"> linea original -->
            <div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						Todas las salidas
					</header>
					<div class="row" align="center">
						<div class="col-md-12 form-group">
							<label for="exampleInputPassword1"><?php echo 'CLAVE O NOMBRE DE ORGANIZACIÓN' ?></label>
						</div>
					</div>
					<div class="panel-body table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>Fecha de salida</th>
                                      <th>Tipo de cafe</th>
                                      <th>Calidad de cafe</th>
                                      <th>Cantidad en kg</th>
                                      <th>Cantidad en sacos</th>
                                  </tr>
                              </thead>
                              <tbody>
<?php
		//////////QUITAR LA LINEA INFERIOR PARA DESPLEGAR DESDE MODELO
		$resultados = array();
		
		if(count($resultados)>=1){
			foreach($resultados as $re){ ?>
                                <tr>
                                      <th>--</th>
                                      <th>--</th>
                                      <th>--</th>
                                      <th>--</th>
                                      <th>--</th>
                              </tr>
				<?php } //fin de foreach 
                        }
                        else
                        { ?>
                <tr>
                    <td colspan="5">No se encontraron registros</td>
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
