@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach($trains as $train)
            <li>{{$train}}</li>
             
            @endforeach

        </ul>

    </div>
@endsection
