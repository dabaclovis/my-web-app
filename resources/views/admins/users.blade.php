@extends('layouts.admin')

@section('content')
<div class=" card border-0 w3-center">
    <div class=" card-header w3-xlarge w3-text-indigo">
        All Registered Users
    </div>
</div>
<div class="w3-car-4 table-responsive">
    <table class=" table table-striped">
        <thead>
            <tr>
                <th>
                    Action
                </th>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>SignUp</th>
                <th  colspan="3">User Picture</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        <a href=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        <a href="">show</a>
                    </td>
                    <td>{{ $user->id }}</td>
                    <td>{{ Str::ucfirst($user->fname) }} &nbsp; {{ Str::ucfirst($user->lname) }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ Str::ucfirst($user->roles) }}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                    @if ($user->avatar)
                        <td>
                            <img src="{{ asset('storage/users/'.$user->avatar) }}" alt="profile" width="50px">
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class=" d-flex justify-content-center">
    <p>{{ $users->links() }}</p>
</div>
@endsection
