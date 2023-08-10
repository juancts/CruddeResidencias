<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document Title</title>
</head>
<body>
              <p>LISTA DE RESIDENCIAS</p>
            <div class=" table table-light">
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
            </div>   
</body>
</html>