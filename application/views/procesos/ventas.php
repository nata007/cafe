                <!-- Main content -->
                <section class="content">
                    <div class="row">
                    
	<?php 
		$attributes = array('id' => 'form1');
		echo form_open('PORDEFINIR/PORDEFINIR',$attributes);
		echo validation_errors();
	?>
    
                      <div class="col-lg-12">
                          <section class="panel">
                              <header class="panel-heading">
                                  Ventas
                              </header>
                              <div class="panel-body">
                                  <form role="form">
                                    <div class="row" align="right">
                                      <div class="col-md-12 form-group">
                                          <label for="exampleInputPassword1"><?php echo date('d-m-Y'); ?></label>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-4 form-group">
                                          <label for="exampleInputPassword1">Cliente</label>
										  <select class="form-control m-b-10" id="cafe_cliente" name="cafe_cliente">
                                          	<option value="LIZETH">LIZETH</option>
                                          </select>
									  </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputPassword1">Mercado</label>
										  <select class="form-control m-b-10" id="cafe_mercado" name="cafe_mercado">
                                          	<option value="Nacional">Nacional</option>
                                          </select>
									  </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="exampleInputPassword1">DETALLE DE PEDIDO</label>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputPassword1">Tipo de cafe</label>
										  <select class="form-control m-b-10" id="cafe_tipo" name="cafe_tipo">
                                          	<option value="Cereza">Cereza</option>
                                          	<option value="Pergamino">Pergamino</option>
                                          	<option value="Oro">Oro</option>
                                          </select>
									  </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputPassword1">Calidad</label>
										  <select class="form-control m-b-10" id="cafe_calidad" name="cafe_calidad">
                                          	<option value="Nacional">Nacional</option>
                                          	<option value="Exportación">Exportación</option>
                                          </select>
									  </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputPassword1">Presentación</label>
										  <select class="form-control m-b-10" id="cafe_presentacion" name="cafe_presentacion">
                                          	<option value="Seco">Seco</option>
                                          </select>
									  </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Cantidad kgs</label>
                                          <input type="number" class="form-control" id="cafe_compra1" name="cafe_compra1"
                                          placeholder="Cantidad" value="0" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Precio kgs</label>
                                          <input type="number" class="form-control" id="cafe_precio1" name="cafe_precio1"
                                          placeholder="Precio" value="0" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Total</label>
                                          <input type="number" class="form-control" id="cafe_total1" name="cafe_total1"
                                          placeholder="Total" value="0" required disabled="">
                                      </div>
                                    </div>

                                    

                                      <!--
                                      <div class="form-group">
                                          <label for="exampleInputPassword1">Correo electronico</label>
                                          <input type="email" class="form-control" id="cafe_email" name="cafe_email" 
                                          placeholder="Correo electronico" maxlength="50" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputPassword1">Organizacion</label>
										  <select class="form-control m-b-10" id="cafe_organizacion" name="cafe_organizacion">
                                          	<option value="1">Organización 1</option>
                                          </select>
									  </div>
                                      <div class="checkbox">
                                          <label>
                                              <input type="checkbox"> Check me out
                                          </label>
                                      </div>
                                      -->
                                      <button type="submit" class="btn btn-info">Submit</button>
                                  </form>

                              </div>
                          </section>
                      </div>
                      
	<?php 
		echo form_close(); 
	?>
                      
                    </div><!--row1-->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
            
            <div class="footer-main">
				Derechos Reservados &copy CAFE, 2016
            </div>
        </div><!-- ./wrapper -->

    </body>
</html>
