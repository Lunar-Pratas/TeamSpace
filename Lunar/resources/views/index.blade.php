@foreach ($model_migrations as $model_migration)
    <a href="{{ route('model_migrations.edit', ['model_migration' => $model_migration->id]) }}">{{ $model_migration->name }}</a>
    <form action="{{ route('model_migrations.destroy', ['model_migration' => $model_migration->id]) }}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="Apagar" />
    </form>
@endforeach

<a href="{{ route('model_migrations.create') }}">Adicionar Novo</a>