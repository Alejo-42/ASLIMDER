<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sitioWeb/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('sitioWeb/img/logo-aslimder.ico')}}" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/img/icono-limpiez.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ASLIMDER </title>
</head>
<body>
    <header id="volver">
        <nav>
        <div class="icono">
            <img src="{{asset('sitioWeb/img/logo aslimder.png')}}" alt="Icono">
        </div>
        <button id="BtnAbrir"><i class="fa-solid fa-caret-down"></i></button>
        <ul class="inicio">
          <button class="BtnCerrar"><i class="fa-solid fa-xmark"></i></button>
          <li> <a href="#inicio"><i class="fa-solid fa-house"></i> Inicio</a></li>
          <li><a href="#contacto"><i class="fa-solid fa-phone-volume"></i> Contacto</a></li>
          <li><a href="#sobre"><i class="fa-solid fa-users"></i> Sobre nosotros</a></li>
          <li><a href="#direccion"><i class="fa-solid fa-route"></i> Dirección</a></li>
        </ul>
        </nav>
    </header>
    <main>
        <div id="inicio" class="servicios">
            <h2>Servicios</h2>
            <div class="carrusel">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('sitioWeb/img/servicios1.jpg')}}" class="d-block w-100" alt="ServiciosImg1">
                        <div id="contenidoCarrusel" class="carousel-caption d-none d-md-block">
                            <h5>SERVICIO</h5>
                            <p>descripcion</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('sitioWeb/img/servicios2.jpg')}}" class="d-block w-100" alt="ServiciosImg2">
                        <div id="contenidoCarrusel" class="carousel-caption d-none d-md-block">
                            <h5>SERVICIO</h5>
                            <p>descripcion</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('sitioWeb/img/servicios3.jpg')}}" class="d-block w-100" alt="ServiciosImg3">
                        <div id="contenidoCarrusel" class="carousel-caption d-none d-md-block">
                                <h5>SERVICIO</h5>
                                <p>descripcion</p>
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
            </div>
        </div>
        <div id="sobre" class="m-v">
            <div class="mision">
                <h3>Misión:</h3>
                <p>{{$Mision->name}}</p>
                <div>
                    <img src="{{asset('imagen/'.$Mision->image)}}" alt="Misión">
                </div>
            </div>
            <div class="vision">
                <div>
                    <img src="{{asset('imagen/'.$Vision->image)}}" alt="Visión">
                </div>
                <h3>Visión:</h3>
                <p>{{$Vision->name}}</p>
            </div>
        </div>
    </main>
    <footer>
        <div class="info-footer">
            <div class="redes">
                <h4>Siguenos en nuestras redes sociales:</h4>
                <ul>
                    <li><a target="_blank" href=""><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a target="_blank" href=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a target="_blank" href=""><i class="fa-brands fa-tiktok"></i></a></li>
                </ul>
                <div>
                  <a href="#volver"><button class="volver"><i class="fa-solid fa-caret-up"></i></button></a>
                </div>
            </div>
            <div id="contacto" class="contacto">
                <h4>Contactanos:</h4>
                <div>
                    <div>
                        <p><i class="fa-solid fa-phone"></i> (02) 3202-585 </p> 
                    </div>
                    <div>    
                        <p><a target="_blank" href="https://wa.me/0999999999"><i class="fa-brands fa-whatsapp"></i></a></p>
                    </div>
                </div>
                <h4>Correo:</h4>
                <div>
                    <p class="correo"><i class="fa-solid fa-envelope"></i><a target="_blank" href="">su.correo@correo.com<a></p>
                </div>
                <h4>Dirección:</h4>
                <p class="direccion"><i class="fa-solid fa-location-dot"></i> Salvador Bravo, Quito 170131</p>
              </div>
            <div id="direccion" class="geo">
                <h4><i class="fa-solid fa-map-location-dot"></i> Geolocalización:</h4>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2251.619275267255!2d-78.5400965835217!3d-0.2686214762534603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d598e9248ea1fd%3A0x70edbef75c8b1e7e!2sIRFEYAL!5e0!3m2!1ses!2sec!4v1733155481608!5m2!1ses!2sec" width="250" height="250" style="border:1vh;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div>
                    <a href="/panel"><i class="fa-solid fa-dice-d6"></i></a>
                </div>
            </div>
        </div>
        <p class="derechos">Derechos de autor reservados. &copy 2024</p>
    </footer>
    <script src="{{asset('sitioWeb/script.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>