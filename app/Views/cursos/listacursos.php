<?= $header?>
<a href="<?=base_url('crearcurso')?>">New Curs</a>
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Descripcio</th>
                            <th>Acción</th>                       
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($cursos as $curso):                        
                        ?>
                        <tr>
                                <td><?=$curso['KEY_CURSO']?></td>
                                <td><?=$curso['DTE_INI'];?></td>
                                <td><?=$curso['TXT_NOMBRE']?></td>
                                <td>Editar/Borrar</td>
                        </tr>
                        <?php 
                            endforeach;
                        ?>
                    </tbody>
                </table>
<?=$footer ?>    