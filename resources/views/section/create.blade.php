@extends('layouts.template')

@section('main')
<div class="card mx-auto col-md-6 border-0">
    <div class="card-header">
        <h4>Agregar Seccion</h4>
    </div>
    <form action="{{ route('Section.store') }}" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" id="">
            </div>
        </div>
        @csrf
        @method('POST')
        <div class="card-footer">
            <div class="text-right">
                <button class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
</div>
@endsection