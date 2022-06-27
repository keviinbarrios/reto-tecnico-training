@extends('layouts.base')

@section('head')
    <meta name="csrf-token" content="{{csrf_token()}}">
@endsection
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
            <select class="form-select" id="type-id">
                @foreach ($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
                
            </select>
        </div>
    </div>

    <!-- Grid de naves -->
    <div class="col-md-10 col-12 py-3" id="naves-grid-container">
        <div class="row justify-content-center nave-grid">
            @foreach ( $naves as $nave )
            <div class="col-md-4 col-sm-12 text-center nave mb-4">
                <img src="/images/uploads/naves/{{$nave->featured}}" class="img-fluid" alt="Norway" style="width:100%; height:100%; object-fit: cover;">
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

@section('js')
    <script>
        document.getElementById('type-id').addEventListener('change',function(e){
            let typeId = e.target.value
            
            /* alert(typeId); */
            submitFilter(typeId)
        })



        function submitFilter(typeId){

            let data = {
                'type_id': typeId
            }

            let url = '/nave/filter'

            fetch(url,{
                headers: {
                    'Content-type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                method: 'POST',
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(result => {
                if(result.success){
                    let container = document.getElementById('naves-grid-container')
                    //vaciar contenedor
                    container.innerHTML ="";

                    let naves = result.naves
                    let newGrid = "";

                    naves.forEach(nave => {
                        newGrid += `<div class="col-md-4 col-sm-12 nave mb-4">
                                    <img src="/images/uploads/naves/${nave['featured']}" class="img-fluid" alt="Norway" style="width:100%; height:100%; object-fit: cover;">
                                    <div class="text-block">
                                    <h4 class="text-block-title">${nave['name']}</h4>
                                    <p class="text-block-p mb-0 fw-400">Tipo: ${nave['type_id']}</p>
                                    <p class="text-block-p mb-0 fw-400">Pais: ${nave['country']}</p>
                                    <p class="text-block-p mb-0 fw-400">Combustible: ${nave['fuel']}</p>
                                    <p class="text-block-p mb-0 fw-400">Tiempo de actividad: ${nave['uptime']}</p>
                                    
                                </div>
                            </div>`
                    });
                    container.innerHTML = newGrid
                }
            })
            .catch(error => console.log(error))
            

        }


    </script>
@endsection