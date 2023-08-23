@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container text-center py-5">
        
        <h1>
            Hello,
            @auth
                {{ Auth :: user() -> name }}..
                <a class="btn btn-primary" href="{{ route('create')}}">
                    CREATE +
                </a>
            @endauth
            @guest
            World! 
            @endguest
        </h1>

        <ul class="d-flex justify-content-beetween flex-wrap">
                @foreach ($projects as $project)
                    <li class="list-unstyled border rounded border-black m-3 p-3">
                        @auth
                            <a href="{{ route('show', $project -> id) }}">
                                {{ $project -> title }}
                            </a>
                        @endauth

                        @guest
                                {{ $project -> title }}
                        @endguest
                    </li>
                @endforeach
        </ul>
        
    </div>
</div>

@endsection