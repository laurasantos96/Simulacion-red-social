@extends('layouts.app')

@section('title', 'Ver grupo')

@section('content')
  

         

            <div class="container">
                 
                <div class="justify-content-center d-flex text-center">
                    <x-card title="{{ $group->title}}" content="{{ $group->description}}" img="{{$group->img}}" />
  
            
                </div>

              
               <div class="justify-content-center d-flex text-center">
                <script>
                    function confirmarEnvio (){

                      return (confirm ('¿Estás seguro de que deseas eliminarlo?'));
                      
                    }
                </script>

               <form method="post" action="{{route ('groups.destroy', ['group' => $group])}}" onsubmit="confirmarEnvio()" >
                  @csrf
                  <!--<input type="hidden" name="id" value="">-->
                  <div><button type="submit" class="btn btn-danger boton-personalizado m-3"> Eliminar</button></div>

               <!--<div><a href=" class="btn btn-danger boton-personalizado m-3">Borrar</a>
                </div>-->
              </form> 


                <div><a href="{{ route ('groups.edit', ['group' => $group]) }}" class="btn btn-success boton-personalizado m-3">Editar</a></div>

                <a href="{{ route ('groups.index') }}" class="btn boton-personalizado m-3">Volver</a>

              </div>
       
            </div>
            
@endsection
          
