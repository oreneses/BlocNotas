@extends('layout')
@section('title', 'Crear nota')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mx-auto">
            <form class="bg-white shadow rounded p-3" method="POST" action="{{ route('notes.store') }}">
                @csrf
                <h1 class="display-6 mb-4">Crear nota:</h1>
                <div class="form-group">
                    <label class="px-2 py-2" for="title"> Título </label>
                        <input class="form-control bg-light shadow-sm @error('title') is-invalid @else border-1 @enderror"
                            type="text" 
                            name="title" 
                            id="title"
                            value="{{ old('title')}}"
                            placeholder="Título de la nota"><br>
                            {!! $errors->first('title', '<small style="color:red">:message</small><br>') !!}
                <div>
                <br>
                <div class="form-group">
                    <label class="px-2 py-2" for="text"> Descripción de la nota </label><br>
                        <textarea class="form-control bg-light shadow-sm @error('text') is-invalid @else border-1 @enderror"
                            type="textarea" 
                            name="text"
                            value="{{ old('text')}}"
                            placeholder="Escribe aquí la descripción de la nota"></textarea><br>
                            {!! $errors->first('text', '<small style="color:red">:message</small><br>') !!}
                <div>
                    <br>
                <div class="form-group" style="margin-top: 15px">
                    <button class="btn btn-lg btn-block py-1" style="background-color: #38B2AC; color:white"> Guardar </button>
                    <a class="btn btn-lg btn-block py-1" href="{{route('notes.home')}}" style="background-color: #38B2AC; color:white">Cancelar</a>
                </div>

                <div class="form-group d-none">
                    <input type="text" name="creation_date" id="creation_date" value="{{ now() }}">
                <div>
            </form>
        </div>
    </div>
</div>
@endsection