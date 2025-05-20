<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário CREATE</title>
    @vite(['resources/css/formula.css'])
</head>
<body>
    <header class="cabecalho">
        <img src="https://cdn-icons-png.flaticon.com/512/679/679720.png" alt="ícone de caixa" class="icone">
        <h1>Formulário</h1>
    </header>

    <main class="formulario-container">
        <form action="{{ isset($model_migration) ? 
            route('model_migrations.update', ['model_migration' => $model_migration->id]) : 
            route('model_migrations.store') }}" method="POST">
            
            @isset($model_migration) 
                @method('PUT')
            @endisset
            @csrf

            <label for="name">
                Nome:
                <input type="text" name="name" value="{{ $model_migration->name ?? '' }}" placeholder="Digite seu nome..." required >
            </label>

            <label for="idade">
                Idade:
                <input type="number" name="idade" value="{{ $model_migration->idade ?? '' }}" placeholder="Digite sua idade..." required>
            </label>    

            <label for="email">
                Email:
                <input type="email" name="email" value="{{ $model_migration->email ?? '' }}" placeholder="Digite seu email..." required> 
            </label>

            <label for="senha">
                Senha:
                <input type="password" name="senha" value="{{ $model_migration->senha ?? '' }}" placeholder="Digite sua senha..." required>
            </label>

            <div class="botoes">
                <input type="submit" value="Enviar formulário" />
                <input type="reset" value="Limpar formulário" />
            </div>
        </form>
    </main>
</body>
</html>
