<div class="row animated fadeIn fast alert alert-success"  id="pla" >
        <div class="col-md-4">
                      <img style="max-width:65%; width:auto; height:auto;" src="imagenes/fondo.png"  class="img-img-fluid" >
                      <br><br>
        </div>
        <div class="col-md-8" >
                    <h5 class="card-title">Firma Electronica de documentos</h5>
                    <hr>
                    <form class="" action="firma.php" method="post">
                    <b>Documento:   </b><input type="text" name="documento" value="" required><br><br>
                    <b>Nombre del Usuario a firmar:     </b><input type="text" name="nombre" value="" required><br><br>
                    <b>Descripcion:     </b><input type="text" name="descripcion" value="" size="50" required><br><br>
                    <b>Puesto:      </b><input type="text" name="puesto" value="" size="50" required><br><br>
                    <b>Fecha:   </b><input type="text" name="fecha" value=" " required ><br><br>
                    <b>Cartificado:     </b><input type="text" name="certificado" value="" required><br><br>
                    <b>Llave de Certificado:    </b><input type="text" name="llave" value="" required><br><br>

                    <input type="submit" value="Firmar Documento" class="btn float-left login_btn">

                    </form>

        </div>
