@extends('layouts.admin')

@section('head-title')
    @yield('page-title')
@endsection


@section('main-content')
    <div class="container">
        <div class="row">

            <div class="col-12">

                @include('partials.errors')

                <form action="@yield('form-action')" method="POST">
                    @csrf

                    @yield('form-method')


                    <div class="mb-3 input-group">
                        <label for="title" class="input-group-text"> Title:</label>
                        <input class="form-control" type="text" name="title" id="title"
                            value="{{ old('title', $project->title) }}">
                    </div>

                    <div class="mb-3 input-group">
                        <label for="author" class="input-group-text"> Author:</label>
                        <input class="form-control" type="text" name="author" id="author"
                            value="{{ old('author', $project->author) }}">
                    </div>

                    <div class="mb-3 input-group">
                        <label for="image" class="input-group-text">image_url:</label>
                        <input class="form-control" type="text" name="image" id="image"
                            value="{{ old('image', $project->image) }}">
                        <div>
                            <img src="" alt="image preview" class="d-none img-fluid " id="image-preview">
                        </div>
                    </div>

                    <div class="mb-3 input-group">
                        <label for="date" class="input-group-text"> Date:</label>
                        <input class="form-control" type="text" name="date" id="date"
                            value="{{ old('date', $project->date) }}">
                    </div>

                    <div class="mb-3 input-group">
                        <label for="description" class="input-group-text"> Description:</label>
                        <textarea class="form-control" type="text" name="description" id="description"> {{ old('description', $project->description) }}</textarea>
                    </div>



                    <button type="submit" class="btn btn-sm btn-primary">
                        @yield('page-title')
                    </button>

                    <button type="reset" class="btn btn-sm btn-warning">
                        Reset Form
                    </button>

                </form>









            </div>
        </div>

    </div>

<script>
 document.getElementById('image').addEventListener('change', function(event){
        const imageElement = document.getElementById('image-preview');
        imageElement.setAttribute('src' , this.value);
        imageElement.classList.remove('d-none');
    });


</script>


@endsection
