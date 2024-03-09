<?php
            
  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');

?>

<?php

  require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/dashboard.php');
  $id_personal = isset($_GET['id_personal']) ? $_GET['id_personal'] : null; // Obtener el id_personal de la URL

if (!$id_personal) {
    echo "ID de personal no proporcionado.";
    exit;
}

$q_select = $pdo->prepare('SELECT * FROM datos_personal WHERE id_personal = ?');
$q_select->execute([$id_personal]);
$personal = $q_select->fetch(PDO::FETCH_ASSOC);

if (!$personal) {
    echo "Personal no encontrado.";
    exit;
}

?>

<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
<form class="myFormpersonal" action="/student042/dwes/Personal/action/db_personal_select_call.php" method="POST">

    <h2>Formulario buscar personal</h2>

    <div class="container mt-2 ms-2" >
      <div class="form-row" >
        <div class="form-group col-md-6 ">
          <label for="inputpersonal">Id personal</label>
          <input type="number" name="id_personal" class="form-control" id="inputpersonal" placeholder="Id personal" value="<?php echo $personal['id_personal']; ?>">
        </div>
      </div>
      <div class="d-flex justify-content-center m-2">
        <button type="submit" name="buscar" id="btn" class="btn mt-2 mb-3">Buscar</button>
      </div>
    </div>
  </form>
</div>


<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');

?>

