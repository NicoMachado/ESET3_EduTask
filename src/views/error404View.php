<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <link rel="stylesheet" href=<?= HOME_URL . 'assets/css/all.min.css' ?>>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .error-image {
            max-width: 100%;
            height: auto;
        }

        h1 {
            margin-top: 20px;
            font-size: 36px;
        }

        p {
            font-size: 18px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <i class="fa-solid fa-face-sad-tear fa-10x text-primary"></i>
        </div>
        <h1>Error 404</h1>holaddd
        <p>¡Oops! Parece que la página que estás buscando no se encuentra.</p>
        <p>Por favor, verifica la dirección URL o regresa a <a href="/">la página de inicio</a>.</p>
    </div>
</body>

</html>