<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNoteRequest;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{

    // Mostramos listado de notas
    public function index(){
        $notes = Note::orderBy('creation_date', 'desc')->simplePaginate(6);
        return view('notes.home', compact('notes'));
    }

    // Mostramos los detalles de la nota seleccionada
    public function show(Note $note){
        return view('notes.show', ['note'=>$note]);
    }

    // Creamos notas
    public function create(){
        return view('notes.create');
    }

    // Almacenamos notas
    public function store(CreateNoteRequest $request){
        Note::create($request->validated());
        return redirect()->route('notes.home');
    }

    // Editamos notas
    public function edit(Note $note){
        return view('notes.edit', ['note' => $note]);
    }

    // Actualizamos notas
    public function update(Note $note, CreateNoteRequest $request){
        $note->update($request->validated());
        return redirect()->route('notes.home');;
    }

    // Eliminamos notas
    public function delete(Note $note){
        $note->delete();
        return redirect()->route('notes.home');
    }
}
