<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LogisTock</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <header>
    <div class="logo">LOGISTOCK</div>
    <nav>
      <a href="{{ route('model_migrations.store') }}">CADASTRE-SE</a>
      <a href="#">LISTA USERS</a>
      <a href="#">SOBRE NÓS</a>
      <a href="#">BENEFÍCIOS</a>
    </nav>
  </header>

  <div class="container">
  <img src="{{ asset('logo.png') }}" alt="">
    <div class="content">
      <h1>Transforme a gestão do seu estoque em um processo simples e eficiente.<br>Deixe-nos ajudar a otimizar seu negócio!</h1>
      <p>A LogisTock oferece soluções práticas e eficientes para gestão de estoque.</p>
      <button class="btn"><a href="{{ route('site.create') }}">VENHA CONHECER NOSSOS SERVIÇOS</a></button>
    </div>
  </div>

</body>
</html>