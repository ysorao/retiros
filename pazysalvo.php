<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paz y Salvo</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- <script src="js/jquery-3.4.1.js"></script> -->
 
    <script src="app.js"></script>

    <!-- <script type="text/javascript">
      $(document).ready(function(){
          $("input:checkbox").change(function() { 
              if($(this).is(":checked")) { 
                  $.ajax({
                      url: 'app-add.php',
                      type: 'POST',
                      data: { strID:$(this).attr("id"), strState:"1" }
                  });
              } else {
                  $.ajax({
                      url: 'app-add.php',
                      type: 'POST',
                      data: { strID:$(this).attr("id"), strState:"0" }
                  });
              }
          }); 
      });
  </script> -->


</head>
<body>

<div class="card m-5">
    <div class="card-body">

      <br>
      <div class="form-row">
        <div class="form-group col-md-3">
          <img src="img/logo.png">
        </div>
        <div class="form-group col-md-6">
          <h3 class="text-center">CERTIFICADO DE PAZ Y SALVO</h3>
        </div>
        <div class="form-group col-md-3">
        </div>
      </div>
      
      <br>
      <hr>

      <h5 class="text-center">SE DEBE DILIGENCIAR EL RESPECTIVO CERTIFICADO DE PAZ Y SALVO, EN LA FECHA DE RETIRO DEL EMPLEADO DE HEON HEALTH ON LINE S.A NIT 830117028-0, ES INDISPENSABLE PARA DAR INICIO AL TRAMITE DE LIQUIDACIÓN DE PRESTACIONES SOCIALES.</h5>
      <hr>
      <form  id="app-form" method="post" action="app-addpyz.php">
      <div class="card">
          <div class="card-header text-center bg-formato">1. Información del Colaborador</div>
          <div class="card-body">
          <p>Fecha de retiro: 10/10/2020</p><br>   
      
      <div class="form-row">
      
        <div class="form-group col-md-12">
          <label>Nombres y Apellidos</label>
          <input class="form-control" type="text" id="nombre" name="nombre">
        </div>
        
        <div class="form-group col-md-6">
          <label>Documento</label>
          <input class="form-control" type="text" id="documento"  name="documento">
        </div>

        <div class="form-group col-md-6">
          <label>Telefono</label>
          <input class="form-control" type="text" id="documento"  name="documento">
        </div>

        <div class="form-group col-md-6">
          <label>Cargo Desempeñado </label>
          <input class="form-control" type="text" id="documento"  name="documento">
        </div>

        <div class="form-group col-md-6">
          <label>Area</label>
          <input class="form-control" type="text" id="documento"  name="documento">
        </div>

        <div class="form-group col-md-12">
          <label>Motivo de Retiro</label>
          <input class="form-control" type="text" id="documento"  name="documento">
        </div>

        <div class="form-group col-md-6">
          <label>Dirección de Domicilio</label>
          <input class="form-control" type="text" id="documento"  name="documento">
        </div>

        <div class="form-group col-md-6">
          <label>Correo electronico Personal</label>
          <input class="form-control" type="text" id="documento"  name="documento">
        </div>
      </div>
            
          </div>

      </div>
      <br>
      <table class="table table-bordered">
          <thead>
              <tr class="text-center">
                <th>Area</th>
                <th>Descripción de lo Entregado</th>
                <th>Funcionario Que recibe</th>
                <th>Firma</th>
                <th>Fecha</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td><strong>Coordinación Administrativa</strong><br>  Entrega de Hardware Computador, Tablet, Monitor, Etc.</td>
                  <td><textarea class="form-control"></textarea></td>
                  <td><button class="btn btn-secondary">Pendiente</button></td>
                  <td><button class="btn btn-secondary">Pendiente</button></td>
                  <td><button class="btn btn-secondary">Pendiente</button></td>
              </tr>
              <tr>
                  <td><strong>Coordinación Administrativa</strong><br> Teléfonos, Módems, Tarjeta de Ingreso</td>
                  <td><textarea class="form-control"></textarea></td>
                  <td><button class="btn btn-secondary">Pendiente</button></td>
                  <td><button class="btn btn-secondary">Pendiente</button></td>
                  <td><button class="btn btn-secondary">Pendiente</button></td>
              </tr>
              <tr>
                  <td><strong>Entrega de Aplicativos</strong><br> Usuario(s)</td>
                  <td><textarea class="form-control"></textarea></td>
                  <td><button class="btn btn-secondary">Pendiente</button></td>
                  <td><button class="btn btn-secondary">Pendiente</button></td>
                  <td><button class="btn btn-secondary">Pendiente</button></td>
              </tr>
              <tr>
                  <td><strong>Coordinación de Vinculación y Nómina</strong><br> Carné empresarial, entrevista de retiro</td>
                  <td><textarea class="form-control"></textarea></td>
                  <td><button class="btn btn-secondary">Pendiente</button></td>
                  <td><button class="btn btn-secondary">Pendiente</button></td>
                  <td><button class="btn btn-secondary">Pendiente</button></td>
              </tr>
          </tbody>

      </table>
      

        <!-- SECCION -->

      </form>




    </div>

    <div id="result"></div>
</div>


<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
