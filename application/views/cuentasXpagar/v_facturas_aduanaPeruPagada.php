

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Dashboard
        <small>Panel de Control</small>
      </h1>
      
      <ol class="breadcrumb">
                  <li><a href="<?php echo site_url(); ?>"> <i class="fa fa-dashboard"> Incio</i></a></li>
                 <li class="active">Facturas de Aduana Perú</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="alert alert-success" style="display: none;" id="list-report-success">
       
        </div>
        
          <!--Factuas por pagar-->
     <div class="col-xs-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title"><strong>Facturas de Aduana Perú Pagadas</strong>&nbsp;</h3>
               <a class="btn btn-default" href='<?php echo site_url('comprador/facturas_aduanaPeru')?>' title='Ver Facturas de Aduana Perú'><i class="fa fa-reply"> </i> Atrás </a>
              
               <button type="button" name="btnprint" id="btnprint" onclick="printDiv('areaImprimir')" class="btn btn-info pull-right" style="margin-right: 5px;">
            <i class="fa fa-print"> </i>  Imprimir
            </div>
             <!-- /.box-header -->
            <div class="box-body" id="areaImprimir">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.Recibo Aduana Perú</th>
                  <th>Monto</th>
                  <th>Fecha Pagada</th>
                  <th>Observacion</th>
                  <th>Estado</th>
                </thead>
                <tbody>
                 <?php  
                  if (empty($arrayFactAduPeru)!="false")
                  {
                   
                    $tren['vagon_datosTrasito'] = NULL; 
                    $parametro ="pago_aduana_peru";
                    $fecha_entrega =NUll;
                   
                  foreach($arrayFactAduPeru as $item):
                   $row['parametro'] = $this->modelogeneral->buscar_dato_transito($item->id_transporte_ext);
                  
                  $fecha_entrega = $row['parametro']->fecha_llegada_aduana;
                    
                  ?>
                    <tr>
                    <td>
                      <div class='row'>
                        <div class='col-md-8'>
                       <span style='font-size: 1em;' class=''><strong><?= $item->no_recibo_adext;?></strong></span>
                         </div> 
                        <div class='col-md-4'>
                          <?php 
                          echo"<button class='btn btn-default eye' id='verfact' onclick='mostrar_detalle(".$item->id_paquete.")' title='Ver detalles'><i class='fa fa-eye'></i>
                           </button>";
                            ?>
                         </div>    
                      </div> 
                   </td>
                   <td><?= $item->costo_aduana_ext ?></td>
                   <td><span style='font-size: 1em;' class=""><?= $item->fecha_pago;?></span></td>
                  <td><?= $item->observacion_aduanaP;?></td> 
                  <td>
                   <div class=''><span class="label label-success" style='font-size: 1em;'>FACTURA PAGADA</span></div>
                  </td>
                       
                     
                
                <?php 
                $productos=null;
                $costo_total=0;
                endforeach; 
                         }?>
                </tr>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
     </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <div id="agregar_fechapagoFat" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header box box-info">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class='row'>
          <div class='col-md-4'>
          
          </div>
          <div class='col-md-8'>
           <h4 class="modal-title" id="aereo">Pago de Factura</h4>
          </div>
        </div>
        
      </div>
      <div class="modal-body">
       
          <form id="agregar_fechapagoFat_form" action="" method="post" class="form-horizontal">
            <div class="form-group">
              <?php 
                 $data = array('id_mercperu'=>'');
                 echo form_hidden($data);

              ?>
              <label for="fecha_pago_fact" class="label-control col-md-4">Fecha de Pago de Factura</label>
              <div class="col-md-8">
               <?php
               $data = array(
                  'type'  => 'date',
                  'name'  => 'fecha_pago_fact',
                  'id'    => 'fecha_pago_fact',
                  'value' => '',
                  'class' => 'form-control'
                    );
                echo form_input($data);
               ?> 
             </div>
            </div>
             <div class="form-group">
               <div class="col-xs-12">
                 <label for="observacion" class="label-control">Observación:<span style="color:red">*</span></label>
                  <?php                 
                      $data = array(
                                    'type'  => 'text',
                                    'name'  => 'observacion',
                                    'id'    => 'observacion',
                                    'value' => '',
                                    'class' => 'form-control',
                                    'required'=>'true'
                                   );
                      echo form_textarea($data);
                  ?> 
               </div>
            </div>
            

          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" id="btnSave_factura" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- Mostrar de talles de las facturas -->
  <div id="mostrar_detallesFact" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog " role="document">
    <div class="modal-content  box box-solid box-info">
      <div class="modal-header box-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="box-title" align="center" id="aereo">Detalle de factura</h4>
      </div>
      <div class="modal-body">
        <table class='table table-responsive table-bordered'>
         <thead>
        <tr>
          <th colspan=''><strong>Factura Proveedor</strong></th>
          <th colspan=''><strong>Respaldo</strong></th>
           
        </tr>
        </thead>
        <tbody id="lista">

        </tbody>
      </table>
      </div>
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

<script>
  $(function () {
   
    $("#example1").DataTable({
       
      "language": {
            "lengthMenu": "Mostrar _MENU_registros por página",
            "zeroRecords": "No se encontró nada - lo siento",
            "info": "Mostrando la página_PAGE_ of _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ Total de registros)",
           
          }
    });
  });
function pagar_facturaAduanaPeru(id_mercperu)
     {
      $('#agregar_fechapagoFat').modal('show');
      $('#agregar_fechapagoFat_form').attr('action','<?php echo base_url() ?>comprador/update_PagofacAduaPeru');
      $('input[name=id_mercperu]').val(id_mercperu);
     }
  
  $('#btnSave_factura').click(function(){
      var url = $('#agregar_fechapagoFat_form').attr('action');
      var data = $('#agregar_fechapagoFat_form').serialize();
      //validate form
      var id_mercperu   = $('input[name=id_mercperu]');
      var fecha_pago_fact  = $('input[name=fecha_pago_fact]');
      var observacion  = $('input[name=observacion]');

      var result = '';
      if(fecha_pago_fact.val()==''){
        fecha_pago_fact.parent().parent().addClass('has-error');
      }else{
        fecha_pago_fact.parent().parent().removeClass('has-error');
        result +='1';
      }
      if(result=='1'){
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: url,
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#agregar_fechapagoFat').modal('hide');
              $('#agregar_fechapagoFat_form')[0].reset();
              if(response.type=='update'){
                var type = 'actualizada'
              }
              $('#list-report-success').html('<p> Fecha  '+type+'  exitosamente </p>').fadeIn().delay(4000).fadeOut('slow');
              location.reload();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('No se han podido agregar datos');
          }
        });
      }
    });

    function mostrar_detalle(id_paquete)
     {
      $('#mostrar_detallesFact').modal('show');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>comprador/showdatosfact',
        data: {id_paquete: id_paquete},
        async: false,
        dataType: 'json',
        success: function(data){
           $('#lista').html(data);
           },
        error: function(){
          alert('No se ha podido editar');
        }
      });

    }


    function printDiv(nombreDiv) {

     $('#example1_filter').addClass('hidden');
     $('.eye').addClass('hidden');
     var contenido= document.getElementById(nombreDiv).innerHTML;
     var contenidoOriginal= document.body.innerHTML;

     document.body.innerHTML = contenido;

     window.print();

     document.body.innerHTML = contenidoOriginal;
}   
</script>
</body>
</html>
