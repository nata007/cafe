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
                                  Gastos de operación
                              </header>
                              <div class="panel-body">
                                  <form role="form">
                                    <div class="row">
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Fecha</label>
                                          <input type="text" class="form-control datepicker" id="cafe_fecha" name="cafe_fecha"
                                          placeholder="Fecha" required>
                                      </div>
                                      <div class="col-md-4 form-group">
                                          <label for="exampleInputPassword1">Concepto</label>
										  <select class="form-control m-b-10" id="cafe_concepto" name="cafe_concepto">
                                          	<option value="Gasolina">Gasolina</option>
                                          	<option value="Jornales">Jornales</option>
                                          </select>
									  </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Cantidad</label>
                                          <input type="number" class="form-control" id="cafe_cantidad" name="cafe_cantidad"
                                          placeholder="Cantidad" required value="0">
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Importe</label>
                                          <input type="number" class="form-control" id="cafe_importe" name="cafe_importe"
                                          placeholder="Importe" required value="0">
                                      </div>
                                    </div>

                                    

                                      <!--
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
