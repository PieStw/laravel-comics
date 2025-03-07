@extends('layouts.master')

@section('content')
    <div class="homepage">
        <div class="jumbo">
            <div class="current-series">
                <h1>CURRENT SERIES</h1>
            </div>
        </div>

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
                <button class="btn btn-primary mt-5 mb-5">Load More</button>
            </div>
        </div>

        <div class="info">
            <ul class="container content-info">
                <li>
                    <div class="info-item">
                        <img class="info-img" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="DIGITAL COMICS">
                        <p class="ms-3">DIGITAL COMICS</p>
                    </div>
                </li>
                <li>
                    <div class="info-item">
                        <img class="info-img" src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="DC MERCHANDISE">
                        <p class="ms-3">DC MERCHANDISE</p>
                    </div>
                </li>
                <li>
                    <div class="info-item">
                        <img class="info-img" src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="SUBSCRIPTION">
                        <p class="ms-3">SUBSCRIPTION</p>
                    </div>
                </li>
                <li>
                    <div class="info-item">
                        <img class="info-img" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="COMIC SHOP LOCATOR">
                        <p class="ms-3">COMIC SHOP LOCATOR</p>
                    </div>
                </li>
                <li>
                    <div class="info-item">
                        <img class="info-img" src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="DC POWER VISA">
                        <p class="ms-3">DC POWER VISA</p>
                    </div>
                </li>
            </ul>
        </div>

    </div>
@endsection
