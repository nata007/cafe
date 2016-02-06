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
                                  Contratos
                              </header>
                              <div class="panel-body">
                                  <form role="form">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="exampleInputPassword1">NUEVO CONTRATO</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">No. Contrato</label>
                                          <input type="text" class="form-control" id="cafe_contrato" name="cafe_contrato"
                                          placeholder="No. Contrato" required value="0">
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Volumen kgs</label>
                                          <input type="number" class="form-control" id="cafe_volumen" name="cafe_volumen"
                                          placeholder="Volumen" required value="0">
                                      </div>
                                      <div class="col-md-5 form-group">
                                          <label for="exampleInputPassword1">Cliente</label>
										                      <select class="form-control m-b-10" id="cafe_cliente" name="cafe_cliente">
                                          	<option value="LIZETH">LIZETH</option>
                                          </select>
									                    </div>
                                      <div class="col-md-3 form-group">
                                          <label for="exampleInputPassword1">Destino</label>
										                      <select class="form-control m-b-10" id="cafe_destino" name="cafe_destino">
                                          	<option value="Holanda">Holanda</option>
                                          </select>
									                    </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="exampleInputPassword1">DETALLE DE CONTRATO</label>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputPassword1">Tipo de cafe</label>
										                      <select class="form-control m-b-10" id="cafe_tipo1" name="cafe_tipo1">
                                          	<option value="Cereza">Cereza</option>
                                          	<option value="Pergamino">Pergamino</option>
                                          	<option value="Oro">Oro</option>
                                          </select>
									                    </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Fecha de entrega</label>
                                          <input type="text" class="form-control datepicker" id="cafe_entrega1" name="cafe_entrega1"
                                          placeholder="Entrega" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Cantidad kgs</label>
                                          <input type="number" class="form-control" id="cafe_compra1" name="cafe_compra1"
                                          placeholder="Cantidad" value="0" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Precio base kgs</label>
                                          <input type="number" class="form-control" id="cafe_precio1" name="cafe_precio1"
                                          placeholder="Precio" value="0" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputPassword1">Punto de entrega</label>
										                      <select class="form-control m-b-10" id="cafe_punto1" name="cafe_punto1">
                                          	<option value="Queseria">Queseria</option>
                                          </select>
									                    </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputPassword1">Condiciones de pago</label>
										                      <select class="form-control m-b-10" id="cafe_pago1" name="cafe_pago1">
                                          	<option value="Anticipado">Anticipado</option>
                                          	<option value="Contraentrega">Contraentrega</option>
                                          </select>
									                    </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputPassword1">Tipo de cafe</label>
										                      <select class="form-control m-b-10" id="cafe_tipo2" name="cafe_tipo2">
                                          	<option value="Cereza">Cereza</option>
                                          	<option value="Pergamino">Pergamino</option>
                                          	<option value="Oro">Oro</option>
                                          </select>
									                    </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Fecha de entrega</label>
                                          <input type="text" class="form-control datepicker" id="cafe_entrega2" name="cafe_entrega2"
                                          placeholder="Entrega" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Cantidad kgs</label>
                                          <input type="number" class="form-control" id="cafe_compra2" name="cafe_compra2"
                                          placeholder="Cantidad" value="0" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Precio base kgs</label>
                                          <input type="number" class="form-control" id="cafe_precio2" name="cafe_precio2"
                                          placeholder="Precio" value="0" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputPassword1">Punto de entrega</label>
										                      <select class="form-control m-b-10" id="cafe_punto2" name="cafe_punto2">
                                          	<option value="Queseria">Queseria</option>
                                          </select>
									                    </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputPassword1">Condiciones de pago</label>
										                      <select class="form-control m-b-10" id="cafe_pago2" name="cafe_pago2">
                                          	<option value="Anticipado">Anticipado</option>
                                          	<option value="Contraentrega">Contraentrega</option>
                                          </select>
									                    </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputPassword1">Tipo de cafe</label>
										                      <select class="form-control m-b-10" id="cafe_tipo3" name="cafe_tipo3">
                                          	<option value="Cereza">Cereza</option>
                                          	<option value="Pergamino">Pergamino</option>
                                          	<option value="Oro">Oro</option>
                                          </select>
									                    </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Fecha de entrega</label>
                                          <input type="text" class="form-control datepicker" id="cafe_entrega3" name="cafe_entrega3"
                                          placeholder="Entrega" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Cantidad kgs</label>
                                          <input type="number" class="form-control" id="cafe_compra3" name="cafe_compra3"
                                          placeholder="Cantidad" value="0" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Precio base kgs</label>
                                          <input type="number" class="form-control" id="cafe_precio3" name="cafe_precio3"
                                          placeholder="Precio" value="0" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputPassword1">Punto de entrega</label>
										                      <select class="form-control m-b-10" id="cafe_punto3" name="cafe_punto3">
                                          	<option value="Queseria">Queseria</option>
                                          </select>
									                    </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputPassword1">Condiciones de pago</label>
										                      <select class="form-control m-b-10" id="cafe_pago3" name="cafe_pago3">
                                          	<option value="Anticipado">Anticipado</option>
                                          	<option value="Contraentrega">Contraentrega</option>
                                          </select>
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
