@extends('layouts.template')

@section('main')
<div class="card mx-auto col-10 border-0">
    <div class="card-header">
        <h4>Agregar Producto</h4>
    </div>
    <form action="{{ route('Product.store') }}" method="POST">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Precio:</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="">
                    </div>
                    @error('price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Pais Origen:</label>
                        <input type="text" class="form-control @error('country_origin') is-invalid @enderror" name="country_origin" value="">
                    </div>
                    @error('country_origin')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="section_id">Seccion:</label>
                        <select name="section_id" class="form-control @error('section_id') is-invalid @enderror" id="">
                            <option value="">Seleccione...</option>
                            @foreach ($sections as $section)
                            <option value="{{ $section->id }}">
                                {{ $section->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    @error('section_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
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