@extends('layouts.master')

@section('content')
    <div class="homepage">
        <div class="jumbo"></div>

        <div class="container">

            @php
                $comics = config('comics');
            @endphp

            <div class="row row-cols-6 mt-5">

                @foreach ($comics as $comic)
                <div class="col">
                    <x-card>
                        <x-slot:titolo>{{ $comic['title'] }}</x-slot:titolo>
                        <x-slot:img>{{ $comic['thumb'] }}</x-slot:img>
                    </x-card>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-primary mt-5">Load More</button>
            </div>
        </div>
    </div>
@endsection
