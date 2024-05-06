<?php
include 'app/appConfig.php';
include 'layout/parte1.php';
include 'app/controllers/servicios/listado_servicios.php';
include 'app/controllers/veterinarios/listado_veterinarios.php';
include 'app/controllers/productos/listado_de_productos.php';
include 'app/controllers/usuarios/listado_de_usuarios.php';
include 'app/controllers/reservas/listado_reservas.php';
?>


  <section>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo $URL; ?>/public/images/slider1.jpg" 
                 height="450px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a href="<?php echo $URL;?>/reservar.php" class="btn btn-success btn-lg">Reservar cita</a>
                    <a href="#productos" class="btn btn-success btn-lg">Ver productos</a><br><br>
                    <br>
                    <br>
                    <h5>Chequego General</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2020/03/17/13/57/veterinary-4940425_1280.jpg" height="450px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a href="<?php echo $URL;?>/reservar.php" class="btn btn-success btn-lg">Reservar cita</a>
                    <br>
                    <br>
                    <h5>Nutricion</h5>
                    
                </div>
            </div>
            <div class="carousel-item">
            <img src="https://images.pexels.com/photos/6235232/pexels-photo-6235232.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="450px" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <a href="<?php echo $URL;?>/reservar.php" class="btn btn-success btn-lg">Reservar cita</a>
                    <br>
                    <br>
                    <h5>Baño y Peluqueria</h5>                  
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2020/03/31/16/18/cat-4988407_1280.jpg" height="450px" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a href="<?php echo $URL;?>/reservar.php" class="btn btn-success btn-lg">Reservar cita</a>
                    <br>
                    <br>
                    <h5>Obtetricia y Reproduccion</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
  </section>

  <br>

  <section class="info" >
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <center>
                    <br><br>
                    <img src="public/images/img1.png" width="100%" alt="">
                </center>
            </div>
            <div class="col-md-5 col-sm-12">
                <br><br><br>
                <h2>Acerca de nuestra <span style="color: #2431ad">clínica veterinaria</span></h2>
                    <br>
                    <p style="text-align: justify">Nos dedicamos apasionadamente a proporcionar el más 
                    alto nivel de atención y cuidado para sus queridas mascotas. Con un equipo de profesionales
                     altamente calificados y comprometidos, nos esforzamos por establecer un estándar excepcional 
                     en medicina veterinaria.</p>
                    <p style="text-align: justify">Nuestra misión es garantizar la salud y el bienestar de 
                    sus mascotas a través de servicios médicos especializados, utilizando tecnología de 
                    vanguardia y prácticas basadas en la evidencia. Desde consultas de medicina interna 
                    hasta procedimientos avanzados de diagnóstico, nuestro enfoque integral aborda las necesidades 
                    individuales de cada paciente.</p>
                    <a href="#" class="btn btn-outline-primary btn-lg">Más sobre nosotros</a>
                    <br><br>
            </div>
        </div>
    </div>
</section>
<br>

<section id="productos" class="our-services" style="background-color: rgba(255,208,45,0.34)">
    <div class="container">
      <div class="row">
          <div class="col-md-12">
              <br><br>
              <h1>Nuestros <b style="color: #0a58ca">Productos</b></h1>
              <br><br>
          </div>
      </div>
      <div class="row">
        <?php
        foreach ($productos as $producto) {
        ?>         
          <div class="col-md-3 mb-3 zoomP">
              <div class="card h-100" >
                  <img class="card-img-top mx-auto d-block mt-4" class="mt-4 ms-4 text-center" src="<?=$URL."/public/images/productos/".$producto['imagen'];?>"
                        style="width:60px; height:90px; object-fit: cover;" class="card-img-top" alt="...">
                        
                  <div class="card-body mt-4 ms-4 text-center">
                      <h5 class="card-title"><?=$producto['nombre_producto'];?></h3>
                      <p class="card-text"><?=$producto['descripcion'];?></p>
                      <p style=""><b>$<?=$producto['precio_venta'];?></b></p>
                  </div>
              </div>
              <br>
          </div>
        <?php
            }
        ?>           
      </div>
    </div>
    <br><br>
</section>

<section class="our-services">
    <div class="container">
      <div class="row">
          <div class="col-md-12">
              <br><br>
              <h1>Nuestros <b style="color: #0a58ca">Servicios</b></h1>
              <br><br>
          </div>
      </div>
      <div class="row">
          <div class="col-md-3 zoomP">
              <div class="card">
                  <img src="https://img.freepik.com/foto-gratis/lindo-mascota-collage-aislado_23-2150007407.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                      height="220px" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Ecografía</h5>
                      <p class="card-text">Nuestros profesionales altamente capacitados utilizan equipos especializados para evaluar órganos internos y estructuras, lo que nos permite diagnosticar de manera precisa condiciones médicas. </p>
                  </div>
              </div>
              <br>
          </div>
          <div class="col-md-3 zoomP">
              <div class="card">
                  <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-perro_23-2149100178.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                        height="220px" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Medicina Interna</h5>
                      <p class="card-text">Utilizando tecnologías avanzadas y métodos de última generación, nos dedicamos a proporcionar una atención médica integral. Desde la gestión de enfermedades crónicas hasta el abordaje de casos médicos complejos.</p>
                  </div>
              </div>
              <br>
          </div>
          <div class="col-md-3 zoomP">
              <div class="card">
                  <img src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-mascota_23-2149143882.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                        height="220px" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">Radiologia Digital</h5>
                      <p class="card-text">Pilar fundamental en nuestro compromiso con la excelencia en el cuidado de sus mascotas. Nuestro servicio de radiología utiliza tecnología digital de última generación, permitiendo una captura de imágenes más rápida y detallada con una menor exposición a la radiación.</p>
                  </div>
              </div>
              <br>
          </div>
          <div class="col-md-3 zoomP ">
              <img class="rounded-1" src="https://img.freepik.com/vector-gratis/adopta-plantilla-poster-mascotas_23-2148931292.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                    width="100%" alt="">
          </div>
      </div>
    </div>
