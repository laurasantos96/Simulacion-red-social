
@extends('layouts.app')

@section('title', 'About us')

@section('content')

  
  <div class="d-flex justify-content-center">
    <x-card title="Nuestra comunidad"  img="{{ asset ('/img/online.png')}}" >
        <x-slot:content>
          <p> Red social de prácticas. <br> Imitando Twitter, pero para tatuadores.</p>

        </x-slot>
        
    </x-card>

  </div>
 <div class="d-flex justify-content-center"> <div class="aboutLetra "><a href="{{ route ('home') }}" class="btn boton-personalizado m-3 accedeMuro">Pincha aquí para volver a 'Home'</a></div></div>
  


@endsection