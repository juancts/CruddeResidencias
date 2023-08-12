<?= $header ?>
<div style="margin-top: 10px; margin-bottom: 10px; margin-right:20px; text-align: right;">
    <a href="<?= base_url('crear') ?>" class="btn btn-success">Add Residence</a>
</div>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Imágen</th>
            <th>Nombre</th>
            <!-- <th>url</th> -->
            <th>email</th>
            <th>telefono</th>
            <th>contacto</th>
            <th>Acción</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($residencias as $residencia) :
        ?>
            <tr>
                <td><?= $residencia['KEY_RESIDENCIA']; ?></td>

                <?php if (isset($residencia['TXT_IMG']) && !empty($residencia['TXT_IMG'])) { ?>
                    <td><img src="<?= $residencia['TXT_IMG'] ?>" class="img-exif_thumbnail" alt="imagen" width="100px"></td>
                <?php } else { ?>
                    <td><p class="text-center">N/A</p></td>
                <?php } ?>
                <td><?= $residencia['TXT_NOMBRE'] ?></td>
                <!-- <td><?= $residencia['URL'] ?></td> -->
                <td><?= $residencia['EMAIL'] ?></td>
                <td><?= $residencia['TELEFONO'] ?></td>
                <td><?= $residencia['CONTACTO'] ?></td>
                <td style="padding: 2px; text-align: center;"><a href="<?= base_url('editar/' . $residencia['KEY_RESIDENCIA']); ?>" class="btn btn-info btn-sm m-1" type="button">Editar</a>
                    <a href="<?= base_url('borrar/' . $residencia['KEY_RESIDENCIA']); ?>" class="btn btn-danger btn-sm m-1" type="button">Borrar</a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
<?= $footer ?>