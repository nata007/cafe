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
                                  Beneficio humedo
                              </header>
                            <div class="panel-footer bg-white">
                                <!-- <span class="pull-right badge badge-info">32</span> -->
                                <button class="btn btn-primary btn-addon btn-sm" 
                                onClick="location.href='<?php echo site_url('PORDEFINIR/PORDEFINIR');?>'">
                                <i class="fa fa-plus"></i> Ver compras pendientes
                                </button>
                            </div>
                              <div class="panel-body">
                                  <form role="form">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="exampleInputPassword1"><?php echo 'FECHA DE COMPRA: XXXX-XX-XX' ?></label>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">kg de la compra</label>
                                          <input type="number" class="form-control" id="cafe_compra" name="cafe_compra"
                                          placeholder="Compra" value="400" required disabled="">
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Fecha de ingreso</label>
                                          <input type="text" class="form-control datepicker" id="cafe_ingreso" name="cafe_ingreso"
                                          placeholder="Ingreso" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Fecha de salida</label>
                                          <input type="text" class="form-control datepicker" id="cafe_salida" name="cafe_salida"
                                          placeholder="Salida" required>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="exampleInputPassword1">RENDIMIENTO</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Kgs. Pergamino</label>
                                          <input type="number" class="form-control" id="cafe_pergamino" name="cafe_pergamino"
                                          placeholder="Pergamino" required value="0">
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Kgs. Espumilla </label>
                                          <input type="number" class="form-control" id="cafe_espumilla" name="cafe_espumilla"
                                          placeholder="Espumilla" required value="0">
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Kgs. Flote </label>
                                          <input type="number" class="form-control" id="cafe_flote" name="cafe_flote"
                                          placeholder="Flote" required value="0">
                                      </div>
                                      <div class="col-md-3 form-group">
                                          <label for="exampleInputEmail1">Total de kilos de rendimiento</label>
                                          <input type="text" class="form-control" id="cafe_compra" name="cafe_compra"
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
