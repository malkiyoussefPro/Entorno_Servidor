
<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');

?>
<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Puesto</th>
      <th scope="col">Domicilio </th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
      <th scope="col">Fecha Integracion</th>
      <th scope="col">Imagen</th>
      <th scope="col">Aff_SS </th>
      <th scope="col">Curriculum</th>
      <th scope="col">Fecha Despedida</th>
      <th scope="col ">Operaciones</th>
    </tr>
  </thead>
  <tbody>
  <?php

// Realiza la consulta para obtener todas los servicios
$q_select_all = $pdo->prepare('SELECT * FROM personal_hotel');
$q_select_all->execute();

// Obtiene los resultados de la consulta
$personales = $q_select_all->fetchAll(PDO::FETCH_ASSOC);

// Muestra las reservas en una tabla
foreach ($personales as $personal) {
  ?>
    
    <tr>
    <td><?php echo $personal['id_personal']; ?></td>
                <td><?php echo $personal['nombreCompleto_personal']; ?></td>
                <td><?php echo $personal['fechaNacimiento_personal']; ?></td>
                <td><?php echo $personal['puesto_personal']; ?></td>
                <td><?php echo $personal['domicilio_personal']; ?></td>
                <td><?php echo $personal['tel_personal']; ?></td>
                <td><?php echo $personal['email_personal']; ?></td>
                <td><?php echo $personal['fechaIntegracion_personal']; ?></td>
                <td><?php echo $personal['afiliacionSS_personal']; ?></td>
                <td><?php echo $personal['imagen_personal']; ?></td>
                <td><?php echo $personal['curriculum']; ?></td>
                <td><?php echo $personal['fecha_despedida']; ?></td>
                <td>
                
      <td>      
        <a href="/student042/dwes/Personal/formulario_personal_insert.php" name="insertar" id="btn_formulario" class="btn btn-success btn-sm  m-1"> Insertar </a>  
      </td>
      <td>      
        <a href="/student042/dwes/Personal/formulario_personal_select.php" name="buscar" id="btn_formulario" class="btn btn-primary btn-sm m-1"> Buscar</a>  
      </td>
      <td>      
        <a href="/student042/dwes/Personal/formulario_personal_update.php" name="actulizar" id="btn_formulario" class="btn btn-warning btn-sm m-1"> Actualizar</a>  
      </td>
      <td>      
        <a href="/student042/dwes/Personal/formulario_personal_delete.php" name="suprimir" id="btn_formulario" class="btn btn-danger btn-sm  m-1"> Suprimir </a>  
      </td>
    </tr>
    <?php
        }
       ?>
    </tbody>
</table>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

