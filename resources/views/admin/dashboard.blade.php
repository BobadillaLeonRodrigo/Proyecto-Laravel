@extends('layouts.master')
@section('title')
Alumnos
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Tabla Alumnos</h4>
            </div>

            <div class="card-header">
                <h4 class="card-title">Alumnos
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>
                </h4>
                <br>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
            </div>

<!-- Correciones del Dashboard para agregarlo por ahora sera desactivado de master.blade.php -->


            <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                        <thead class=" text-primary">
                            <th> id </th>
                            <th> Alumnos </th>
                            <th> Matricula </th>
                            <th> edad </th>
                            <th> grupo </th>
                            <th> email </th>
                            <th> EDIT </th>
                            <th> DELETE </th>
                        </thead>

                        <tbody>
                            

                            <tr>
                                <td> {{$data->id}} </td>
                                <td> {{$data->Nombre_Alumno}} </td>
                                <td>{{$data->matricula}} </td>
                                <td> {{$data->edad}} </td>
                                <td> {{$data->grupo}} </td>
                                <td> {{$data->email}} </td>

                                <td>
                                    <a href="{{ url('alumnos-us/'.$data->id)}}" class="btn btn-success"> EDIT </a>
                                </td>

                                <td>
                                    <form action="{{url('alumnos-us-delete/'.$data->id)}}" method="POST">

                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger"> DELETE </button>

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
</div>
@endsection
@section('scripts')
@endsection