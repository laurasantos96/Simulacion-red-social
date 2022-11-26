
        
     @extends('layouts.app')
     
     @section('title', 'Muro')
        
    @section('content')
      
       
      



            <div class="container ">
                <div class="row ">
            
            

                @foreach ( $posts as $post )
                    

                    <x-card 
                    
                    title="{{ $post->title}}" 
                    content="{{ $post->content}}" 
                    link="{{ route ('post', ['post' => $post->id]) }}" 
                    img="{{$post->img}}"
                    />

                @endforeach
                
                </div>
                @auth()
                <div class="d-flex justify-content-center"><a href="{{ route ('newpost')}}" type="submit" value="Enviar" class="btn boton-personalizado m-3">Nuevo post</a></div>
                @else
                <div class="d-flex justify-content-center mt-4">Sólo los usuarios registrados pueden publicar</div>
                
                <div class="d-flex justify-content-center"> Entra <a class="nav-link" href="{{ route('login') }}">&nbsp;{{ __('aquí') }}&nbsp;</a>si ya tienes usuario o crea uno <a class="nav-link" href="{{ route('register') }}">&nbsp;{{ __('nuevo') }}&nbsp;</a></div>
               </div>
                @endauth
                
            </div>
        
      @endsection




    
    
