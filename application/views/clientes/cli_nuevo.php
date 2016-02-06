                <!-- Main content -->
                <section class="content">
                    <div class="row">
                    
	<?php 
		$attributes = array('id' => 'form1');
		echo form_open('clientes/nuevo_cliente',$attributes);
		echo validation_errors(); 
	?>
    
                      <div class="col-lg-12">
                          <section class="panel">
                              <header class="panel-heading">
                                  Adicionar cliente
                              </header>
                              <div class="panel-body">
                                  <form role="form">
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">RFC</label>
                                          <input type="text" class="form-control" id="cafe_rfc" name="cafe_rfc"
                                          placeholder="RFC" maxlength="13" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Razon social</label>
                                          <input type="text" class="form-control" id="cafe_razon" name="cafe_razon"
                                          placeholder="Razon social" maxlength="50" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Nombre y Apellido</label>
                                          <input type="text" class="form-control" id="cafe_nombre" name="cafe_nombre"
                                          placeholder="Nombre y Apellido" maxlength="50" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Pais</label>
                                          <input type="text" class="form-control" id="cafe_pais" name="cafe_pais"
                                          placeholder="Pais" maxlength="20" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Lugar</label>
                                          <input type="text" class="form-control" id="cafe_lugar" name="cafe_lugar"
                                          placeholder="Lugar" maxlength="30" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Calle</label>
                                          <input type="text" class="form-control" id="cafe_calle" name="cafe_calle"
                                          placeholder="Calle" maxlength="40" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Numero ext.</label>
                                          <input type="number" class="form-control" id="cafe_numero" name="cafe_numero"
                                          placeholder="Numero ext" maxlength="8" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Telefono</label>
                                          <input type="number" class="form-control" id="cafe_telefono" name="cafe_telefono"
                                          placeholder="Lugar" maxlength="15" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputPassword1">Correo electronico</label>
                                          <input type="email" class="form-control" id="cafe_email" name="cafe_email" 
                                          placeholder="Correo electronico" maxlength="50" required>
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
