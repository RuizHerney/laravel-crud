@extends('layouts.template')


@section('main')
<div class="card mx-auto col-md-6 border-0">
    <div class="card-header">
        <h4>Agregar Estado</h4>
    </div>
    <form action="{{ route('State.store') }}" method="POST">

        <div class="card-body">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="">
            </div>
            @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
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