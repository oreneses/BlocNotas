@extends('layout')
@section('title', $note->title)
@section('content')
<div class="container">
    <h1 class="mb-5 display-4 px-2">{{$note->title}}</h1>
    <div class="row">
        <div class="bg-white p-1 shadow rounded">
            <p class="text-secondary">{{$note->text}}</p>
            <p class="text-black-50 mt-3">Fecha: {{ date('d-m-Y', strtotime($note->creation_date)) }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group btn-group-sm">
                    <a class="btn" href="{{route('notes.home')}}">Volver</a>
                </div>
                <form id="delete-project" clas="d-none" action="{{route('notes.delete', $note)}}" method="post">
                    @csrf @method('DELETE') 
                    <a class="btn p-2" href="{{ route('notes.edit', $note) }}">Editar</a>
                    <button class="btn p-2">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection