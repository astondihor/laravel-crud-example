@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="page-header d-flex flex-row align-items-center justify-content-between">
            <h1>Show User
                <small>{{ $user->name }}</small>
            </h1>
            <a href="{{ route('admin.users.index') }}"><i class="fas fa-chevron-left"></i> Back to list</a>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="my-4 table table-sm table-nonfluid table-bordered">
                    <tr>
                        <td>ID</td>
                        <th>{{ $user->id }}</th>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <th>{{ $user->name }}</th>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <th>{{ $user->email }}</th>
                    </tr>
                    <tr>
                        <td>Created At</td>
                        <th>{{ $user->created_at }}</th>
                    </tr>
                    <tr>
                        <td>Updated At</td>
                        <th>{{ $user->updated_at }}</th>
                    </tr>
                    <tr>
                        <td>Verified</td>
                        <th>
                            @if ($user->email_verified_at)
                                {{ $user->email_verified_at }}
                            @else
                                <i class="fas fa-times text-danger"></i>
                            @endif
                        </th>
                    </tr>
                </table>

                <a href="{{ route('admin.users.edit', $user) }}"><i class="fas fa-pencil-alt"></i> Edit this user</a>
            </div>
        </div>
    </div>
@endsection
