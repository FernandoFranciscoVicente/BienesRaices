<?php 

//incluye NECESARIAMENTE el archivo funciones.php para cargar
require 'includes/funciones.php';

incluirTemplate('header');

?>

    <main class="contenedor">
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
                    <a class="boton-amarillo-block" href="anuncio.php">Ver Propiedad</a>

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
                    <a class="boton-amarillo-block" href="anuncio.php">Ver Propiedad</a>

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
                    <a class="boton-amarillo-block" href="anuncio.php">Ver Propiedad</a>

                </div>
            </div>
        </div> <!--.contenedor-anuncios-->

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio4.webp" type="image/webp">
                    <source srcset="build/img/anuncio4.jpg" type="image/jpeg">
                    <img src="build/img/anuncio4.jpg" alt="anuncio" loading="lazy">
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
                    <a class="boton-amarillo-block" href="anuncio.php">Ver Propiedad</a>

                </div> <!--.contenido-anuncio-->
            </div><!--.anuncio-->
        
            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio5.webp" type="image/webp">
                    <source srcset="build/img/anuncio5.jpg" type="image/jpeg">
                    <img src="build/img/anuncio5.jpg" alt="anuncio" loading="lazy">
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
                    <a class="boton-amarillo-block" href="anuncio.php">Ver Propiedad</a>

                </div>
            </div>

            <div class="anuncio">
                <picture>
                    <source srcset="build/img/anuncio6.webp" type="image/webp">
                    <source srcset="build/img/anuncio6.jpg" type="image/jpeg">
                    <img src="build/img/anuncio6.jpg" alt="anuncio" loading="lazy">
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
                    <a class="boton-amarillo-block" href="anuncio.php">Ver Propiedad</a>

                </div>
            </div>
        </div> <!--.contenedor-anuncios-->
    </main>


<!--footer desde php-->
<?php 
    incluirTemplate('footer');
?>