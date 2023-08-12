<?= $header ?>
<a href="<?= base_url('crear') ?>">Add Residence</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Imágen</th>
            <th>Nombre</th>
            <th>url</th>
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
                <td><?= $residencia['URL'] ?></td>
                <td><?= $residencia['EMAIL'] ?></td>
                <td><?= $residencia['TELEFONO'] ?></td>
                <td><?= $residencia['CONTACTO'] ?></td>
                <td>Editar/Borrar</td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
<?= $footer ?>