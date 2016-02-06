                <!-- Main content -->
                <section class="content">
                    <div class="row">
                    
	<?php 
		$attributes = array('id' => 'form1');
		echo form_open('empleados/nuevo_usuario',$attributes);
		echo validation_errors(); 
	?>
    
                      <div class="col-lg-12">
                          <section class="panel">
                              <header class="panel-heading">
                                  Adicionar empleado
                              </header>
                              <div class="panel-body">
                                  <form role="form">
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Nombre y Apellido</label>
                                          <input type="text" class="form-control" id="cafe_nombre" name="cafe_nombre"
                                          placeholder="Nombre y Apellido" maxlength="30" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">CURP</label>
                                          <input type="text" class="form-control" id="cafe_curp" name="cafe_curp"
                                          placeholder="CURP" maxlength="18" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Calle</label>
                                          <input type="text" class="form-control" id="cafe_calle" name="cafe_calle"
                                          placeholder="Calle"  required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Numero</label>
                                          <input type="number" class="form-control" id="cafe_numero" name="cafe_numero"
                                          placeholder="Numero" maxlength="6" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Lugar</label>
                                          <input type="text" class="form-control" id="cafe_lugar" name="cafe_lugar"
                                          placeholder="Lugar"  required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Estado</label>
                                          <input type="text" class="form-control" id="cafe_estado" name="cafe_estado"
                                          placeholder="Estado" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Telefono</label>
                                          <input type="number" class="form-control" id="cafe_telefono" name="cafe_telefono"
                                          placeholder="Lugar" maxlength="15" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputPassword1">Contraseña</label>
                                          <input type="password" class="form-control" id="cafe_password" name="cafe_password" 
                                          placeholder="Contraseña" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputPassword1">Organizacion</label>
										  <select class="form-control m-b-10" id="cafe_organizacion" name="cafe_organizacion">
                                          	<option value="1">Organización 1</option>
                                          </select>
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
