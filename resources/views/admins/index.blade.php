@extends('layouts.admin')

@section('content')
<div class="card-columns">
    <div class="card w3-card">
       <a href="{{ route('admins.userall') }}" class=" list-group-item-action">
        <div class="card-body">
            <div class="card-title w3-xlarge">Registerd Users</div>
            <div class="card-text">This card shows the total number of users</div>
            <div class="">
                <small class=" badge badge-success">{{ $users->count() }}</small>
            </div>
        </div>
       </a>
    </div>
     <div class="card w3-card">
       <a href="{{ route('articles.index') }}" class=" list-group-item-action">
        <div class="card-body">
            <div class="card-title w3-xlarge">All Blog Articles</div>
            <div class="card-text">This card shows all blog articles by users</div>
            <div class="">
                <small class=" badge badge-success">{{ $articles->count() }}</small>
            </div>
        </div>
       </a>
    </div>
</div>
<hr>
@endsection
