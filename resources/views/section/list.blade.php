@extends('layouts.template')

@section('header')

@endsection

@section('main')
<div class="card m-auto col-5 border-0">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <span>SECCIONES</span>
            <span class="btn btn-outline-success">
                <a href="{{ route('Section.create')}}">
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
                    @foreach ($sectins as $section)
                    <tr>
                        <td>{{ $section->id }}</td>
                        <td>{{ $section->name }}</td>
                        <td>
                            <form action="{{ route('Section.destroy', $section->id) }}" method="POST">

                                <a class="mx-1 btn btn-outline-primary"
                                    href="{{ route('Section.edit', $section->id) }}">
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
@endsection

@section('footer')

@endsection