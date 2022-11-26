

    <style type="text/css">

        .marco{
            width: 400px;
            margin:auto;
            background-color:  #e2c7f1;
            color:  #8d0052c7 ;

        }
        h1{
            font-weight: bolder; 
        }
        
            @media only screen and (max-width: 600){
                .marco{
                    width: 90%;
                }
            }

            @media only screen and (max-width: 900px){
                .marco{
                    width: 800px;
                }
            }


    </style>
    <div class="marco">
        <h1> Consulta realizada desde la web por {{ $name }}</h1>
        <p>{{ $description }}</p>

    </div>