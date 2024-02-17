<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/Databases/connection_db.php');
?>



<div class="container-comentarios">
    <h2>Comentarios Clientes</h2>
    <div class="comentarios-container">
        <?php 
        // Consulta SQL para seleccionar solo los comentarios revisados con el nombre del cliente y la fecha de creación
        $q_select = $pdo->prepare('SELECT nombre_cliente, fecha_creacion_comentario, comentarios FROM comentarios_clientes WHERE estado_comentario = ?');
        $q_select->execute(['revisado']);
        $comentarios = $q_select->fetchAll(PDO::FETCH_ASSOC);

        // Mostrar los comentarios revisados con el nombre del cliente y la fecha de creación
        foreach ($comentarios as $comentario) {
            echo "<div class='comentario'>";
            echo "<p class='cliente'><strong>{$comentario['nombre_cliente']}</strong></p>";
            echo "<p class='fecha'>Fecha: {$comentario['fecha_creacion_comentario']}</p>";
            echo "<p class='contenido'>{$comentario['comentarios']}</p>";
            echo "</div>";
        }
        ?>
    </div>
</div>


<link rel="stylesheet" href="/student042/dwes/css/dashboard.css">

<div class="d-flex justify-content-center">
    <form class="myFormComentario" action="/student042/dwes/Comentarios/action/db_comentario_insert_call.php" method="POST">
        <h2>Formulario insertar Comentario</h2>
        <div class="container">
            
            <div class="form-group">
                <label for="inputFecha">Fecha creación comentario</label>
                <input type="date" name="fecha_creacion_comentario" class="form-control" id="inputFecha" placeholder="fecha">
            </div>
            <div class="form-group">
                <label for="inputComentario">Comentarios</label>
                <input type="text" name="comentarios" class="form-control" id="inputComentario" placeholder="comentario">
            </div>
            <div class="form-group col-md-4">
                <label for="inputScore">Score</label>
                <select id="inputScore" class="form-control" name="score">
                    <option selected>Seleccionar...</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" name="insertar" id="btn" class="btn mt-2">Enviar</button>
        </div>
    </form>
</div>

<style>
.container-comentarios {
    max-width: 800px;
    margin: 10px auto;
    padding: 20px;
    background-color: rgb(164, 144, 55);
    border-radius: 10px;
}
.comentarios-container {
    margin-top: 20px;
    

.comentario {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 10px;
}
}

.cliente {
    font-weight: bold;
}

.fecha {
    color: #777;
    margin-bottom: 5px;
}

.contenido {
    margin-bottom: 0;
}

</style>



<?php require_once($_SERVER['DOCUMENT_ROOT'].'/student042/dwes/html/footer.php'); ?>
