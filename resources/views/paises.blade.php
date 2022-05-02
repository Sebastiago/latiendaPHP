<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" 
    integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" 
    eferrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <center>
    <h1 class="text-warning mg-"> Paises de la region</h1>
    <table class="table table-dark">
        <thead>
            <tr class="text-success">
                <th scope="col">Paises</th>
                <th scope="col">Capital</th>
                <th scope="col">Moneda</th>
                <th scope="col">Poblacion</th>
                <th scope="col">Ciudades</th>
            </tr>
        </thead>
        <tbody class="text-danger">
            @foreach($paises as $pais => $infopais)
                <tr >
                    <td rowspan="{{count($infopais['ciudades'])}}">
                        {{ $pais }}
                    </td>
                    <td rowspan="{{count($infopais['ciudades'])}}">
                        {{ $infopais["capital"] }}
                    </td>
                    <td rowspan="{{count($infopais['ciudades'])}}">
                        {{ $infopais["moneda"] }}
                    </td>
                    <td rowspan="{{count($infopais['ciudades'])}}">
                        {{ $infopais["poblacion"] }}
                    </td>
                   @foreach($infopais["ciudades"] as $ciudad)
                    
                        <td>{{ $ciudad }}</td>
                    </tr>
                   @endforeach
            @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
    </center>
</body>
</html>