<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Migration Seeder</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

            <main>
                  <div class="container">
                        <div class="row">

                              @foreach ($trains as $train)
                                    <div class="col-3 text-center">
                                          <div class="card mt-3 mb-3 bg-info">
                                                <div class="card-body">
                                                      <div class="card-header fw-bold bg-primary">
                                                            {{ $train['codice_treno'] }}
                                                      </div>
                                                      <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">{{ $train['azienda'] }}</li>
                                                            <li class="list-group-item">Partenza da: {{ $train['stazione_partenza'] }}</li>
                                                            <li class="list-group-item">Arrivo a: {{ $train['stazione_arrivo'] }}</li>
                                                            <li class="list-group-item">Da ora: {{ $train['orario_partenza'] }}</li>
                                                            <li class="list-group-item">A ora: {{ $train['orario_arrivo'] }}</li>
                                                            <li class="list-group-item">N. carrozze: {{ $train['n_carrozze'] }}</li>
                                                            <li class="list-group-item">{{ $train['in_orario'] }}</li>
                                                            <li class="list-group-item">{{ $train['cancellato'] }}</li>
                                                      </ul>
                                                </div>
                                          </div>                                          
                                    </div>
                              @endforeach

                        </div>
                  </div>
            </main>

    </body>
</html>
