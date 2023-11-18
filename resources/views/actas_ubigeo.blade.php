@extends('onpe')

        <h1>PRESENTACIÓN DE RESULTADOS</h1>
      </div>
    </div>

    <div class="pull-right logo">
      <img src="images/eegg2016-trans.png" width="218" height="35">
    </div>
  </div>
</header>

<div class="container">
  <img src="images/f-actas.jpg" width="1170" height="248" class="img-responsive mg30top">

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
        <li class="bt-amarillo act-amarillo">
          <a href="./actas_ubigeo.html">ACTAS</a>
        </li>
        <li class="bt-rojo">
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
            <li><a href="./actas_ubigeo.html" class="act-izq">Actas por ubigeo</a></li>
            <li><a href="./actas_numero.html">Actas por número</a></li>
          </ul>
        </div>
      </div>

      <div class="col-xs-12 col-md-9" id="impreso">
        <div class="contenido-interna">
          <div class="titulos col-xs-12">
            <div class="col-xs-11">
                <h3> <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true" style="font-size:19px"></span> SEGUNDA ELECCIÓN PRESIDENCIAL 2016: ACTAS POR UBIGEO</h3>
            </div>

            <div class="col-xs-1 oculto-boton-print">
                <button onclick="printContent('impreso');"><i class="fa fa-print ico-print"></i></button>
            </div>
          </div>

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

          <div class="col-xs-12 td34up">
            <form id="frmBuscar" name="frmBuscar" action="" method="post" class="horizontal-form">

              <div class="row">

                <div class="col-md-3">
                  <label class="control-label">Ámbito:</label>
                  <div id="ambito" class="form-group">
                    <select name="cdgoAmbito" id="cdgoAmbito" class="form-control" onchange="buscarAmbito('', 'acta', '', this.value, ''); $('#aComentarioProvincia').html('');">
                      <option value="P">PERÚ</option>
                      <option value="E">EXTRANJERO</option>
                    </select>
                  </div>
                </div>

                <div id="dvNombreDepartamento" class="col-md-3" style="">
                  <div class="form-group">
                    <label id="lblDepartamento" class="control-label">Departamento:</label>
                    <div id="departamentos">
                      <select name="cdgoDep" id="cdgoDep" class="form-control" onchange="getProvinciasDepa_acta('', '', this.value);">
                        <option selected="selected" value="">--SELECCIONE--</option>
                        <option value="010000">AMAZONAS</option>
                        <option value="020000">ANCASH</option>
                        <option value="030000">APURIMAC</option>
                        <option value="040000">AREQUIPA</option>
                        <option value="050000">AYACUCHO</option>
                        <option value="060000">CAJAMARCA</option>
                        <option value="240000">CALLAO</option>
                        <option value="070000">CUSCO</option>
                        <option value="080000">HUANCAVELICA</option>
                        <option value="090000">HUANUCO</option>
                        <option value="100000">ICA</option>
                        <option value="110000">JUNIN</option>
                        <option value="120000">LA LIBERTAD</option>
                        <option value="130000">LAMBAYEQUE</option>
                        <option value="140000">LIMA</option>
                        <option value="150000">LORETO</option>
                        <option value="160000">MADRE DE DIOS</option>
                        <option value="170000">MOQUEGUA</option>
                        <option value="180000">PASCO</option>
                        <option value="190000">PIURA</option>
                        <option value="200000">PUNO</option>
                        <option value="210000">SAN MARTIN</option>
                        <option value="220000">TACNA</option>
                        <option value="230000">TUMBES</option>
                        <option value="250000">UCAYALI</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div id="dvNombreProvincia" class="col-md-3" style="">
                  <div class="form-group">
                    <label id="lblProvincia" class="control-label">Provincia:</label>
                    <div id="provincias">
                      <select name="cdgoProv" id="cdgoProv" class="form-control" onchange="buscarProvincia_actas(this.value, '', 'PR');
                        if (this.value.substring(0,4) == '9430')
                          $('#aComentarioProvincia').html('&nbsp;&nbsp;&nbsp;ACTUALMENTE SERBIA');
                        else
                          $('#aComentarioProvincia').html('');
                        ">
                        <option selected="selected" value="">--SELECCIONE--</option>
                        <option value="010200">BAGUA</option>
                        <option value="010300">BONGARA</option>
                        <option value="010100">CHACHAPOYAS</option>
                        <option value="010600">CONDORCANQUI</option>
                        <option value="010400">LUYA</option>
                        <option value="010500">RODRIGUEZ DE MENDOZA</option>
                        <option value="010700">UTCUBAMBA</option>
                      </select>
                      <span id="aComentarioProvincia"></span>
                    </div>
                  </div>
                </div>

              </div>

              <div class="row">

                <div class="col-md-4">
                  <label id="lblDistrito" class="control-label">Distrito:</label>
                  <div id="distritos" class="form-group">
                    <select name="cdgoDist" id="cdgoDist" class="form-control" onchange="
                      getPageWeb('', 'actas', 'getLocalesVotacion', 'divLocal', '&amp;tipoElec=&amp;ubigeo=' + this.value);
                      getPageWeb('', 'actas', 'limpiarDiv', 'divDetalle', '');">
                      <option selected="selected" value="">--SELECCIONE--</option>
                      <option value="010202">ARAMANGO</option>
                      <option value="010205">BAGUA</option>
                      <option value="010203">COPALLIN</option>
                      <option value="010204">EL PARCO</option>
                      <option value="010206">IMAZA</option>
                      <option value="010201">LA PECA</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-8">
                  <div class="form-group">
                    <label class="control-label">Locales:</label>
                    <div id="divLocal">
                      <select name="actas_ubigeo" id="actas_ubigeo" class="form-control" onchange="actas_porUbigeo_verActsPr(this.value, '10', '')">
                        <option value="-1?-1" selected="selected">--SELECCIONE--</option>
                        <option value="0033?010202">IE 16201</option>
                        <option value="0032?010202">IE MIGUEL MONTEZA TAFUR</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div id="divDetalle" class="ptop20">

                  <div class="col-xs-12 pbot30">
                    <p class="subtitle">LISTADO DE MESAS</p>
                    <div id="page-wrap">
                      <table class="table17" cellspacing="0">
                        <tbody>
                          <tr>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000169', '10', '1')" style="cursor:pointer"><a href="#">000169</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000170', '10', '1')" style="cursor:pointer"><a href="#">000170</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000171', '10', '1')" style="cursor:pointer"><a href="#">000171</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000172', '10', '1')" style="cursor:pointer"><a href="#">000172</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000173', '10', '1')" style="cursor:pointer"><a href="#">000173</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000174', '10', '1')" style="cursor:pointer"><a href="#">000174</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000175', '10', '1')" style="cursor:pointer"><a href="#">000175</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000176', '10', '1')" style="cursor:pointer"><a href="#">000176</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000177', '10', '1')" style="cursor:pointer"><a href="#">000177</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000178', '10', '1')" style="cursor:pointer"><a href="#">000178</a></td>
                          </tr>
                          <tr>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000179', '10', '1')" style="cursor:pointer"><a href="#">000179</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000180', '10', '1')" style="cursor:pointer"><a href="#">000180</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000181', '10', '1')" style="cursor:pointer"><a href="#">000181</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000182', '10', '1')" style="cursor:pointer"><a href="#">000182</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000183', '10', '1')" style="cursor:pointer"><a href="#">000183</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000184', '10', '1')" style="cursor:pointer"><a href="#">000184</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000185', '10', '1')" style="cursor:pointer"><a href="#">000185</a></td>
                            <td bgcolor="#C1C1C1" onclick="verDetalleMesa('010202', '000186', '10', '1')" style="cursor:pointer"><a href="#">000186</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <div class="col-xs-12 cont-recto oculto-leyenda-color-fondo-mesas">
                    <div class="col-md-4"><img src="images/procesacon.jpg"> Procesada con imagen</div>
                    <div class="col-md-4"><img src="images/procesasin.jpg"> Procesada sin imagen</div>
                    <div class="col-md-4"><img src="images/sinprocesa.jpg"> Sin procesar</div>
                  </div>

                  <div class="row pbot30">
                    <div class="col-lg-8 centered">
                      <div class="col-xs-12 col-md-12 col-lg-12">
                        <table>
                          <tbody>
                            <tr>
                              <td colspan="10">
                                <div class="conte-paginador">
                                  <span class="paginador-txt">Total de mesas: 18</span>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="10">Página:
                                <ul class="pagination">
                                  <li class="active"><a class="paginador-n1">1</a></li>
                                </ul>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                </div>

                <div id="divDetalle" class="ptop20">
                  <div class="contenido-resultados">
                    <button class="btn btn-primary pull-right" onclick="actas_porUbigeo_verActsPr('', '10', '', '1')" type="button">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      REGRESAR
                    </button>
                    <p>&nbsp;</p>

                    <div class="row">
                      <div class="tab-info">
                        <div class="tab-content">
                          <div id="detMesa">
                            <div class="tab-content">
                              <div role="tabpanel" class="tab-pane active" id="presidencial">
                                <div class="tab-info-desc">

                                  <div class="row">

                                    <div class="col-xs-3 col-md-4">
                                      <div class="mesap01">
                                        <img src="images/mp-sin.jpg" class="img-responsive">
                                        Si requiere la imagen del acta, solicítela a través del procedimiento de acceso a la información pública.
                                      </div>
                                    </div>
                                    <div class="col-xs-9 col-md-8">
                                      <div class="row">

                                        <div class="col-xs-12">
                                          <p class="subtitle1">ACTA ELECTORAL</p>
                                          <div id="page-wrap">
                                            <table class="table13" cellspacing="0">
                                              <thead>
                                                <tr>
                                                  <th>Mesa N°</th>
                                                  <th>N° Copia</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>000169</td>
                                                  <td>96A</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>

                                        <div class="col-xs-12">
                                          <p class="subtitle1">INFORMACIÓN UBIGEO</p>
                                          <div id="page-wrap">
                                            <table class="table14" cellspacing="0">
                                              <tbody>
                                                <tr class="titulo_tabla">
                                                  <td>Departamento</td>
                                                  <td>Provincia</td>
                                                  <td>Distrito</td>
                                                  <td>Local de votación</td>
                                                  <td>Dirección</td>
                                                </tr>
                                                <tr>
                                                  <td>AMAZONAS</td>
                                                  <td>BAGUA</td>
                                                  <td>ARAMANGO</td>
                                                  <td>IE 16201</td>
                                                  <td>AV. 28 DE JULIO SN</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>

                                        <div class="col-xs-12">
                                          <p class="subtitle1">INFORMACIÓN MESA</p>
                                          <div id="page-wrap">
                                            <table class="table15" cellspacing="0">
                                              <tbody>
                                                <tr class="titulo_tabla">
                                                  <td>Electores hábiles</td>
                                                  <td>Total votantes</td>
                                                  <td>Estado del acta</td>
                                                </tr>
                                                <tr>
                                                  <td>298</td>
                                                  <td>199</td>
                                                  <td>ACTA ELECTORAL NORMAL</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                        </div>

                                      </div>
                                    </div>
                                  </div>

                                  <div>
                                    <div class="col-xs-12 pbot30_acta">
                                      <p class="subtitle1">LISTA DE RESOLUCIONES</p>
                                      <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> No hay resoluciones para el acta seleccionada
                                      <div id="page-wrap">
                                        <div class="col-md-12 resolu"></div>
                                      </div>
                                      <!-- <p class="centro"># : El valor consignado en el acta presenta ilegibilidad.</p> -->
                                    </div>
                                  </div>

                                  <div>
                                    <div class="col-xs-12">
                                      <p class="subtitle1">INFORMACIÓN DEL ACTA ELECTORAL</p>
                                      <div id="page-wrap" class="cont-tabla1">
                                        <table class="table06">
                                          <tbody>
                                            <tr class="titulo_tabla">
                                              <td colspan="2">Organización política</td>
                                              <td>Total de Votos</td>
                                            </tr>
                                              <td>PERUANOS POR EL KAMBIO</td>
                                              <td><img width="40px" height="40px" src="images/simbolo_keyko.jpg"></td>
                                              <td>56</td>
                                            </tr>
                                            <tr>
                                              <td>FUERZA POPULAR</td>
                                              <td><img width="40px" height="40px" src="images/simbolo_pkk.jpg"></td>
                                              <td>129</td>
                                            </tr>
                                            <tr>
                                              <td colspan="2">VOTOS EN BLANCO</td>
                                              <td>1</td>
                                            </tr>
                                            <tr>
                                              <td colspan="2">VOTOS NULOS</td>
                                              <td>13</td>
                                            </tr>
                                            <tr>
                                              <td colspan="2">VOTOS IMPUGNADOS</td>
                                              <td>0</td>
                                            </tr>
                                            <tr>
                                              <td colspan="2">TOTAL DE  VOTOS EMITIDOS</td>
                                              <td>199</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>

                                </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>

              </div>

            </form>
          </div>

        </div>
      </div>

    </div>
  </section>
</div>
<br/><br/>

<footer class="footer-inside">
  <div class="container">
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
