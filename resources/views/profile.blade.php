@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="content">
            Profilio peržiūrėjimas: {{$user->username}}
        </div>
    </div>
@endsection
