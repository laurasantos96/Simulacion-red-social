
@extends('layouts.app')

@section('title', 'Home')

@section('content')

  
 <div class="d-flex justify-content-center imgprincipal"> <img style="margin-top: 40px" src='img/palette.png' class="imagenpeople" id="imgmuro" aria-describedby="tooltip" alt=""></div>

    
      <div class="d-flex justify-content-center"><a href="{{ route ('wall') }}" class="btn boton-personalizado m-3 accedeMuro">Pincha aquí para acceder al 'Muro'</a></div>

   
    
    
  </div> 
  
  

  
@endsection