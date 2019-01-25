@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="page-header d-flex flex-row align-items-center justify-content-between">
            <h1>New User
                <small>Create a new user record</small>
            </h1>
            <a href="{{ route('admin.users.index') }}"><i class="fas fa-chevron-left"></i> Back to list</a>
        </div>

        <div class="row my-5">
            <div class="col-12 col-sm-8 col-md-6 offset-md-3">
                <div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="mb-0 h4">User Form</h3>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {!! Form::model($user, ['method' => 'PATCH', 'route' => ['admin.users.update', $user->id]]) !!}
                            @include('admin.users.fields')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
