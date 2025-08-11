<?php

    //Base de Datos
    
    //Immportamos la ocnexión a la BD
    require '../../includes/config/database.php';
    
    //Ejecuta la función 
    $db = conectarDB();

    //Consultar para obtener los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    //Arreglo con mensajes de errores
    $errores = [];

    //Inicializamos las variables vacías de forma global
    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento = '';
    $vendedorId = '';


    //Ejecutar el código después de que el usuario envíe el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //echo "<pre>";
        //var_dump($_POST);
        //echo "</pre>";

        //Leer las variables

        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $wc = $_POST['wc'];
        $estacionamiento = $_POST['estacionamiento'];
        $vendedorId = $_POST['vendedor'];


        // -- Validaciones para insertar propiedades en la BD --

        if(!$titulo){
            $errores[] = "Debes añadir un titulo";
        }

        if(!$precio){
            $errores[] = "El precio es obligatorio";
        }

        if(strlen($descripcion) < 50){
            $errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
        }


        if(!$habitaciones){
            $errores[] = "El número de habitaciones es obligatoria";
        }

        if(!$wc){
            $errores[] = "El número de baños es obligatorio";
        }

        if(!$estacionamiento){
            $errores[] = "El número de lugares de estacionamiento es obligatorio";
        }


        if(!$vendedorId){
            $errores[] = "Elige un vendedor";
        }


        // -- Revisar que el arreglo de errores esté vacío --
        if(empty($errores)){
            //Insertar en la base de datos
            $query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$vendedorId')";
            
            //echo $query;

            //Almacenarlo en la base de datos
            $resultado = mysqli_query($db, $query);

            if($resultado){
                echo "Instertado correctamente";
            }
            else{
                echo "No sé porque no está sucediendo nada";
            }
        }
        
    }

    require '../../includes/funciones.php';
    incluirTemplate('header');


?>

    <main class="contenedor seccion">
        <h1>Crear</h1>
        <a href="/admin" class="boton boton-verde">Volver</a>

        <!-- Foreacn se ejecuta al menos una vez por cada elemento -->
        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>


<!--Formulario para instertar datos a la BD-->
        <!--Todo lo que se registre en esa página va a ser procesado por el mismo archivo-->
        <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
            <fieldset>
                <legend>Información general</legend>

                <!--El id del input debe ser el mismo for que label-->
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="Titulo de la Propiedad" value="<?php echo $titulo; ?>">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" placeholder="Precio de la propiedad" value="<?php echo $precio; ?>">
                
                <!--La interfaz para seleccionar el archivo dependerá del navegador, pues
                usará de forma nativa-->
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png">

                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Información de la Propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>" >

                <label for="wc">Baños</label>
                <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

                <label for="estacionamiento">Estacionamiento</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>" >
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="vendedor" >
                    <option value="">--Seleccione--</option>
                <!-- Se ejecutará mientras siga habiendo resultados en la BD-->
                    <?php while ($vendedor = mysqli_fetch_assoc($resultado)): ?>
                        <option value="<?php echo $vendedor['id']; ?>"> <?php echo $vendedor['nombre'] . " " . $vendedor['apellido'] ?></option>

                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">


        </form>
    
    </main>

<?php
    incluirTemplate('footer');

?>