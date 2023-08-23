@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3 bg-dark mt-3">
    <div class="container text-center py-5 rounded border border-black px-5 bg-light">

        <h1 class="display-5 fw-bold my-5">
            {{ $project -> title}}
        </h1>

        <a class="btn btn-primary" href="{{ route('edit', $project->id) }}">
            EDIT
        </a>

        <div>
            {{ $project -> description}}
        </div>
        <div class="border rounded border-black d-flex justify-content-between my-5">
            <li class="list-unstyled p-3">Project Leader: {{ $project -> project_leader_name}}</li>
            <li class="list-unstyled p-3">People: {{ $project -> people}}</li>
            <li class="list-unstyled p-3">Date Start: {{ $project -> date_start}}</li>
            <li class="list-unstyled p-3">N° Day: {{ $project -> duration}}</li>
            <li class="list-unstyled p-3">Type:  {{ $project -> type -> name }}</li>
        </div>
        <div>
            <h5>Technologies: {{ count($project -> technologies) }}</h5>
                    <ul>
                        @foreach ($project -> technologies as $project)
                            <li>
                                <a href="{{ route('show', $project -> id) }}">
                                    {{ $project -> name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
        </div>
    </div>
</div>

@endsection
