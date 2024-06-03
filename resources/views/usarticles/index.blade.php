@extends('layouts.user')

@section('content')
    <div class=" jumbotron d-flex justify-content-center">
        <a href="{{ route('blogs.create') }}" class=" btn-lg btn btn-info">Create Article</a>
    </div>
@endsection
