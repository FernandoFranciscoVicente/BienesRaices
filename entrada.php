<?php 

//incluye NECESARIAMENTE el archivo funciones.php para cargar
require 'includes/funciones.php';

incluirTemplate('header');

?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>


        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img src="build/img/destacada2.jpg" alt="imagen de la propiedad" loading="lazy">
        </picture>

        <p class="informacion-meta">Escrito el: <span>20/07/2025</span> por: <span>Admin</span></p>


        <div class="resumen-propiedad">

            <p>
                En un mundo donde cada metro cuadrado cuenta, las terrazas en el techo se han convertido en una tendencia arquitectónica que transforma espacios desaprovechados en verdaderos oasis urbanos. Ya sea en una casa de diseño contemporáneo o en una remodelación inteligente, habilitar la azotea como área social o de descanso puede aumentar significativamente el valor de tu propiedad y elevar tu calidad de vida.

                Una terraza en el techo no es solo un lugar bonito: es un espacio versátil que puede adaptarse a tu estilo. Desde un jardín urbano con plantas aromáticas, hasta un lounge con asador, pérgola y sillones cómodos para disfrutar del atardecer, las posibilidades son tan amplias como tu imaginación. Además, al estar en altura, estas terrazas ofrecen vistas despejadas, mayor privacidad y mejor ventilación natural que un patio convencional.

                Si estás pensando en renovar tu hogar o construir desde cero, integrar una terraza en el techo es una decisión que fusiona funcionalidad, estética y conexión con el entorno. Imagina tomar un café al amanecer, hacer yoga al aire libre o recibir a tus invitados bajo las estrellas… todo desde la cima de tu propia casa. Invertir en un espacio así no solo embellece, también transforma tu día a día.
            </p>
            
        </div>
    </main>



<!--footer desde php-->
<?php 
    incluirTemplate('footer');
?>