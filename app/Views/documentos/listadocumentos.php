<?= $header?>
<a href="<?=base_url('creardocu')?>">New Document</a>
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
                            foreach($documentos as $doc):                        
                        ?>
                        <tr>
                                <td><?=$doc['KEY_DOC']?></td>
                                <td><?=$doc['ANIO'];?></td>
                                <td><?=$doc['TXT_NOMBRE']?></td>
                                <td>Editar/Borrar</td>
                        </tr>
                        <?php 
                            endforeach;
                        ?>
                    </tbody>
                </table>
<?=$footer ?>    