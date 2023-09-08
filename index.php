<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="code.jquery.com_jquery-3.7.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <title>App</title>

    <!-- ============================================================
    =ESTILOS PARA USO DE DATATABLES JS
    ===============================================================-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">

    <!-- ============================================================
    =LIBRERIAS PARA USO DE DATATABLES JS
    ===============================================================-->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

    <script>
        function ejecutarEnviar() {
            var nombre = $('#nombre').val();
            var password = $('#password').val();

            var parametros = {
                'nombre': nombre,
                'password': password
            }

            $.ajax({
                type: "POST",
                url: 'insertar.php',
                dataType: "html",
                data: parametros
            }).done(function (data) {
                console.log(data);
            })
        }

    </script>

</head>
<body>
<div class="card">
    <div class="card-header">
        <h1>Registro de usuarios</h1>
    </div>
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label>Escriba el usuario</label>
                <input id="nombre" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" >
                <br>
                <label>Ingrese la constraseña</label>
                <input id="password" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                <br>
                <button id="btnEnviar"type="button" class="btn btn-primary" onclick="ejecutarEnviar()">Enviar</button>
            </div>
        </form>
    </div>
</div>

<hr>
<div class="row">
    <div class="col-lg-10">
        <table id="tblusuarios" class="table table-striped w-100 shadow">
            <thead>
            <tr>
                <th></th>
                <th>Usuario</th>
                <th>Password</th>
            </tr>
            </thead>
            <tbody class="text-small">
        </table>
    </div>
</div>

<script>
    $(document).ready(function(){
        var table;
        //var activo = usuarioActivo();
        table = $("#tblusuarios").DataTable({
            dom: 'Bfrtip',
            buttons:[
                'excel','print', 'pdf','pageLength'
            ],
            pageLength:[5,10,15,30,50,100],
            pageLength: 10,
            ajax:{
                url: 'listausuarios.php',
                dataSrc: '',
                type: "POST",
                //data: {'request':'listliqdash'},
            },
            responsive:{
                details:{
                    type: 'column'
                }
            },
            columnDefs:[
                {
                    targets:0,
                    orderable:false,
                    className:'control'
                },
            ],
        });


        //Eventos para criterios de Búsqueda

    })
</script>

</body>
</html>