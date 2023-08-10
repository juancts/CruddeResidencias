<?= $header?>
<a href="<?=base_url('crear')?>">Add Residence</a>
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
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
                            foreach($residencias as $residencia):                        
                        ?>
                        <tr>
                                <td><?=$residencia['KEY_RESIDENCIA'];?></td>
                                <td><?=$residencia['TXT_NOMBRE']?></td>
                                <td><?=$residencia['URL']?></td>
                                <td><?=$residencia['EMAIL']?></td>
                                <td><?=$residencia['TELEFONO']?></td>
                                <td><?=$residencia['CONTACTO']?></td>
                                <td>Editar/Borrar</td>
                        </tr>
                        <?php 
                            endforeach;
                        ?>
                    </tbody>
                </table>
<?=$footer ?>            