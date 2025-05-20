<?php

namespace App\Http\Controllers;

use App\Models\modelMigration;
use Illuminate\Http\Request;

class reservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model_migrations = new modelMigration();
        $model_migrations = $model_migrations->all();

        return view('index', compact(['model_migrations']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createView');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model_migration = new modelMigration();
        $model_migration->name = $request->name;
        $model_migration->idade = $request->idade;
        $model_migration->email = $request->email;
        $model_migration->senha = $request->senha;

        $model_migration->save();

        return redirect()->route('model_migrations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "Here";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model_migration = new modelMigration();
        $model_migration = $model_migration->where('id', $id)->first();

        return view('createView', compact(['model_migration']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model_migration = new modelMigration();
        $model_migration = $model_migration->where('id', $id)->first();
        $model_migration->name = $request->name;
        $model_migration->idade = $request->idade;
        $model_migration->email = $request->email;
        $model_migration->senha = $request->senha;

        $model_migration->save();

        return redirect()->route('model_migrations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $model_migration = new modelMigration();
       $model_migration = $model_migration->where('id', $id)->first();
       
       return redirect()->route('model_migrations.index');
    }
}
