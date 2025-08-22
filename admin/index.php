<?php

    //Añadir placeholder con '??'

    $resultado = $_GET['resultado'] ?? null;

    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raíces</h1>
        <!--Convertir un string a un entero-->
        <?php if(intval( $resultado) === 1): ?>
            <p class="alerta exito">Anuncio creado correctamente</p>
        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

        <!--Creamos una tabla-->

        <table class="propiedades">
            <thead>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Casa en la playa</td>
                    <td><img class="imagen-tabla" src="/imagenes/2dfcab6228fcc16e519bcc9d1e0abfd5.jpg" alt=""></td>
                    <td>$12000000</td>
                    <td>
                        <a class="boton-rojo-block" href="#">Eliminar</a>
                        <a class="boton-amarillo-block" href="#">Actualizar</a>
                    </td>
                </tr>
            </tbody>
        </table>

    </main>

<?php
    incluirTemplate('footer');

?>

