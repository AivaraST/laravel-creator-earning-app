@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="content">
            <div class="home">
                <div class="home__section">
                    <h2 class="home__heading">The fastest way to earn money from your fans!</h2>
                    <p class="home__info">As far as we're concerned, if you use social media and produce your own
                        content,
                        you
                        should be using our
                        product. Whether you're uploading tutorials, tips, behind the scenes footage ar just endless
                        selfies, a
                        lot
                        of your followers would be willing to pay for them.</p>
                    <a href="{{ route('register') }}" class="home__start">Get started for free</a>
                </div>
                <div class="home__section">
                    <img src="{{ asset('images/home-convert-currency.svg') }}"
                         alt="Home convert curreny">
                </div>
            </div>
        </div>
    </div>
@endsection
