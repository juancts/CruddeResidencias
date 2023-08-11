<?= $header ?>

<p>NUEVO DOCUMENTO</p>

    <div class="card-body">
        <h5 class="card-title">Datos Generales</h5>
        <p class="card-text">


        <form method="post" action="" enctype="multipart/form-data">

            <!-- DATOS GENERALES -->
            <div class="card">
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="codigoresidencia">Codigo de la residencia</label>
        <div class="col-12 col-md-6">
            <input id="codigoresidencia" class="form-control" type="text">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="nombre">Nombre de la residencia</label>
        <div class="col-12 col-md-6">
            <input id="nombre" class="form-control" type="text">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="numeroregistro">Numero de registro</label>
        <div class="col-12 col-md-6">
            <input id="numeroregistro" class="form-control" type="text">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="imagen">Imágen</label>
        <div class="col-12 col-md-6">
            <input id="imagen" class="form-control" type="text">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="video">Video</label>
        <div class="col-12 col-md-6">
            <input id="video" class="form-control" type="text">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="imagen">Imágen:</label>
        <div class="col-12 col-md-6">
            <input type="file" id="imagen" class="form-control-file" name="imagen">
        </div>
    </div>

    
</div>
<h5>Mas imágenes</h5>
<div class="card">
    
</div>
<!-- DATOS DE CONTACTO -->
<h5 class="card-title">Datos de contacto</h5>
<div class="card">
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="codigoresidencia">
            NIF del socio</label>
        <div class="col-12 col-md-6">
            <input id="nifsocio" class="form-control" type="text">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="paginaweb">Pagina Web:</label>
        <div class="col-12 col-md-6">
            <input id="paginaweb" class="form-control" type="text">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="email">Email:</label>
        <div class="col-12 col-md-6">
            <input id="email" class="form-control" type="text">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="telfax">Teléfono/fax:</label>
        <div class="col-12 col-md-6">
            <input id="telfax" class="form-control" type="text">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="movil">Móvil:</label>
        <div class="col-12 col-md-6">
            <input id="movil" class="form-control" type="text">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="vistas">Numero veces visto:</label>
        <div class="col-12 col-md-6">
            <input type="text" id="vistas" class="form-control" name="vistas">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-12 col-md-6 offset-md-2">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </div>
</div>
</form>

 </p>
 </div>


<?= $footer ?>