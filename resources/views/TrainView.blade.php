<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-migration-seeder</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <main>
        <div class="train-container">
            @foreach ($trains as $train)
            <div class="train-box">
                <div class="train-category">
                    <strong>Nome Azienda:</strong>
                    <span>{{ $train->nome_azienda }}</span>
                </div>
                <div class="train-category">
                    <strong>Stazione di Partenza</strong>
                    <span>{{ $train->stazione_di_partenza }}</span>
                </div>
                <div class="train-category">
                    <strong>Stazione di Arrivo</strong>
                    <span>{{ $train->stazione_di_arrivo }}</span>
                </div>
                <div class="train-category">
                    <strong>Orario di Partenza</strong>
                    <span>{{ $train->orario_di_partenza }}</span>
                </div>
                <div class="train-category">
                    <strong>Orario di arrivo</strong>
                    <span>{{ $train->orario_di_arrivo }}</span>
                </div>
                <div class="train-category">
                    <strong>Codice Treno</strong>
                    <span>{{ $train->codice_treno }}</span>
                </div>
                <div class="train-category">
                    <strong>Numero di Carrozze</strong>
                    <span>{{ $train->numero_tarrozze }}</span>
                </div>
                <div class="train-category">
                    <strong>In orario</strong>
                    @if ($train->in_orario == '1')
                        <span>Si</span>
                    @else {{-- ($train->in_orario == '0') --}}
                        <span>No</span>
                    @endif
                </div>
                <div class="train-category">
                    <strong>Cancellato</strong>
                    @if ($train->cancellato == '1')
                        <span>Si</span>
                    @else   {{-- ($train->cancellato == '0') --}}
                        <span>No</span>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </main>
</body>
</html>