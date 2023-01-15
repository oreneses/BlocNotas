@extends('layout')
@section('title', 'Home')
@section('content')

<div class="contentNotes">
    <div class="text-center py-1">
        <h3 class="py-4">LISTADO DE NOTAS</h3>
        <a class="btn btn-primary border-0 mb-4" style="background-color: #38B2AC" href="{{route('notes.create')}}">
            Crear nota
        </a><br>
    </div>
    <hr>
    <div class="row align-items-center">
        @forelse ($notes as $note)
        <div class="col-lg-6 col-xxl-4 mb-5">
            <div class="card bg-light border-0 h-100">
                <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-bootstrap"></i></div>
                    <h2 class="fs-4 fw-bold">{{$note->title}}</h2>
                    <p class="mb-0">{{$note->text}}</p>
                    <br>
                    <a href="{{route('notes.show', $note->id)}}" class="btn" style="background-color: #38B2AC; color:white">Ir al detalle</a>
                </div>
            </div>
        </div>
        @empty
        <p>No se ha creado ninguna nota</p>
        @endforelse
    </div>
    <hr>
</div>
<div class="text-center">
    {{ $notes->links()}}
</div>
@endsection