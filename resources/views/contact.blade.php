
@extends('layouts.app')

@section('title', 'Contact')

@section('content')

  
  
  <form class = "mt-5" action="" method="post"> 
    @csrf 
    <div class="container-sm">
        <div class="mb-3">
          <label for="name" for="exampleFormControlInput1" class="form-label">Tu nombre</label>
          <input type="text" class="form-control" name="name"  id="name" placeholder="Nombre">
        </div>
        <div class="mb-3">
          <label for="email" for="exampleFormControlInput1" class="form-label">Tu email</label>
          <input type="email" class="form-control" name= "email" id="email" placeholder="nombre@gmail.com">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Tu consulta</label>
          <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <div class="d-flex justify-content-center"><button type="submit" value="Enviar" class="btn boton-personalizado m-3">Enviar</button></div>
        
    </div>

  </form>

  @if ($codigo = Session::get('code'))
    <div id="confirmMessage" class="bg-white text-success border border-success p-2 flash">
        {{$codigo}} - {{ Session::get ('message')}}
    </div>
  @endif

@endsection