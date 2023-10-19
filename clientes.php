<?php

  include('header.php');

?>



  <div class="container mt-5">
    <h2 style="color: #e10000; text-align: center;">Registro Clientes</h2>
    <form class="myForm">
      <div class="container">
        <div class="form-group">
          <label for="inputEmail4" style="color: #040212">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="inputPassword4" style="color: #040212">Password</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="inputAddress" style="color: #040212">Dirección</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity" style="color: #040212">Ciudad</label>
            <input type="text" class="form-control" id="inputCity" placeholder="Mao, Islas Baleares">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState" style="color: #040212">País</label>
            <select id="inputState" class="form-control">
              <option selected>Seleccionar...</option>
              <option>España</option>
              <option>Marruecos</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip" style="color: #040212">Código Postal</label>
            <input type="text" class="form-control" id="inputZip" placeholder="Código Postal">
          </div>
        </div>
        <div style="display: flex; justify-content: center;">
          <button type="submit" class="btn btn-primary mt-2" style="background-color: #f98c3d; border-color: #f98c3d; color: #040212; font-weight: bold;">Registrarse</button>
        </div>
      </div>
    </form>
  </div>


<?php

  include('footer.php');

?>

