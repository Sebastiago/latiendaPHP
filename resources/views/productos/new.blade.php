@extends('layouts.menu')

@section('contenido')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="row">
        <h1 class="cyan-text text darken-4">Nuevo producto:</h1>
</div>
<div class="row">
    <form action="{{ route('productos.store') }}" method="POST" class="col s8" enctype="multipart/form-data" >
        @csrf
        <div class="row">
            <div class="col s8 input-field">
                <input type="text" id="nombre" name="nombre">
                <label for="nombre">nombre de producto</label>
            </div>
        </div>
        <div class="row">
            <div class="col s8 input-field">
                <textarea id="descripcion" name="descripcion" class="materialize-textarea"></textarea>
                <label for="descripcion">descripcion</label>
            </div>
        </div>
        <div class="row">
            <div class="col s8 input-field">
                <input type="text" id="precio" name="precio">
                <label for="precio">precio</label>
            </div>
        </div>
        <div class="row">
            <div class="col s8 file-field input-field">
                <div class="btn darken-3">
                    <span>Imagen de producto...</span>
                    <input type="file" name="imagen">
                </div>
                <div class="file-path-wrapper">
                    <input type="text" class="file-path">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s8 input-field">
                <select name=marca id="marca">
                @foreach($marcas as $marca)
                <option value=" {{ $marca->id }}">{{ $marca->nombre }}</option>
                @endforeach
                </select>
                <label>Selccione Marca</label>
            </div>
        </div>
        <div class="row">
            <div class="col s8 input-field">
                <select name=categoria id="categoria">
                @foreach($categorias as $categoria)
                <option value=" {{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
                </select>
                <label>Selccione Categoria</label>
            </div>
        </div>
        <div class="row">
            <button class="btn waves-effect waves-light" type="submit" name="action">Guardar Producto
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>
@endsection