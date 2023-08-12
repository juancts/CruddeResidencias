<?= $header ?>

<p>NUEVO CURSO</p>

    <div class="card-body">
        <h5 class="card-title">Datos Generales</h5>
        <p class="card-text">


        <form method="post" action="<?=site_url('/guardarcurso')?>" enctype="multipart/form-data">

            <!-- DATOS GENERALES -->
            <div class="card">
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="nombre">Nombre del curso:</label>
        <div class="col-12 col-md-6">
            <input id="nombre" name="nombre" class="form-control" type="text">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="fechaini">Fecha inicio:</label>
        <div class="col-12 col-md-6">
            <input id="dateini" name="dateini" class="form-control" type="date">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="fechafin">Fecha Finalización:</label>
        <div class="col-12 col-md-6">
            <input id="datefin" name="datefin" class="form-control" type="date">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="horario">Horario:</label>
        <div class="col-12 col-md-6">
            <input id="horario" name="horario" class="form-control" type="text">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="vacantes">Vacantes:</label>
        <div class="col-12 col-md-6">
            <input id="vacantes" name="vacantes" class="form-control" type="text">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="precio">Precio:</label>
        <div class="col-12 col-md-6">
            <input id="precio" name="precio" class="form-control" type="text">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="estado">Estado:</label>
        <div class="col-12 col-md-6">
            <select id="estado" name="estado" class="form-control">
                <option value="activo">Activo</option>
                <option value="inactivo">Inactivo</option>
                <option value="pendiente">Pendiente</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="file">Adjuntar Archivo:</label>
        <div class="col-12 col-md-6">
            <input id="file" name="file" class="form-control" type="file">
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="formadors">Formadors:</label>
        <div class="col-12 col-md-6">
            <textarea id="formadors" name="formadors" class="form-control" rows="4"></textarea>
        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-12 col-md-2 text-md-right" for="descripcion">Descripción:</label>
        <div class="col-12 col-md-6">
            <textarea id="descripcion" name="descripcion" class="form-control" rows="4"></textarea>
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