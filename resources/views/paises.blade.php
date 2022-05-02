<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paises</title>
</head>
<body>
    <h1>Paises de la region</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-primary">Pais</th>
                <th class="text-secundary">Capital</th>
                <th class="text-danger">Moneda</th>
                <th class=>Poblacion</th>
                <th>Ciudades</th>
            </tr>
        </thead>
    <tbody>
            @foreach($paises as $pais => $infopais)
                <tr>
                    <td rowspan="{{ count($infopais['ciu'] }}"  >{{  $pais  }}</td>
                    <td rowspan="{{ count($infopais['ciu'] }}"  >{{  $infopais["cap"]  }}</td>
                    <td rowspan="{{ count($infopais['ciu'] }}"  >{{  $infopais["mon"]  }}</td>
                    <td rowspan="{{ count($infopais['ciu'] }}"  >{{  $infopais["pob"]  }}
                         millones hab.
                    </td>
                    @foreach($infopais["ciu"] as $ciudad)
                    <td>
                        {{ $ciudad }}
                    </td>
                    </tr>
                    @endforeach

                 @endforeach
            </tr>
        </tbody>
    </table
</body>
</html>