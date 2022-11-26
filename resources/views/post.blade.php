@extends('layouts.app')

@section('title', 'Ver post')

@section('content')
  

         

            <div class="container">
              
              <div class="justify-content-center d-flex text-center">
                    <x-card title="{{ $post->title}}" content="{{ $post->content}}" img="{{$post->img}}" />
      
                
              </div>


              <div class="justify-content-center d-flex text-center">
                <script>
                    function confirmarEnvio (){

                      return (confirm ('¿Estás seguro de que deseas eliminarlo?'));
                      
                    }
                </script>

               <form method="post" action="{{route ('deletepost', ['post' => $post->id])}}" onsubmit="confirmarEnvio()" >
                  @csrf
                  <input type="hidden" name="id" value="{{$post->id}}">
                  <div><button type="submit" class="btn btn-danger boton-personalizado m-3"> Eliminar</button></div>

               <!--<div><a href="{{ route ('editpost', ['post' => $post->id]) }}" class="btn btn-danger boton-personalizado m-3">Borrar</a>
                </div>-->
              </form> 


                <div><a href="{{ route ('editpost', ['post' => $post->id]) }}" class="btn btn-success boton-personalizado m-3">Editar</a></div>

                <a href="{{ route ('wall') }}" class="btn boton-personalizado m-3">Volver</a>

              </div>
       
            </div>
            
@endsection
          
