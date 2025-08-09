<?php 

//incluye NECESARIAMENTE el archivo funciones.php para cargar
require 'includes/funciones.php';

incluirTemplate('header');

?>

    <main class="contenedor">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="buidl/img/nosotros.jpg" type="image/jpeg">
                    <img src="build/img/nosotros.jpg" alt="sobre nosotros" loading="lazy">
                </picture>
            </div><!--Contenido-nosotros-->

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>
                    En BIENES RAICES creemos que encontrar un hogar va mucho más allá de una transacción: es construir el escenario de tu vida. Somos una empresa de bienes raíces comprometida con conectar personas con espacios que realmente se ajusten a sus necesidades, aspiraciones y estilo de vida. Ya sea que busques comprar, vender o rentar, nuestro equipo está aquí para ayudarte en cada paso del camino.

                    Con años de experiencia en el mercado local, nos especializamos en brindar asesoría personalizada, transparente y basada en datos reales. Entendemos que cada cliente tiene una historia única, por eso escuchamos con atención y proponemos soluciones concretas que respondan a sus prioridades. Nuestro portafolio abarca desde propiedades residenciales hasta oportunidades comerciales y de inversión.

                    Más que propiedades, ofrecemos confianza. Nuestra misión es acompañarte con profesionalismo, empatía y visión a largo plazo para que tomes decisiones informadas y seguras. Porque tu tranquilidad también es parte de nuestro trabajo.
                </p>
            </div>
        </div>
    </main>

    <div class="contenedor">
        <h1>Más sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci beatae natus laborum unde assumenda modi quasi architecto voluptatem quidem nobis. Recusandae, perspiciatis. Aliquam pariatur cum explicabo doloremque, at quibusdam exercitationem.</p>
            </div> <!--icono-->
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci beatae natus laborum unde assumenda modi quasi architecto voluptatem quidem nobis. Recusandae, perspiciatis. Aliquam pariatur cum explicabo doloremque, at quibusdam exercitationem.</p>
            </div><!--icono-->
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci beatae natus laborum unde assumenda modi quasi architecto voluptatem quidem nobis. Recusandae, perspiciatis. Aliquam pariatur cum explicabo doloremque, at quibusdam exercitationem.</p>
            </div><!--icono-->
        </div>
    </div>


<!--footer desde php-->
<?php 
    incluirTemplate('footer');
?>