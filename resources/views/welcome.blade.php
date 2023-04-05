@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <h2>
            Fumetti
            <!-- @dump($page_title) -->
        </h2>
    </div>
    <div class="container">
        <div class="row">
           <!-- @dump($array_comics) -->
           @foreach ($array_comics as $comic)

                <div class="col-4">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <h3>{{ $comic['title'] }}</h3>
                </div>
            
            @endforeach
        </div>
    </div>
</section>

@endsection

@section('page-title, $page_title')