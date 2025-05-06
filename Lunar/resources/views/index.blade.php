@foreach ($model_migrations as $model_migration)
   {{ $model_migration->name }}
    {{ $model_migration->id }}
@endforeach
