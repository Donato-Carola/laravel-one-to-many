@extends('layouts.admin')

@section('title', 'Admin Projects')

@section('main-content')
    <div class="container">
        <div class="row">

            <h1>
                Project cancellato
            </h1>
            <div class="col-12">

                <h2 scope="row">
                    {{ $project->id }}
                </h2>
                <p>

                    {{ $project->title }}
                </p>


                <p>{{ $project->author }}</p>
                <p>{{ $project->description }}</p>
                <p>{{ $project->date }}</p>

                <p>



                </p>

            </div>
        </div>
        <a href="{{route('admin.projects.index')}}">
            <button class="btn btn-dark">
                torna alla Home
            </button>
        </a>

        <a href="{{route('admin.projects.deleted.index')}}">
            <button class="btn btn-info">
                torna alla trash
            </button>
        </a>

    </div>


@endsection
