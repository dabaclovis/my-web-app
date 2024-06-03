@extends('layouts.user')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header w3-padding-24 w3-card w3-light-gray">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (count($blogs) >= 0)
                    {{-- post created by auth user --}}
                    <div class=" mb-1">
                       You have created <strong class=" badge badge-success">
                        {{ $blogs->count() }}
                       </strong> blog(s)
                    </div>
                    {{-- loop through post --}}
                    <div class="card-columns">
                        @foreach ($blogs as $blog)
                        <div class="card w3-card-4">
                            <div class="card-body">
                                <div class="w3-xlarge"><strong>{{ Str::ucfirst($blog->title) }}</strong></div>
                                <div class="card-text pb-2">{{ Str::limit(Str::ucfirst($blog->body), 35, '...') }}</div>
                                @include('includers.userscrudes')
                            </div>
                        </div>
                        @endforeach
                    </div>
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
