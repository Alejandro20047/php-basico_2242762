<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:#020704;">
</body>

    <h1><span class="text-warning">Lista de paises</span></h1>
    <table class="table table-hover">
        <tr>
            <th><span class="text-danger">Nombre</span></th>
            <th><span class="text-danger">Capital</span></th>
            <th><span class="text-danger">Moneda</span></th>
            <th><span class="text-danger">Poblacion</span></th>

        </tr>
    
        @foreach($naciones as $nombre => $nacion)
            <tr>
                <td><span class="text-info">{{  $nombre }}</span> </td>
                <td><span class="text-info">{{  $nacion ["capital"] }}</span> </td>
                <td><span class="text-info">{{  $nacion ["moneda"] }}</span> </td>
                <td><span class="text-info">{{  $nacion ["poblacion"] }}</span> </td>
            </tr>
        @endforeach

    </table>
</body>
</html>