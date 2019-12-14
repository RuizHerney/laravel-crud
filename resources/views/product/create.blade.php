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
                        <input type="text" class="form-control" name="name" value="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Precio:</label>
                        <input type="number" class="form-control" name="price" value="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Pais Origen:</label>
                        <input type="text" class="form-control" name="country_origin" value="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="section_id">Seccion:</label>
                        <select name="section_id" class="form-control" id="">
                            <option value="">Seleccione...</option>
                            @foreach ($sections as $section)
                            <option value="{{ $section->id }}">
                                {{ $section->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
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