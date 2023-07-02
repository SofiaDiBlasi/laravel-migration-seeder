@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row g-4">
        <div class="col">
            <div>
                @foreach ($Trains as $Train)
                    <div class="card">
                        <p>{{ $Train->azienda}}</p>
                        <p>{{ $Train->stazione_di_partenza}}</p>
                        <p>{{ $Train->stazione_di_arrivo}}</p>
                        <p>{{ $Train->orario_di_partenza}}</p>
                        <p>{{ $Train->orario_di_arrivo}}</p>
                        <p>{{ $Train->codice_treno}}</p>
                        <p>{{ $Train->numero_carrozze}}</p>
                        <?php if($Train->in_orario){ ?>
                            <p>In orario</p>
                        <?php } else {?>
                            <p>In ritardo</p>
                        <?php } ?>
                        <?php if($Train->cancellato){ ?>
                            <p>Cancellato</p>
                        <?php } else {?>
                            <p>Non cancellato</p>
                        <?php } ?>
                    </div>
                 @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
