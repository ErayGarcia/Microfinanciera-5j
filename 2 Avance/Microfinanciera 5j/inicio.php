<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
      body{margin-top:20px;}
/* About Me 
---------------------*/
@media (max-width: 991px) {
  .about-text {
    margin-top: 40px;
  }
}
.about-text h3 {
  font-size: 45px;
  font-weight: 700;
  margin: 0 0 10px;
}
@media (max-width: 767px) {
  .about-text h3 {
    font-size: 35px;
  }
}
.about-text h4 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .about-text h4 {
    font-size: 18px;
  }
}
.about-text p {
  font-size: 18px;
}
.about-text p mark {
  font-weight: 600;
  color: #3a3973;
}
.about-text .btn-bar {
  padding-top: 8px;
}
.about-text .btn-bar a {
  min-width: 150px;
  text-align: center;
  margin-right: 10px;
}

.about-list {
  padding-top: 10px;
}
.about-list .media {
  padding: 5px 0;
}
.about-list label {
  color: #3a3973;
  font-weight: 600;
  width: 88px;
  margin: 0;
  position: relative;
}
.about-list label:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  right: 11px;
  width: 1px;
  height: 12px;
  background: #3a3973;
  -moz-transform: rotate(15deg);
  -o-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
  margin: auto;
  opacity: 0.5;
}
.about-list p {
  margin: 0;
  font-size: 15px;
}

.about-img {
  box-shadow: 0 5px 14px 0 rgba(0, 0, 0, 0.06);
  padding: 10px;
  background: #ffffff;
}
@media (max-width: 991px) {
  .about-img {
    margin-top: 30px;
  }
}

.counter-section {
  padding: 40px 20px;
}
.counter-section .count-data {
  margin-top: 10px;
  margin-bottom: 10px;
}
.counter-section .count {
  font-weight: 700;
  color: #ffffff;
  margin: 0 0 10px;
}
.counter-section p {
  font-weight: 500;
  margin: 0;
  color: #fe4f6c;
}
.theme-color {
    color: #fe4f6c;
}

.section {
    padding: 100px 0;
    position: relative;
}
.gray-bg {
    background-color: #ebf4fa;
}
.px-btn.theme {
    background: #fe4f6c;
    color: #ffffff;
    border: 2px solid #fe4f6c;
}
.px-btn {
    padding: 0 20px;
    line-height: 42px;
    border: 2px solid transparent;
    position: relative;
    display: inline-block;
    background: none;
    border: none;
    -moz-transition: ease all 0.35s;
    -o-transition: ease all 0.35s;
    -webkit-transition: ease all 0.35s;
    transition: ease all 0.35s;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 500;
}

.px-btn.theme-t {
    background: transparent;
    border: 2px solid #fe4f6c;
    color: #fe4f6c;
}
@media screen and (min-width:992px){
      .nav-item {
      line-height:80px;
      }
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="headerNav">
  <div class="container-fluid">
    <a class="navbar-brand d-block d-lg-none" href="#">
      <img src="./src/vistas/img/lgo.png" height="80" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link mx-2 active" aria-current="page" href="inicio.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 active" href="Registrocliente.php">Registro Cliente</a>
        </li>
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link mx-2" href="#">
            <img src="./src/vistas/img/lgo.png" width="80" height="80" />
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 active" href="Seguimiento.php">Seguimiento de Prestamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 active" href="#">Estado de Cuenta</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<section class="section about-section gray-bg" id="about">
    <div class="container">
        <div class="row align-items-center justify-content-around flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text">
                    <h3 class="dark-color">Microfinanciera TUX</h3>
                    <p>En nuestra empresa microfinanciera, estamos comprometidos en brindar soluciones financieras 
                      flexibles y accesibles a nuestros clientes. Entendemos que las necesidades económicas varían, y 
                      por eso ofrecemos una amplia gama de opciones de préstamo. Si eres un nuevo cliente, puedes solicitar 
                      préstamos de entre $1,000 y $5,000 para cubrir tus necesidades financieras inmediatas. Pero no es todo, 
                      ¡valoramos la fidelidad de nuestros clientes! Si eres un cliente frecuente con un historial sólido, 
                      te damos la oportunidad de acceder a préstamos de hasta $20,000, para que puedas alcanzar tus metas 
                      financieras con mayor amplitud. En MicroFinanciera, estamos aquí para ayudarte a lograr tus objetivos económicos de manera rápida y sencilla.</p>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <div class="about-img">
                    <img src="./src/vistas/img/lgo.png">
                </div>
            </div>
        </div>
    </div>
</section>


    <div class="container-fluid">
    <footer class="text-white text-center text-lg-start bg-dark"> <!-- Cambié el color del texto a negro y el color de fondo a gris -->
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row mt-4">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Acerca de la compañía</h5>

          <p>
            Trabajamos para ayudar a las personas que necesitan dinero de manera rápida o urgente. Con excelentes préstamos y pocos intereses. El método de pago es por Día, Semanal, Mensual o Anual.
          </p>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4 pb-1">Contacto</h5>

          <ul class="fa-ul" style="margin-left: 1.65em;">
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2">Colonia Municipal Los Presidentes Numero 10</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">erayspinosa@gmail.com</span>
            </li>
            <li class="mb-3">
              <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">9614293591</span>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Horarios</h5>

          <table class="table text-center text-black"> <!-- Cambié el color del texto a negro -->
            <tbody class="font-weight-normal">
              <tr>
                <td>Lunes - Viernes:</td>
                <td>8am - 9pm</td>
              </tr>
              <tr>
                <td>Sábados</td>
                <td>10am - 6pm</td>
              </tr>
              <tr>
                <td>Domingo</td>
                <td>9am - 2pm</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);"> <!-- Cambié el color de fondo a gris -->
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">Microfinanciera TUX</a> <!-- Cambié el color del texto a negro -->
    </div>
    <!-- Copyright -->
  </footer>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
