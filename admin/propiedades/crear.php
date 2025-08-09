<?php

    //Base de Datos
    
    //Immportamos la ocnexión a la BD
    require '../../includes/config/database.php';
    
    //Ejecuta la función 
    $db = conectarDB();

    require '../../includes/funciones.php';
    incluirTemplate('header');

    //Superglobales POST
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    echo "<pre>";
    var_dump($_SERVER['REQUEST_METHOD']);
    echo "</pre>";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo "<pre>";
        var_dump($_POST['titulo']);
        echo "</pre>";

        $titulo = $_POST['titulo'];
    }


?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="boton boton-verde">Volver</a>

<!--Formulario para instertar datos a la BD-->
        <!--Todo lo que se registre en esa página va a ser procesado por el mismo archivo-->
        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Información general</legend>

                <!--El id del input debe ser el mismo for que label-->
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo de la Propiedad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad">
                
                <!--La interfaz para seleccionar el archivo dependerá del navegador, pues
                usará de forma nativa-->
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información de la Propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" placeholder="Ej: 3" min="1" max="9">

                <label for="wc">Baños</label>
                <input type="number" id="wc" placeholder="Ej: 3" min="1" max="9">

                <label for="estacionamiento">Estacionamiento</label>
                <input type="number" id="estacionamiento" placeholder="Ej: 3" min="1" max="9">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select>
                    <option value="1">Fernando</option>
                    <option value="2">Karen</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">


        </form>
    
    </main>

<?php
    incluirTemplate('footer');

?>