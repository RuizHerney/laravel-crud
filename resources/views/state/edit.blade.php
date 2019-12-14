@extends('layouts.template')


@section('main')
    <div class="card mx-auto col-md-6 border-0">
        <div class="card-header">
            <h4>Editar Estado</h4>
        </div>
        <form action="{{ route('State.update', $state->id) }}" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" class="form-control" id="" value="{{ $state->name }}">
                </div>
            </div>
            @csrf
            @method('PUT')
            <div class="card-footer">
                <div class="text-right">
                    <button class="btn btn-primary">Editar</button>
                </div>
            </div>
        </form>
    </div>
@endsection