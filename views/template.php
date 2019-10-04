<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Cargando los estilos css de la página -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./css/custom.css">

    <!-- Se termina de cargar los estilos css de la página -->

    <title>My aplicación en php</title>
</head>
<body>
    <?php
        #Incluyendo la navegación a la página
        include "./views/modules/navbar.php";

        #Pidiendo al controlador la vista a mostrar
        $urlView = Controller::getViews();
        include $urlView;

        #Incluyendo el footer a la página
        include "./views/modules/footer.php";
    ?>

    <!-- Cargando el js de la página -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="./js/iniciarComponentes/app.js"></script>
    <script src="./js/functions/functions.js"></script>

    <!-- Se termina de cargar el js de la página -->
</body>
</html>
