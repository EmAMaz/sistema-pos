<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar categorías
      </h1>
      <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li class="active">Administrar categorías</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">

          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">
            Agregar categoría
          </button>

        </div>
        
        <div class="box-body">
        
            <table class="table table-bordered table-striped dt-responsive tablas" style="width: 100%;">
              <thead>
                <tr>
                  <th scope="col" style="width:10px">#</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>

        </div>
        
      </div>
    </section>
</div>

<!-- MODAL AGREGAR CATEGORIA-->
<div id="modalAgregarCategoria" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post"> 

          <!-- CABEZA DEL MODAL -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Agregar categoria</h4>
          </div>

          <div class="modal-body">
            
            <div class="box-body">

              <!-- ENTRADA PARA LA CATEGORIA -->
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-th"></i></span>
                  <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar categoria" required>
                </div>
              </div>
              
              <div class="modal-footer">

                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

                <button type="submit" class="btn btn-primary">Guardar categoria</button>
  
              </div>

              <?php

                $crearCategoria = new ControladorCategorias();
                $crearCategoria -> ctrCrearCategorias();
                
              ?> 

            </div>

          </div>

        </div>

      </form> 

    </div>

  </div>

</div>
