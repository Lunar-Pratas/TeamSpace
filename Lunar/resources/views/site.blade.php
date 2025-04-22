<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lunar</title>
  @vite(['resources/css/estilo.css', 'resources/js/script.js'])

</head>
<body>
  <header>
    <div class="logo">Lunar🌙</div>
    <nav>
      <a href="#">Minha Loja</a>
      <a href="#">Categorias</a>
    </nav>
  </header>

  <hr class="divider" />

  <main>
    <div class="menu-categorias">
      <button class="ativo">Anéis</button>
      <button>Brincos</button>
      <button>Colares</button>
      <button>Pulseiras</button>
      <button>Tornozeleiras</button>
      <button>+</button>
    </div>

    <section class="conteudo">
      <aside class="lista-produtos">
        <div class="produto" onclick="mostrarDetalhes()">
        <img src="{{ asset('coracao.webp') }}" alt="">
          <div class="info">
            <p><strong>Anel Life Coração</strong><br>Prata 925</p>
            <p>R$126,80</p>
          </div>
        </div>
      </aside>

      <div class="detalhes-produto" id="detalhes">
      <img src="{{ asset('coracao.webp') }}" alt="">
        <div>
          <h2>Anel Life Coração</h2>
          <ul>
            <li>Cód: AL00061000</li>
            <li>Coleção: Anéis</li>
            <li>Largura aprox.: 1,8 mm</li>
            <li>Material: Prata</li>
          </ul>
          <p id="estoque">Quantidade em estoque: xji</p>
        </div>
      </div>
    </section>
  </main>


</body>
</html>
