               <!-- Main content -->
                <section class="content">
                    <div class="row">
                    
	<?php 
		$attributes = array('id' => 'form1');
		echo form_open('organizacion/nueva_organizacion',$attributes);
		echo validation_errors(); 
	?>
    
                      <div class="col-lg-12">
                          <section class="panel">
                              <header class="panel-heading">
                                  Agregar una organización
                              </header>
                              <div class="panel-body">
                                  <form role="form">
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Lugar</label>
                                          <input type="text" class="form-control" id="ca_lugar" name="ca_lugar"
                                          placeholder="Lugar" maxlength="30" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Calle</label>
                                          <input type="text" class="form-control" id="ca_calle" name="ca_calle"
                                          placeholder="Calle" maxlength="30" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Numero</label>
                                          <input type="number" class="form-control" id="ca_numero" name="ca_numero"
                                          placeholder="Numero" maxlength="6" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Telefono</label>
                                          <input type="number" class="form-control" id="ca_telefono" name="ca_telefono"
                                          placeholder="Telefono" maxlength="50" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputPassword1">Responsable</label>
                                          <input type="text" class="form-control" id="ca_responsable" name="ca_responsable" 
                                          placeholder="Responsable" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputPassword1">Rol</label>
										                      <input type="text" class="form-control" id="rol" name="rol" 
                                          placeholder="Rol" required>
                                      </div>
                                       <div class="form-group">
                                          <label for="exampleInputPassword1">Clave de producto</label>
                                          <input type="text" class="form-control" id="clave_prod" name="calave_prod" 
                                          placeholder="Clave de producto" required>
                                      </div>
                                      <!--
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
