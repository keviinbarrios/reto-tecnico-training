@extends('adminlte::page')

@section('title', 'Admin naves')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Listado de naves <a href="{{-- {{route('admin.create')}} --}}" class="btn btn-sm btn-primary">Crear</a>
                </div>
            </div>
            <div class="card-body">
                <table id="naves" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>nombre</th>
                            <th>Imagen</th>
                            <th>pais</th>
                            <th>combustible</th>
                            <th>tiempo de actividad</th>
                            <th>Categoria</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($naves as $nave)
                        <tr>
                            <td>{{$nave->name}}</td>
                            <td><img src="{{-- {{asset('images/uploads/naves/'.$naves->featured)}} --}}" alt="" width="120"> </td>
                            <td>{{$nave->country}}</td>
                            <td>{{$nave->fuel}}</td>
                            <td>{{$nave->uptime}}</td>
                            <td>{{$nave->type->name}}</td>
                             <td>
                                <a href="" class="btn btn-warning">Editar</a>
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                        
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>nombre</th>
                            <th>Imagen</th>
                            <th>pais</th>
                            <th>combustible</th>
                            <th>tiempo de actividad</th>
                            <th>Categoria</th>
                            
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
@stop

@section('js')
<script>
$(document).ready(function () {
    $('#naves').DataTable();
});
</script>
@stop