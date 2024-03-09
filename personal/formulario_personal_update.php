<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
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

<link rel="stylesheet" href="student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
    <form class="myFormpersonal" action="/student042/dwes/Personal/action/db_personal_update_call.php" method="POST" enctype="multipart/form-data">

        <h2>Formulario actualizar personal</h2>
        <div class="container">
            <input type="hidden" name="id_personal" value="<?php echo $personal['id_personal']; ?>">

            <div class="form-group">
                <label for="inputpersonal">Nombre personal</label>
                <input type="text" name="nombre_personal" class="form-control" id="inputpersonal" placeholder="nombre" value="<?php echo $personal['nombre_personal']; ?>">
            </div>

            <div class="form-group">
                <label for="inputFecha">Fecha nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" id="inputFecha" placeholder="fecha" value="<?php echo $personal['fecha_nacimiento']; ?>">
            </div>

            <div class="form-group">
                <label for="inputState">Puesto</label>
                <select id="inputState" name="puesto_personal" class="form-control">
        
                    <option <?php if ($personal['puesto_personal'] == 'Director') echo 'selected'; ?>>Director</option>
                    <option <?php if ($personal['puesto_personal'] == 'Admin') echo 'selected'; ?>>Admin</option>
                    <option  <?php if ($personal['puesto_personal'] == 'Responsable R-Humano') echo 'selected'; ?>>Responsable R-Humano </option>
                    <option <?php if ($personal['puesto_personal'] == 'Administrativo/a') echo 'selected'; ?>>Administrativo/a</option>
                    <option <?php if ($personal['puesto_personal'] == 'Responsable Belleza') echo 'selected'; ?>>Responsable Belleza</option>
                    <option <?php if ($personal['puesto_personal'] == 'Masagista') echo 'selected'; ?>>Masagista</option>
                    <option <?php if ($personal['puesto_personal'] == 'Responsable Evento') echo 'selected'; ?>>Responsable Evento</option>
                    <option <?php if ($personal['puesto_personal'] == 'Responsable R-Humano') echo 'selected'; ?>>Responsable Restaurante</option>
                    <option <?php if ($personal['puesto_personal'] == 'Entrenador') echo 'selected'; ?>>Entrenador</option>
                    <option <?php if ($personal['puesto_personal'] == 'Animador') echo 'selected'; ?>>Animador</option>
                    <option <?php if ($personal['puesto_personal'] == 'Cocinero') echo 'selected'; ?>>Cocinero</option>
                    <option <?php if ($personal['puesto_personal'] == 'Barista') echo 'selected'; ?>>Barista</option>
                    <option <?php if ($personal['puesto_personal'] == 'Pastelero') echo 'selected'; ?>>Pastelero</option>
                    <option <?php if ($personal['puesto_personal'] == 'Ayudante cocinero') echo 'selected'; ?>>Ayudante cocinero</option>
                    <option <?php if ($personal['puesto_personal'] == 'Ayudante cocinero') echo 'selected'; ?>>Ayudante pastelero</option>
                    <option <?php if ($personal['puesto_personal'] == 'Camarero/a') echo 'selected'; ?>>Camarero/a</option>
                    <option <?php if ($personal['puesto_personal'] == 'Responsable Mantenimiento') echo 'selected'; ?>>Responsable Mantenimiento</option>
                    <option <?php if ($personal['puesto_personal'] == 'Tecnico mantenimiento') echo 'selected'; ?>>Tecnico mantenimiento</option>
                    <option <?php if ($personal['puesto_personal'] == 'Ayudante mantenimiento') echo 'selected'; ?>>Ayudante mantenimiento</option>
                    <option <?php if ($personal['puesto_personal'] == 'Gobernanta') echo 'selected'; ?>>Gobernanta</option>
                    <option <?php if ($personal['puesto_personal'] == 'Camarero/a de Piso') echo 'selected'; ?>>Camarero/a de Piso</option>
                    <option <?php if ($personal['puesto_personal'] == 'Responsable Recepción') echo 'selected'; ?>>Responsable Recepción</option>
                    <option <?php if ($personal['puesto_personal'] == 'Recepcionista') echo 'selected'; ?>>Recepcionista</option>
                    <option <?php if ($personal['puesto_personal'] == 'Ayudante Recepción') echo 'selected'; ?>>Ayudante Recepción</option>                    
                </select>
            </div>

            <div class="form-group">
                <label for="inputAddress">Domicilio</label>
                <input type="text" name="domicilio_personal" class="form-control" id="inputAddress" placeholder="1234 Main St" value="<?php echo $personal['domicilio_personal']; ?>">
            </div>

            <div class="form-group">
                <label for="inputTelefono">Teléfono</label>
                <input type="text" name="telefono_personal" class="form-control" id="inputTelefono" placeholder="teléfono" value="<?php echo $personal['telefono_personal']; ?>">
            </div>

            <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email_personal" class="form-control" id="inputEmail4" placeholder="Email" value="<?php echo $personal['email_personal']; ?>">
            </div>

            <div class="form-group">
                <label for="inputFechaIntegracion">Fecha Integración</label>
                <input type="date" name="fecha_integracion" class="form-control" id="inputFechaIntegracion" placeholder="fecha" value="<?php echo $personal['fecha_integracion']; ?>">
            </div>

            <div class="form-group">
                <label for="inputAffiliacion">Affiliación SS</label>
                <input type="text" name="affiliacion_personal" class="form-control" id="inputAffiliacion" placeholder="Affiliación SS" value="<?php echo $personal['affiliacion_ss']; ?>">
            </div>


     
            <div class="form-group">
                <label for="inputImagenPersonal">Imagen Personal</label>
                <input type="file" name="imagen_personal" class="form-control" id="inputImagenPersonal">
                <img src="<?php echo $personal['imagen_personal']; ?>" alt="Imagen de <?php echo $personal['nombre_personal']; ?>" class="img-fluid">
            </div>

            <div class="form-group">
                <label for="inputCurriculum">Curriculum</label>
                <input type="file" name="curriculum" class="form-control" id="inputCurriculum">
            </div>

            <div class="form-group">
                <label for="inputFechaDespedida">Fecha Despedida</label>
                <input type="date" name="fecha_Despedida" class="form-control" id="inputFechaDespedida" placeholder="fecha" value="<?php echo $personal['fecha_despedida']; ?>">
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" id="btn" class="btn mt-2">Actualizar</button>
            </div>
        </div>
    </form>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php');
?>
