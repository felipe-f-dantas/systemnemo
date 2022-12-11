<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Fonte do Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CDN FontAwesome -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    
    <!-- CSS Nativo -->

    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <div id="login-container">
        <h1>Login</h1>
        <form action="">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu email" autocomplete="off">
            <label for="password">Senha</label>
            <input type="password" name='password' id="password" placeholder="Digite a sua senha">
            <a href="#" id="forgot-pass">Esqueceu a senha?</a>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>