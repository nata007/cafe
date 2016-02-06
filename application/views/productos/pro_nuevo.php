                <!-- Main content -->
                <section class="content">
                    <div class="row">
                    
	<?php 
		$attributes = array('id' => 'form1');
		echo form_open('Productos/nuevo_producto',$attributes);
		echo validation_errors(); 
	?>
    
                      <div class="col-lg-12">
                          <section class="panel">
                              <header class="panel-heading">
                                  Adicionar producto
                              </header>
                              <div class="panel-body">
                                  <form role="form">
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Nombre</label>
                                          <input type="text" class="form-control" id="cafe_nombre" name="cafe_nombre"
                                          placeholder="Nombre completo" maxlength="30" required>
                                      </div>
                                      <div class="form-group">
                                      <div class="checkbox">
                                          <label>
                                              <input type="checkbox" id="cafe_procesado" name="cafe_procesado" value="1">
                                               Procesado
                                          </label>
                                      </div>
                                      </div>
                                      <div class="form-group">
                                         <label for="exampleInputEmail1">Presentacion</label>
                                         <input type="text" class="form-control" id="cafe_presentacion" name="cafe_presentacion"
                                          placeholder="Presentación" maxlength="30" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Gramaje</label>
                                          <input type="number" class="form-control" id="cafe_gramaje" name="cafe_gramaje"
                                          placeholder="Gramaje" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Precio</label>
                                          <input type="number" class="form-control" id="cafe_precio" name="cafe_precio"
                                          placeholder="Lugar" required>
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
