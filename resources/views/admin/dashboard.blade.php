@extends('layouts.admin')

@section('title', 'Admin Projects')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>
                    welcome to your Admin Project, {{ Auth::user()->name }}
                </h2>
            </div>
        </div>

    </div>


@endsection
