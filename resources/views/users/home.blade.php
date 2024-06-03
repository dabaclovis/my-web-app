@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header w3-padding-24 w3-card w3-light-gray">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (count($articles) >= 0)
                    {{-- post created by auth user --}}
                    <div class="">
                       {{ $articles->count() }}
                    </div>
                    {{-- loop through post --}}
                        @foreach ($articles as $article)
                            
                        @endforeach
                    @else
                        <div class=" d-flex justify-content-center">
                            <p>You have not created any blog post</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
