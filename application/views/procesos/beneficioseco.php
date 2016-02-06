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
                                  Beneficio seco
                              </header>
                              <div class="panel-body">
                                  <form role="form">
                                    
                                    <div class="row">
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Fecha de ingreso</label>
                                          <input type="date" class="form-control datepicker" id="cafe_ingreso" name="cafe_ingreso"
                                          placeholder="Ingreso" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">salida kgs. Pergamino</label>
                                          <input type="number" class="form-control" id="cafe_pergamino" name="cafe_pergamino"
                                          placeholder="Pergamino" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Fecha de salida</label>
                                          <input type="date" class="form-control datepicker" id="cafe_salida" name="cafe_salida"
                                          placeholder="Salida" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">salida kgs. Oro </label>
                                          <input type="number" class="form-control" id="cafe_pergamino" name="cafe_pergamino"
                                          placeholder="Pergamino" required>
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Rendimiento %</label>
                                          <input type="text" class="form-control" id="cafe_rendimiento" name="cafe_rendimiento"
                                          placeholder="Rendimiento" value="0" required disabled="">
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
