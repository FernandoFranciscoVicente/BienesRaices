<?php 

//incluye NECESARIAMENTE el archivo funciones.php para cargar
require 'includes/funciones.php';

//Esta función $inicio sólo iniciará como true en index
incluirTemplate('header', $inicio = true);

?>


    <main class="contenedor">
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
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio1.webp" type="image/webp">
                    <source srcset="build/img/anuncio1.jpg" type="image/jpeg">
                    <img src="build/img/anuncio1.jpg" alt="anuncio" loading="lazy">
                </picture>
                <!--Contenido del anuncio-->
                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo en excelente precio</p>
                    <p class="precio">$3,000,000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono est" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono rr" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>
                    <!--Botón de ver detalles de propiedad-->
                    <a class="boton-amarillo-block" href="anuncios.php">Ver Propiedad</a>

                </div> <!--.contenido-anuncio-->
            </div><!--.anuncio-->
        
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio2.webp" type="image/webp">
                    <source srcset="build/img/anuncio2.jpg" type="image/jpeg">
                    <img src="build/img/anuncio2.jpg" alt="anuncio" loading="lazy">
                </picture>
                <!--Contenido del anuncio-->
                <div class="contenido-anuncio">
                    <h3>Casa terminados de lujo</h3>
                    <p>Casa con moderno diseño, así como tecnología inteligente y amueblada.</p>
                    <p class="precio">$2,200,000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono est" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono rr" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>
                    <!--Botón de ver detalles de propiedad-->
                    <a class="boton-amarillo-block" href="anuncios.php">Ver Propiedad</a>

                </div>
            </div>

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio3.webp" type="image/webp">
                    <source srcset="build/img/anuncio3.jpg" type="image/jpeg">
                    <img src="build/img/anuncio3.jpg" alt="anuncio" loading="lazy">
                </picture>
                <!--Contenido del anuncio-->
                <div class="contenido-anuncio">
                    <h3>Casa con alberca</h3>
                    <p>Casa con alberca y acabados de lujo en la ciudad, excelente oportunidad.</p>
                    <p class="precio">$3,000,000</p>
                    <ul class="iconos-caracteristicas">
                        <li>
                            <img class="icono" src="build/img/icono_wc.svg" alt="icono wc" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono est" loading="lazy">
                            <p>3</p>
                        </li>
                        <li>
                            <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono rr" loading="lazy">
                            <p>4</p>
                        </li>
                    </ul>
                    <!--Botón de ver detalles de propiedad-->
                    <a class="boton-amarillo-block" href="anuncios.php">Ver Propiedad</a>

                </div>
            </div>
        </div> <!--.contenedor-anuncios-->

        <div class="alinear-derecha">
            <a class="boton-verde" href="anuncios.php">Ver todas</a>
        </div>

    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
        <a class="boton-amarillo" href="contacto.php">Contáctanos</a>
    </section>

    <!--Blog-->
    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>
            
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img src="build/img/blog1.jpg" loading="lazy" alt="texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p class="informacion-meta">Escrito el: <span>20/06/2025</span> por: <span>Admin</span></p>
                        <p>
                            Consejos para contruir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero
                        </p>
                    </a>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/encuentra.webp" type="image/webp">
                        <source srcset="build/img/encuentra.jpg" type="image/jpeg">
                        <img src="build/img/encuentra.jpg" loading="lazy" alt="texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>Guía para la decoración de tu hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/06/2025</span> por: <span>Admin</span></p>
                        <p>
                            Maximiza el espacio de tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio
                        </p>
                    </a>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img src="build/img/blog2.jpg" loading="lazy" alt="texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.php">
                        <h4>La importancia de la iluminación de espacios en el hogar</h4>
                        <p class="informacion-meta">Escrito el: <span>20/06/2025</span> por: <span>Admin</span></p>
                        <p>
                            Un reccorrido a las distintas decoraciones para lograr que tu hogar adquiera una capa de personalización importante
                        </p>
                    </a>
                </div>
            </article>

        </section>

        <!--Testimoniales-->
        <section class="testimoniales">
            <h3>Testimoniales</h3>
            <div class="testimonial">
                <blockquote>
                    El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas las expectativas.
                </blockquote>
                <p>— Fernando VI</p>
            </div>
        </section>
    </div>


<!--footer desde php-->
<?php 
    incluirTemplate('footer');
?>