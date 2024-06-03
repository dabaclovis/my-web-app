@extends('layouts.user')

@section('content')
    <div class="card">
        <div class="card-header w3-xlarge w3-center">
            Update blog Article
        </div>
    </div>
    <div class="w3-container w3-card-4 w3-light-gray pt-2">
        {!! Form::open(['route' => 'blogs.store','method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {!! Form::label('title', "Heading", ['class' => 'w3-xlarge w3-card']) !!}
                    {!! Form::text('title', $article->title, ['class' => 'form-control']) !!}
                    @error('title')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('body', "Content", ['class' => 'w3-xlarge w3-card']) !!}
                    {!! Form::textarea('body',  $article->body , ['class' => 'form-control']) !!}
                    @error('body')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::file('image') !!}
                </div>
                @method('PUT')
                <div class="form-group d-flex justify-content-end">
                    {!! Form::submit('Create', ['class' => 'btn btn-success']) !!}
                </div>
        {!! Form::close() !!}
    </div>
@endsection
