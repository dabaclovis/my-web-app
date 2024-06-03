@extends('layouts.user')

@section('content')

    <div class=" w3-row-padding w3-section">
        <div class="w3-third">
            <div class=" w3-display-container">
                @if (Auth::user()->avatar)
                    <img src="{{ asset('storage/users/'.Auth::user()->avatar) }}" alt="profile" width="100%" class=" w3-round-xlarge">
                @endif
            </div>
            <div class="w3-container w3-card pt-2 pb-0">
                <form action="{{ route('home.upload') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group d-flex justify-content-between w-80">
                        <input type="file" name="avatar">
                        <button type="submit" class=" btn btn-success">upload</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    {{ $user->name }}

    <br>
    {{ $user->fname }} <br>
    {{ $user->email }} <br>
    {{ $user->lname }} <br>
    {{ $user->roles }} <br>
@endsection
