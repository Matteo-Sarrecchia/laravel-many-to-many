@extends('layouts.app')

@section('content')

    <div class="container text-center">
        <h1>Create new Project</h1>

        <form
            method="POST"
            action="{{ route('store') }}"
            enctype="multipart/form-data"
        >

            @csrf
            @method("POST")

            <label for="main_picture">MAIN PICTURE</label>
            <br>
            <input type="file" name="main_picture" id="main_picture">
            <br>
            <label for="title">TITLE</label>
            <br>
            <input type="text" name="title" id="title">
            <br>
            <label for="project_leader_name">PROJECT LEADER NAME</label>
            <br>
            <input type="text" name="project_leader_name" id="project_leader_name">
            <br>
            <label for="people">PEOPLE</label>
            <br>
            <input type="text" name="people" id="people">
            <br>
            <label for="date_start">START DATE</label>
            <br>
            <input type="date" name="date_start" id="date_start">
            <br>
            <label for="duration">DURATION</label>
            <br>
            <input type="number" name="duration" id="duration">
            <br>
            <label for="description">DESCRIPTION</label>
            <br>
            <input type="text-area" name="description" id="description">
            <br>
            <label for="type_id">Type</label>
            <br>
            <select name="type_id" id="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type -> id }}">
                        {{ $type -> name }}
                    </option>
                @endforeach
            </select>
            <br>

            <input class="my-3" type="submit" value="CREATE">
        </form>
    </div>

@endsection