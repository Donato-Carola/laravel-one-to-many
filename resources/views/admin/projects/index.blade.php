@extends('layouts.admin')

@section('title', 'Admin Projects')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>
                    These are all our avaible project, {{ Auth::user()->name }}
                </h2>
            </div>

            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>
                                    <a href="{{ route('admin.projects.show', $project) }}">
                                        {{ $project->title }}
                                </td>
                                </a>

                                <td>{{ $project->author }}</td>
                                <td>{{ substr($project->description, 0, 50) }}...</td>
                                <td>{{ $project->date }}</td>

                                <td>
                                    <a href="{{ route('admin.projects.show', $project) }}">
                                        <button class="btn btn-sm btn-primary">

                                            view
                                        </button>
                                    </a>

                                    <a href="{{ route('admin.projects.edit', $project) }}">
                                        <button class="btn btn-sm btn-success">
                                            Edit
                                        </button>

                                    </a>
                                    <!-- Button trigger modal -->
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal-{{ $project->id }}">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal-{{ $project->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Deleting
                                                        post...</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Do you really want to delete {{ $project->title }}?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>

                                                    <form class="d-inline-block"
                                                        action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button class="btn btn-danger" type="submit">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                </td>



                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">
                                    There are bo projects avaible

                                </td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>

    </div>


@endsection
