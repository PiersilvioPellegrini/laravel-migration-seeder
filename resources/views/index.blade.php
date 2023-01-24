@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @foreach ($trains as $train)
                <div class="card m-5 p-3">
                    <ul>
                        <li>{{ $train->azienda }}</li>
                        <li>{{ $train->stazione_di_arrivo }}</li>
                        <li>{{ $train->stazione_di_partenza }}</li>
                        <li>{{ $train->orario_di_partenza }}</li>
                        <li>{{ $train->orario_di_orario }}</li>
                    </ul>
                </div>
            @endforeach
        </div>

    </div>
@endsection
