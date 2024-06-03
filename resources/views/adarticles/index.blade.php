@extends('layouts.admin')


@section('content')
    <div class="card w3-center">
        <div class="card-header w3-padding-16 w3-xlarge w3-text-teal">
            All Blog Articles
        </div>
    </div>
    <div class="w3-card-4 w3-container">
        <div class=" table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Created User</th>
                        <th>Title</th>
                        <th>Article Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                           <td>{{ $article->id }}</td>
                           <td>{{ Str::ucfirst($article->user->fname) }} &nbsp; {{ Str::ucfirst($article->user->lname) }}</td>

                           <td>{{ Str::ucfirst($article->title) }}</td>
                            @if ($article->image)
                            <td>
                                <img src="{{ asset('storage/images/'.$article->image) }}" alt="" width="40px">
                               </td>
                            @endif
                           <td>
                                <a href="">Edit</a>
                                <a href="">Delete</a>
                           </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class=" d-flex justify-content-center">
        <p>{{ $articles->links() }}</p>
    </div>

@endsection
