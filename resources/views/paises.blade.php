<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body class="row">
    <div class="col-md-9 mx-auto">
        <h1 class="text-center"> Paises</h1>
    </div>
    <div class="col-md-4 mx-auto justify-content-center mt-5 "> 
        <table class="table border border-info table-hover table-info text-center table-striped">
        <thead>
            <tr>
                <th>Pais</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>Poblacion</th>
                <th>Ciudades</th>
            </tr>
        </thead>
        <tbody>
                @foreach($paises as $nombre => $pais)
                <tr >
                    <td class="" rowspan='{{  count($pais["Ciudades"])  }}'>{{$nombre}}</td>
                    <td rowspan='{{  count($pais["Ciudades"])  }}'>{{$pais["Capital"]}}</td>
                    <td rowspan='{{  count($pais["Ciudades"])  }}'>{{$pais["Moneda"]}}</td>
                    <td rowspan='{{  count($pais["Ciudades"])  }}'>{{$pais["Poblacion"]}}</td>
                    @foreach($pais["Ciudades"] as $Ciudad )
                    <td >{{$Ciudad}}</td>
                    </tr>
                    @endforeach
                
                @endforeach

        </tbody>
        </table>
    </div>

    
</body>

</html>