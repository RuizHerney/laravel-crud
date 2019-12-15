@extends('layouts.template')

@section('main')
<div class="card mx-auto col-md-6 border-0">
    <div class="card-header">
        <h4>Editar Seccion</h4>
    </div>
    <form action="{{ route('Section.update', $section->id) }}" method="POST">

        <div class="card-body">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control @error('name') ins-invalid @enderror" id="" value="{{ $section->name }}">
            </div>
            @error('name')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
            @enderror
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