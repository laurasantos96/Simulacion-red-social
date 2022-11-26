<div class="card cardwall col-md-4 d-flex align-items-strech text-center">
    <div class="card p-2 m-2">
        @isset($img)
        @if ($img !='')
            
            <img src="{{ $img }}" class="card-img-top" alt="{{ $title }}">

        @endif
        
        @endisset
        
        <div class="card-body cardwall">
          <h5 class="card-title">{{ $title }}</h5>
          <p class="card-text">{{ $content }}</p>
        </div>
        @isset($link)
            <a href="{{ $link }}" class="btn boton-personalizado m-3">Ver detalle</a>
        @endisset

    </div>
</div>