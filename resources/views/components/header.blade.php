<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="/style/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>VideoFriren</title>


</head>

<body>

 <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img src="/img/logo.png" style="width: 50px; height:50px; margin-left: 40px; border-radius:50%;">
        <h2 style="padding-left:20px; color:#263248;">ВидеоФрирен</h2>
      </a>
  @auth
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link px-2 link-secondary">Главная</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Видео</a></li>
        <li><a href="/addVideo" class="nav-link px-2 link-dark">Добавить видео +</a></li>
      </ul>

  <div class="col-md-3 text-end">
        <a href="/personalVideo" class="btn btn-outline-primary me-2 button_reg">Мои видео</a>
        <a href="/signout" class="btn btn-primary button_auth"  style="margin-right: 40px;">Выйти</a>
      </div>
      @endauth

        @guest
      <div class="col-md-3 text-end">
        <a href="/auth" class="btn btn-outline-primary me-2 button_reg">Вход</a>
        <a href="/register" class="btn btn-primary button_auth"  style="margin-right: 40px;">Регистрация</a>
      </div>
      @endguest
    </header>


