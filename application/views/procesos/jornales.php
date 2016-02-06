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
                                  Jornales
                              </header>
                              <div class="panel-body">
                                  <form role="form">
                                    <div class="row">
                                      <div class="col-md-12 form-group">
                                          <label for="exampleInputPassword1"><?php echo date('d-m-Y'); ?></label>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-4 form-group">
                                          <label for="exampleInputPassword1">Empleado</label>
										  <select class="form-control m-b-10" id="cafe_empleado" name="cafe_empleado">
                                          	<option value="Lizeth">Lizeth</option>
                                          </select>
									  </div>
                                     <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Sueldo</label>
                                          <input type="number" class="form-control" id="cafe_sueldo" name="cafe_sueldo"
                                          placeholder="Sueldo" required value="0">
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Num. Jornales</label>
                                          <input type="number" class="form-control" id="cafe_jornales" name="cafe_jornales"
                                          placeholder="Num. Jornales" required value="0">
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Importe</label>
                                          <input type="number" class="form-control" id="cafe_importe" name="cafe_importe"
                                          placeholder="Importe" required value="0">
                                      </div>
                                    </div>
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
