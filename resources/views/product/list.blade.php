@extends('layouts.template')

@section('main')
        <div class="card m-auto col-10 border-0">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <span>PRODUCTOS</span>
                    <span class="btn btn-outline-success">
                        <a href="{{ route('Product.create')}}">
                            <img width="30px" src="{{ asset('src/icons/add.svg') }}" alt="">
                        </a>
                    </span>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Pais origen</th>
                                <th>Seccion</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->country_origin }}</td>
                                <td>{{ $product->section }}</td>
                                <td>{{ $product->state }}</td>
                                <td>
                                    <form action="{{ route('Product.destroy', $product->id) }}" method="POST">

                                        <a class="mx-1 btn btn-outline-primary" href="{{ route('Product.edit', $product->id) }}">
                                            <img width="30px" src="{{ asset('src/icons/edit.svg')}}" alt="">
                                        </a>
                                        
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-outline-danger">
                                            <img width="30px" src="{{ asset('src/icons/edit.svg')}}" alt="">
                                        </button>
                                   </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection