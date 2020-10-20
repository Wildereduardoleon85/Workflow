<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/809c8bd336.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles2.css">
    <title>Document</title>
</head>
<body>
    <div class="contenedor">
        <h1>Datos Del Cliente</h1>
        <form action="buscar.php">
            <div>
                <label for="rut">Ingrese Rut</label>
                <div>
                    <input type="text" name="busqueda_rut" method="GET" placeholder="Ejemplo: 12345678-2">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>

                <div class="<?php if($resultados){echo 'hidden';}else{echo 'resultados';}?>">
                    <?php echo $titulo ?>
                </div>
            </div>
            
        </form>
    </div>

    <div class="workflow">
        
        <?php foreach($resultados as $cliente): ?>
            <div class="ladoIzq">
                <div>
                    <h3>Rut:</h3>
                    <p><?php echo $cliente['rut'] ?></p>
                </div>
                <div>
                    <h3>Nombres:</h3>
                    <p><?php echo $cliente['primer_nombre'] ." ". $cliente['segundo_nombre'] ?></p>
                </div>
                <div>
                    <h3>Apellidos:</h3>
                    <p><?php echo $cliente['apellido_paterno'] ." ". $cliente['apellido_materno'] ?></p>
                </div>
                <div >
                    <h3>Status:</h3>
                    <p id="status"><?php echo ucfirst($cliente['status']) ?></p>
                </div>
            </div>
        <?php endforeach ?>
            

        <div class="ladoDer">
            <div class="rombo1" id="rombo1">
                <div>Solicitud<br>Onboarding</div>
                <i id="check1" class="fas fa-check"></i>
            </div>

            <div class="rombo2" id="rombo2">
                <div>Diligencia Debida<br>al Cliente</div>
                <i id="check2" class="fas fa-check"></i>
            </div>

            <div class="rombo3" id="rombo3">
                <div>Términos<br>Crediticios</div>
                <i id="check3" class="fas fa-check"></i>
            </div>

            <div class="rombo4" id="rombo4">
                <div>Términos<br>Legales</div>
                <i id="check4" class="fas fa-check"></i>
            </div>

            <div class="rombo5" id="rombo5">
                <div>Configuarción<br>en Sistemas</div>
                <i id="check5" class="fas fa-check"></i>
            </div>
            
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="main.js"></script>
</body>
</html>