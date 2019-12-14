@extends('layouts.template')

@section('main')
<div class="card mx-auto col-10 border-0">
    <div class="card-header">
        <h4>Editar Producto</h4>
    </div>
    <form action="{{ route('Product.update', $product->id) }}" method="POST">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Precio:</label>
                        <input type="number" class="form-control" name="price" value="{{ $product->price }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Pais Origen:</label>
                        <input type="text" class="form-control" name="country_origin"
                            value="{{ $product->country_origin }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="section_id">Seccion:</label>
                        <select name="section_id" class="form-control" id="">
                            <option value="">Seleccione...</option>
                            @foreach ($sections as $section)
                            <option @if ($section->id == $product->section_id) {{ 'selected' }} @endif
                                value="{{ $section->id }}">
                                {{ $section->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="state_id">Estado:</label>
                        <select name="state_id" class="form-control" id="">
                            <option value="">Seleccione...</option>
                            @foreach ($states as $state)
                            <option @if ($state->id == $product->state_id) {{ 'selected' }} @endif
                                value="{{ $state->id }}">
                                {{ $state->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
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