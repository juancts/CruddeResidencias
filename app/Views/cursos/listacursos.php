<?= $header ?>
<div style="margin-top: 10px; margin-bottom: 10px; margin-right:20px; text-align: right;">
    <a href="<?= base_url('crearcurso') ?>" class="btn btn-success">New Curs</a>
</div>
<table class="table table-light">
    <thead class="thead-light">
        <tr style="text-align: center;">
            <th>#</th>
            <th>Fecha</th>
            <th>Descripcio</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($cursos as $curso) :
        ?>
            <tr>
                <td><?= $curso['KEY_CURSO'] ?></td>
                <td><?= $curso['DTE_INI']; ?></td>
                <td><?= $curso['TXT_NOMBRE'] ?></td>
                <td style="padding: 2px; text-align: center;"><a href="<?= base_url('editar/' . $curso['KEY_CURSO']); ?>" class="btn btn-info btn-sm m-1" type="button">Editar</a>
                    <a href="<?= base_url('borrar/' . $curso['KEY_CURSO']); ?>" class="btn btn-danger btn-sm m-1" type="button">Borrar</a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
<?= $footer ?>