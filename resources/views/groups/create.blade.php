@extends('layouts.app')

@section('title', 'Nuevo grupo')

@section('content')
  

         

        <div class="container">
          <form method="post" action="{{route('groups.store')}}" enctype="multipart/form-data">
              @csrf

              <div class="justify-content-center d-flex text-center">

                <div class="column">
                  <div class="mb-3">
                    <label for="title" class="form-label">Nombre del grupo</label>
                    <input type="text" class="form-control" name="title"  id="title" placeholder="Titulo" value="{{ old('title') }}">
                  </div>

                  <div class="mb-3">
                    <label for="content" class="form-label">Descripción del grupo</label>
                    <textarea class="form-control" name= "content" id="conten" rows="3">{{ old('content') }}</textarea>
                  </div>

                  <div class="mb-3">
                    <label for="img" class="form-label">Imagen</label>
                    <input type="file" name= "img" id="img" placeholder="Selecciona la imagen"></input>
                  </div>

                  <div class="mb-3">
                    @if(isset($errors))
                      @foreach ($errors->all() as $error)
                        <span class="text-danger">
                          {{$error}}
                        </span>
                      @endforeach
                      
                    @endif
                  </div>

                  <div class="d-flex justify-content-center">
                  <div>
                    @auth
                     <button type="submit" value="Enviar" class="btn boton-personalizado m-3">Guardar</button> 
                    @else
                    <div class="d-flex justify-content-center"> Sólo los usuarios registrados pueden crear grupos</div>
                    @endauth
                  </div>
                  
                    
                  
                  <div>
                    
                    <a href="{{ route ('groups.index') }}" class="btn boton-personalizado m-3">Volver</a> 
    
                  </div> </div>

              </div>
            </form>  
              
            
        </div>
            
@endsection