@extends('layouts.template')

@section('header')
    
@endsection

@section('main')
    <div class="my-5 row">
        <div class="card m-auto col-5">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <span>ESTADOS</span>
                    <span class="btn btn-outline-success">
                        <a href="{{ route('State.create')}}">
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
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($states as $state)
                            <tr>
                                <td>{{ $state->id }}</td>
                                <td>{{ $state->name }}</td>
                                <td>
                                    <form action="{{ route('State.destroy', $state->id) }}" method="POST">

                                        <a class="mx-1 btn btn-outline-primary" href="{{ route('State.edit', $state->id) }}">
                                            <img width="30px" src="{{ asset('src/icons/edit.svg')}}" alt="">
                                        </a>

                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-outline-danger">
                                            <img width="30px" src="{{ asset('src/icons/delete.svg')}}" alt="">
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
    </div>
@endsection

@section('footer')
    
@endsection