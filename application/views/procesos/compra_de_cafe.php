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
                                  Compras de cafe
                              </header>
                              <div class="panel-body">
                                  <form role="form">
                                  
                                    <div class="row" align="right">
                                      <div class="col-md-12 form-group">
                                          <label for="exampleInputPassword1"><?php echo date('d-m-Y'); ?></label>
                                      </div>
                                    </div>
                                    
                                    <div class="row">
                                      <div class="col-md-6 form-group">
                                          <label for="exampleInputPassword1">Productor de cafe</label>
										  <select class="form-control m-b-10" id="cafe_productor" name="cafe_productor">
                                          	<option value="1">VICTOR MANUEL</option>
                                          	<option value="2">LIZETH</option>
                                          	<option value="3">JUAN PABLO</option>
                                          </select>
									  </div>
                                      <div class="col-md-6 form-group">
                                          <label for="exampleInputPassword1">Tipo de cafe</label>
										  <select class="form-control m-b-10" id="cafe_tipo" name="cafe_tipo">
                                          	<option value="Cereza">Cereza</option>
                                          	<option value="Pergamino">Pergamino</option>
                                          	<option value="Oro">Oro</option>
                                          </select>
									  </div>
                                    </div>
                                    
                                    <div class="row">
                                      <div class="col-md-3 form-group">
                                          <label for="exampleInputEmail1">Cantidad en sacos</label>
                                          <input type="number" class="form-control" id="cafe_sacos" name="cafe_sacos"
                                          placeholder="Sacos" required>
                                      </div>
                                      <div class="col-md-3 form-group">
                                          <label for="exampleInputEmail1">Cantidad en kg</label>
                                          <input type="number" class="form-control" id="cafe_kg" name="cafe_kg"
                                          placeholder="KG" required>
                                      </div>
                                      <div class="col-md-3 form-group">
                                          <label for="exampleInputEmail1">Precio</label>
                                          <input type="number" class="form-control" id="cafe_precio" name="cafe_precio"
                                          placeholder="Precio" required>
                                      </div>
                                      <div class="col-md-3 form-group">
                                          <label for="exampleInputEmail1">Total</label>
                                          <input type="text" class="form-control" id="cafe_total" name="cafe_total"
                                          placeholder="Total" value="0" required disabled="">
                                      </div>
                                    </div>
                                    
                                    <div class="row">
                                      <div class="col-md-6 form-group">
                                          <label for="exampleInputPassword1">Manejo</label>
										  <select class="form-control m-b-10" id="cafe_manejo" name="cafe_manejo">
                                          	<option value="1">Organico</option>
                                          </select>
									  </div>
                                      <div class="col-md-6 form-group">
                                       <div class="checkbox">
                                          <label>
                                              <input type="checkbox" id="cafe_beneficio" name="cafe_beneficio"> Beneficio humedo
                                          </label>
                                      </div>
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
