@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="content">
            @if($articles)
                @foreach($articles as $article)
                    <h2>{{$article->title}}</h2>
                    {!! $article->body !!}
                    <div>
                        Autorius:
                        <a href="{{route('profile', $article->user->username)}}">{{ $article->user->username }}</a>
                    </div>
                @endforeach
        </div>
        @endif
    </div>
@endsection
