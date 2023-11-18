@extends('onpe')
@yield('name')
<header>
    <div class="container">
      <div class="pull-left logo-onpe">
        <div class="pull-left">
          <a href="index.html"><img src="images/onpe-trans.png"></a>
        </div>

        <div class="pull-left">
          <h1>PRESENTACIÓN DE RESULTADOS</h1>
        </div>
      </div>

      <div class="pull-right logo">
        <img src="images/eegg2016-trans.png" width="218" height="35">
      </div>
    </div>
  </header>

  <div id="imprimelo3">
    <div class="container">
      <img src="images/f-participacion.jpg" width="1170" height="248" class="img-responsive mg30top">

      <section class="menu navbar-default menu05">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <a name="posicion"></a>
        <nav class="navbar-collapse bs-navbar-collapse collapse" aria-expanded="false">
          <ul class="nav navbar-nav">
            <li class="bt-azul">
              <a href="./presidenciales.html">PRESIDENCIAL</a>
            </li>
            <li class="bt-amarillo">
              <a href="./cctas-ubigeo.html">ACTAS</a>
            </li>
            <li class="bt-rojo act-rojo">
              <a href="./participacion.html">PARTICIPACIÓN CIUDADANA</a>
            </li>
          </ul>
        </nav>
      </section>
      <br/><br/><br/><br/>

      <section class="contenedor">
        <div class="row">
          <div class="col-xs-12 col-md-3">
            <div class="menu-interna">
              <ul>
                <li><a href="./Participacion-ciudadana-Total-Todos-Pie.html" class="act-izq">TOTAL</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-md-9" id="impreso">
            <div class="contenido-interna">
              <div class="titulos col-xs-12">
                <div class="col-xs-11">
                  <h3> <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true" style="font-size:19px"></span> SEGUNDA ELECCIÓN PRESIDENCIAL 2016: PARTICIPACIÓN CIUDADANA</h3>
                </div>
                <div class="col-xs-1 oculto-boton-print">
                  <button onclick="printContent('impreso');"><i class="fa fa-print ico-print"></i></button>
                </div>
              </div>
              <div class="col-xs-12">
                <p class="subtitle">ACTAS CONTABILIZADAS</p>
                <div class="col-lg-7 centered">
                  <div class="col-xs-12 col-md-12 col-lg-12 cont-curv">
                    <div class="col-xs-3 col-md-1">
                      <span class="glyphicon glyphicon-ok-circle ico-info" aria-hidden="true"></span>
                    </div>
                    <div class="col-xs-9 col-md-11">
                      <ul>
                        <li>ACTUALIZADO EL 20/06/2016 A LAS 19:16 h </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <br/>
              </div>
              <div class="col-xs-12 line pbot30">
                <div class="col-xs-12 col-md-6">
                  <img src="estadistico.png?_tot_participacion=80.093&amp;_tot_ausentismo=19.907" class="img-responsive">
                </div>
                <div class="col-xs-12 col-md-6">
                  <p class="subtitle">ELECTORES HÁBILES 22,901,954</p>
                  <div id="page-wrap">
                    <table class="table09_2" cellspacing="0">
                      <thead>
                        <tr>
                          <th>PARTICIPACIÓN</th>
                          <th>AUSENTISMO</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>TOTAL: 18,342,896</td>
                          <td>TOTAL: 4,559,058</td>
                        </tr>
                        <tr>
                          <td>% TOTAL: 80.093%</td>
                          <td>% TOTAL: 19.907%</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 pbot30 ptop20">
                <div class="col-xs-12 col-md-6">
                  <a href="./participacion_total.html?id=extranjero"><img src="images/icono_extranjero.jpg" class="img-responsive"></a>
                </div>
                <div class="col-xs-12 col-md-6">
                  <a href="./participacion_total.html?id=nacional"><img src="images/icono_nacional.jpg" class="img-responsive"></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <div id="divDetalle"></div>

  <footer class="footer-inside">
      <div class="container ">
        <div class="row">
          <div class="col-md-12 direc01">
            <span>CONTÁCTENOS</span>
            <p>Jr. Washington 1894, Cercado de Lima </p>
            <p>Correo electrónico: <a href="#">informes@onpe.gob.pe</a></p>
            <p>Central Telefónica: 417 - 0630 / Lunes a Viernes 08:30 - 16:30 hrs</p>
          </div>
        </div>
      </div>
  </footer>
  @endforeach
@endsection
