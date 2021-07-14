@extends('layouts.baseTemplate')

@section('content')

    <h2>Questè il contenuto di HOME</h2>
    
    <div class="container-cards">

        @foreach ($moviesArray as $item)
        <div class="card">
            <ul>
                <li>{{ $item["title"] }}</li>
                <li>{{ $item["original_title"] }}</li>
                <li>{{ $item["nationality"] }}</li>
            </ul>
        </div>
        @endforeach
    </div>

@endsection