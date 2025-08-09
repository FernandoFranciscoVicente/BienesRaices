<?php 

//incluye NECESARIAMENTE el archivo funciones.php para cargar
require 'includes/funciones.php';

incluirTemplate('header');

?>

    <main class="contenedor">
        <h1>Contacto</h1>
        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg"  type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen de contacto">
        </picture>

        <!--Formulario-->
        <h2>Llene el formulario de Contacto</h2>
        <form class="formulario">
            <!--Primer Fieldset-->
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="E-mail" id="email">

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Teléfono móvil" id="telefono">     
                
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje"></textarea>                
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>
                <label for="opciones">Vende o compra</label>
                <select name="" id="opciones">
                    <option value="" disabled selected>--Selecciona</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu precio o Presupuesto" id="presupuesto">    
            </fieldset>

            <fieldset>
                <legend>Información  sobre la propiedad</legend>
                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="Telefono" id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligió teléfono, elija la fecha y hora</p>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">

                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">

            </fieldset>

            <!--Botón de enviar-->
            <input type="submit" value="Enviar" class="boton-verde">

        </form>
    </main>

<!--footer desde php-->
<?php 
    incluirTemplate('footer');
?>