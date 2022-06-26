@extends('layouts.base')


@section('content')
<main class="row justify-content-center">

    

    <!-- Filtro -->
    <div class="d-flex justify-content-center">
        <div class="col-auto lead m-1">
            <span id="passwordHelpInline" class="form-text text-white fw-light">
                <i class="fas fa-filter"></i>
                Filtrar por Tipo de nave
            </span>
        </div>
        <div class="col-auto m-1">
            <select class="form-select">
                @foreach ($types as $type)
                    <option>{{$type->name}}</option>
                @endforeach
                
            </select>
        </div>
    </div>

    <!-- Grid de naves -->
    <div class="col-md-10 col-12 py-3">
        <div class="row justify-content-center events-grid">
            @foreach ( $naves as $nave )
            <div class="col-md-4 col-sm-12 text-center event mb-4">
                <img src="https://source.unsplash.com/1280x720/?Development Conferences" class="img-fluid" alt="Norway" style="width:100%; height:100%; object-fit: cover;">
                <div class="text-block">
                    <h4 class="text-block-title">{{$nave->name}}</h4>
                    <p class="text-block-p mb-0 fw-400">Tipo: {{$nave->type->name}}</p>
                    <p class="text-block-p mb-0 fw-400">Pais: {{$nave->country}}</p>
                    <p class="text-block-p mb-0 fw-400">Combustible: {{$nave->fuel}}</p>
                    <p class="text-block-p mb-0 fw-400">Tiempo de actividad: {{$nave->uptime}}</p>
                    
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</main>
@endsection