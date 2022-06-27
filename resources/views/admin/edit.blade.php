@extends('adminlte::page')

@section('title', 'Admin Editar naves')

@section('content_header')
<h1> Editar naves</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">

                    <a href="{{route('admin.naves')}}" class="btn btn-info">Volver</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('admin.update',$nave)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="category">TIPOS DE NAVES</label>
                            <select  class="form-control"  name="type_id" id="type_id" >
                                @foreach ($types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">NOMBRE</label>
                            <input type="text" value="{{$nave->name}}" class="form-control" name="name" id="name"
                                placeholder="ingrese el nombre de la nave">
                        </div>
                        
                        <div class="form-group">
                            <label for="country">PAIS</label>
                            <input type="text" value="{{$nave->country}}" name="country" placeholder="Ingrese el pais de la nave" class="form-control" id="country">
                        </div>
                        <div class="form-group">
                            <label for="">TIEMPO DE ACTIVIDAD</label>
                            <input type="text" value="{{$nave->uptime}}" class="form-control" name="uptime" id="uptime"
                                placeholder=" ingrese el tiempo de actividad">
                        </div>
                        <div class="form-group">
                            <label for="">COMBUSTIBLE</label>
                            <input type="text" class="form-control" value="{{$nave->fuel}}" name="fuel" id="fuel"
                                placeholder="ingrese el combustible">
                        </div>
                        <div class="form-group">
                            <label for="featured">IMAGEN</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="featured" class="custom-file-input" id="featured">
                                    <label class="custom-file-label" for="featured">Elegir archivo</label>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop
