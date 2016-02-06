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
                                  Entradas
                              </header>
                              <div class="panel-body">
                                  <form role="form">
                                    <div class="row">
                                        <div class="col-md-12 form-group" style="margin-bottom:0px;">
                                            <label for="exampleInputPassword1"><?php echo 'FECHA DE ENTRADA: XX-XX-XXXX (IGUAL A LA DE SALIDA DESDE BENEFICIO HUMEDO)' ?></label>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="exampleInputPassword1"><?php echo 'KGS PERGAMINO DESDE RENDIMIENTO: XX kgs.' ?></label>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="exampleInputPassword1">ENTRADA EN TIPO: PERGAMINO</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Cantidad sacos</label>
                                          <input type="number" class="form-control" id="cafe_persacos" name="cafe_persacos"
                                          placeholder="Sacos" required value="0">
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Cantidad kgs.</label>
                                          <input type="number" class="form-control" id="cafe_percant" name="cafe_percant"
                                          placeholder="Kgs" required value="0">
                                      </div>
                                      <div class="col-md-3 form-group">
                                          <label for="exampleInputPassword1">Calidad</label>
										  <select class="form-control m-b-10" id="cafe_percalidad" name="cafe_percalidad">
                                          	<option value="Nacional">Nacional</option>
                                          	<option value="Exportación">Exportación</option>
                                          </select>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="exampleInputPassword1">ENTRADA EN TIPO: ORO</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Cantidad sacos</label>
                                          <input type="number" class="form-control" id="cafe_orosacos" name="cafe_orosacos"
                                          placeholder="Sacos" required value="0">
                                      </div>
                                      <div class="col-md-2 form-group">
                                          <label for="exampleInputEmail1">Cantidad kgs.</label>
                                          <input type="number" class="form-control" id="cafe_orocant" name="cafe_orocant"
                                          placeholder="Kgs" required value="0">
                                      </div>
                                      <div class="col-md-3 form-group">
                                          <label for="exampleInputPassword1">Calidad</label>
										  <select class="form-control m-b-10" id="cafe_orocalidad" name="cafe_orocalidad">
                                          	<option value="Nacional">Nacional</option>
                                          	<option value="Exportación">Exportación</option>
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
