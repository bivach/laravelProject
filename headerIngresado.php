<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <header>
    <div id="navbarID">
        <div class="container">

            <div class="row row1">
                <ul class="largenav pull-right">
                  <li class="upper-links"><a class="links" href="cerrarSesion.php">Cerrar Sesión</a></li>
                  <li class="upper-links"><a class="links" href="faq.php">FAQ</a></li>
                  <!-- <li class="upper-links">
                      <a class="links" href="#">
                          <svg class="" width="16px" height="12px" style="overflow: visible;">
                              <path d="M8.037 17.546c1.487 0 2.417-.93 2.417-2.417H5.62c0 1.486.93 2.415 2.417 2.415m5.315-6.463v-2.97h-.005c-.044-3.266-1.67-5.46-4.337-5.98v-.81C9.01.622 8.436.05 7.735.05 7.033.05 6.46.624 6.46 1.325v.808c-2.667.52-4.294 2.716-4.338 5.98h-.005v2.972l-1.843 1.42v1.376h14.92v-1.375l-1.842-1.42z" fill="#fff"></path>
                          </svg>
                      </a>
                  </li> -->
                </ul>
            </div>

            <div class="row row2">
                <div class="col-sm-2">
                    <h2 style="margin:0px;"><span class="smallnav menu" onclick="openNav()">☰ Logo</span></h2>
                    <h1 style="margin:0px;"><span class="largenav"><a class="links" href="homeIngresado.php">Logo</a></span></h1>
                </div>
                <div class="navbar-search smallsearch col-sm-8 col-xs-11">
                    <div class="row">
                      <form method="get" action="search.php">
                        <input class="navbar-input col-xs-11" type="" placeholder="Buscar Productos" name="results">
                        <button type="submit" class="navbar-button col-xs-1">
                            <img src="img/lupa2.png" width="17px" height="17px"/>
                        </button>
                        </form>
                    </div>

                </div>
                <!-- <div class="cart largenav col-sm-2">
              <a class="cart-button">
                  <svg class="cart-svg " width="16 " height="16 " viewBox="0 0 16 16 ">
                      <path d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86 " fill="#fff "></path>
                  </svg> Carrito
                  <span class="item-number ">0</span>
              </a>
          </div> -->
            </div>

        </div>
    </div>
    <div id="mySidenav" class="sidenav">
        <div class="container" style="background-color: #1d1d50; padding-top: 10px;">
            <span class="sidenav-heading">Logo</span>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </div>
          <a href="homeIngresado.php">Home</a>
          <a href="faq.php">FAQ</a>
          <a href="faq.php">Mis Compras</a>
    </div>
  </header>
</body>
</html>