</section>
<br>
<section class="gallery">
    <div class="container">
        <br><br>
        <h1>Gale<b style="color: #0a58ca">ria</b></h1>
        <br><br>
        <div class="row">
            <div class="col-md-4 zoomP ">
                <center>
                    <img class="rounded-1" src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-perro_23-2149100197.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                         width="100%" height="350px" alt="">
                    <br><br>
                </center>
            </div>
            <div class="col-md-8 zoomP">
                <center>
                       <img class="rounded-1" src="https://img.freepik.com/foto-gratis/coleccion-retratos-adorables-cachorros_53876-145628.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                         width="100%" height="350px"  alt=""><br><br>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 zoomP rounded">
                <center>
                    <img class="rounded-1" src="https://img.freepik.com/foto-gratis/perro-siendo-revisado-veterinario-tienda-mascotas_23-2148872560.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                         width="100%" height="350px" alt=""><br><br>
                </center>
            </div>
            <div class="col-md-4 zoomP">
                <center>
                    <img class="rounded-1" src="https://img.freepik.com/foto-gratis/mujer-corta-perro-perro-sentado-sofa-raza-yorkshire-terrier_1157-46558.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                         width="100%" height="350px" alt=""><br><br>
                </center>
            </div>
            <div class="col-md-4 zoomP">
                <center>
                    <img class="rounded-1" src="https://img.freepik.com/foto-gratis/cerca-veterinario-cuidando-gato_23-2149100168.jpg?size=626&ext=jpg&ga=GA1.1.350373150.1670295459&semt=sph"
                         width="100%" height="350px" alt=""><br><br>
                </center>
            </div>
        </div>
    </div>
    <br><br>
</section>

<section class="clients">
    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <h1 style="text-align: center">Testimonios de Clientes: </h1> <br><br>
        <div class="row text-center">
    <div class="col-md-4 mb-4 mb-md-0"> <!-- Dividido por 3 para mostrar 3 cards -->
      <div class="d-flex justify-content-center mb-4">
        <img src="<?php echo $URL; ?>/public/images/a.png"
          class="rounded-circle shadow-1-strong" width="100" height="100" />
      </div>
      <p class="lead my-3 text-muted">
        "La clínica veterinaria superó mis expectativas. Su equipo calificado y el trato amable hacia las mascotas hicieron que nuestra visita fuera agradable. ¡Excelente servicio!"
      </p>
      <p class="font-italic font-weight-normal mb-0">- Dr. Andrea Velez</p>
    </div>
        
    <div class="col-md-4 mb-4 mb-md-0"> <!-- Dividido por 3 para mostrar 3 cards -->
        <div class="d-flex justify-content-center mb-4">
            <img src="<?php echo $URL; ?>/public/images/b.png"
            class="rounded-circle shadow-1-strong" width="100" height="100" />
        </div>
        <p class="lead my-3 text-muted">
            "La atención personalizada y el conocimiento del personal de la clínica nos dieron la confianza de que nuestras mascotas están en las mejores manos. ¡Gracias por su dedicación!"
        </p>
        <p class="font-italic font-weight-normal mb-0">- Carlos Cortes</p>      
    </div>

    <div class="col-md-4 mb-4 mb-md-0"> <!-- Dividido por 3 para mostrar 3 cards -->
        <div class="d-flex justify-content-center mb-4">
            <img src="<?php echo $URL; ?>/public/images/c.png"
            class="rounded-circle shadow-1-strong" width="100" height="100" />
        </div>
        <p class="lead my-3 text-muted">
            "El equipo de la clínica brindó un cuidado excepcional a mi mascota. Estoy impresionada por su profesionalismo y atención al detalle. ¡Altamente recomendado!"
        </p>
        <p class="font-italic font-weight-normal mb-0">- Maria Gonzalez</p>      
    </div>
  </div>        
    </div>
</section>
<br>
<br>
<br>

<section class="map">
    <div class="container">
        <br><br><h1 style="text-align: center">Encuentranos aquí</h1> <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24380.690974892328!2d-72.50461627022115!3d7.870969702704611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6645102f9b7269%3A0xab4b03ed6c85830e!2sUniversidad%20Francisco%20de%20Paula%20Santander!5e0!3m2!1ses!2sve!4v1695360625094!5m2!1ses!2sve" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section id="contacto" class="contactos">
    <div class="container">
        <br><br><h1 style="text-align: center">Contactanos</h1><br><br>
        <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <center><b>Escribenos aquí</b></center>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for=""><b>Nombre</b></label>
                                    <input type="text" class="form-control" placeholder="Escribe tu nombre...">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for=""><b>Correo</b></label>
                                    <input type="email" class="form-control" placeholder="Escribe tu correo...">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for=""><b>Mensaje</b></label>
                                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <hr>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <div class="col-md-4"></div>
        </div>
        <br><br>
    </div>
</section>

<?php
include 'layout/parte2.php';
include 'admin/layout/mensaje.php';

?>
