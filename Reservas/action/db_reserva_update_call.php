<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashbord.php');

?>
<?php
            
  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/connection/connection.php');

?>

<style>

h2{
      color: #000000;
       text-align: center; 
       margin-top: 25px;
    }

    label{
    color: #040212;
    font-size: 18px;
    margin: 5px;
    padding: 5px;
  }

  .myFormreserva{
    border: 2px solid wheat;
    border-radius: 5px;
    width: 500px;
    height: 830px;
    background-color: wheat;
    margin-bottom: 15px;
  }
  #btn{
     background-color: #000000;
      border-color: white;
      color: white; 
      
    }
    #btn:hover{
      background-color: gray;
      color: #000000;
  
  }
</style>

<div class="d-flex justify-content-center">
      <form class="myFormreserva" action="" method="POST">
        <h2 >Formulario insertar reserva</h2>
        <div class="container mt-2 ms-2" >
          <div class="form-row" >
            <div class="form-group col-md-6 ">
              <label for="inputreserva">Id reserva</label>
              <input type="number" class="form-control" name="id_reserva" placeholder="Id reserva">
            </div>
            <div class="form-group col-md-6 ">
              <label for="inputreserva">Id cliente</label>
              <input type="number" class="form-control" name="id_cliente" placeholder="Id cliente">
            </div>
            <div class="form-group col-md-6 ">
              <label for="inputreserva">Id habitacion</label>
              <input type="number" class="form-control" name="id_habitacion" placeholder="Id habitacion">
            </div>
            <div class="form-group col-md-6 ">
            <label for="startDate">Fecha Entrada</label>
              <input id="startDate" name="fecha_Entrada" class="form-control" type="date" />
            </div>
            <div class="form-group col-md-6 ">
            <label for="startDate">Fecha Salida</label>
              <input id="startDate" name="fecha_Salida" class="form-control" type="date" />
            </div>
            <div class="form-group col-md-6 ">
            <label for="startDate">Fecha Reserva</label>
              <input id="startDate" name="fecha_Entrada" class="form-control" type="date" />
            </div>
            <div class="form-group col-md-6 ">
              <label for="inputreserva">Id pago</label>
              <input type="number" class="form-control" name="id_pago" placeholder="Id habitacion">
            </div>
            <div class="form-group col-md-6 ">
              <label for="inputreserva">Numero reserva</label>
              <input type="number" class="form-control" name="numero_reserva" placeholder="Id habitacion">
            </div>

          </div>

          <div class="d-flex justify-content-center">
            <button type="submit" name="insertar" id="btn" class="btn  mt-2 mb-3">Insertar</button>
          </div>
        </div>
      </form>
      
  </div>

<?php

  include($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>
