
        
     @extends('layouts.app')
     
     @section('title', 'Grupos')
        
    @section('content')
      
       
        <h1 class="text-center">Grupos</h1>



            <div class="container ">
                <div class="row ">
            
            

                @foreach ( $groups as $group )
                    

                    <x-card 
                    
                    title="{{ $group->title}}" 
                    content="{{ $group->description}}" 
                    link="{{ route ('groups.show', ['group' => $group->id]) }}" 
                    />

                @endforeach
                
                </div>
                @auth()
                <div class="d-flex justify-content-center"><a href="{{ route ('groups.create')}}" type="submit" value="Enviar" class="btn boton-personalizado m-3">Nuevo grupo</a></div>
                @else
                <div class="d-flex justify-content-center mt-4">Sólo los usuarios registrados pueden crear grupos</div>
                
                <div class="d-flex justify-content-center"> Entra <a class="nav-link" href="{{ route('login') }}">&nbsp;{{ __('aquí') }}&nbsp;</a>si ya tienes usuario o crea uno <a class="nav-link" href="{{ route('register') }}">&nbsp;{{ __('nuevo') }}&nbsp;</a></div>
               </div>
                @endauth
                
            </div>
        
      @endsection
