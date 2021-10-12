<?php
//Activamos el almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION["nombre"]))
{
  header("Location: index.php");
}
else
{
require 'header.php';
?>
<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Escritorio</h1>
                          <div class="box-tools pull-right">
                          </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body">
                      <h4>Proyecto: </h4> 
                      <p>Sistema Biblioteca 1.0</p>
                      <h4>Desarrollado por: </h4>
                      <p>Liliana Nataly Arcila Diaz</p>
                      <P>Estudiante de Ingeniería de Sistemas</P>
                      <p>Email: liliana.ad7@gmail.com</p>
                      <p>Celular: 921803285</p>
                      <a href="http://misaulascreativas.blogspot.com" target="_blank"><p>Mi blog:  http://misaulascreativas.blogspot.com</p></a>
                    </div>
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->
<?php
require 'footer.php';
?>
<?php 
}
ob_end_flush();
?>
<script type="text/javascript">
  $('#siAcercade').addClass("active");
</script>


