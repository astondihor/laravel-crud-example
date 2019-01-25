@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header d-flex flex-row justify-content-between align-items-center">
                    <h1>Manage User
                        <small>Preview all users</small>
                    </h1>
                    <a href="{{ route('admin.users.create') }}" role="button" class="btn btn-success btn-sm"><i
                                class="fas fa-plus"></i> Add New User</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-sm table-hover table-stripped table-bordered">
                        <thead>
                        <tr>
                            <th width="1%">ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created</th>
                            <th>Verified</th>
                            <th width="1%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-right">{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    @if ($user->email_verified_at)
                                        {{ $user->email_verified_at }}
                                    @else
                                        <div class="text-center">
                                            <i class="fas fa-times text-danger"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex flex-row align-items-center">
                                        <a href="{{ route('admin.users.show', $user) }}" class="text-success mr-2"><i
                                                    class="far fa-eye"></i></a>
                                        <a href="{{ route('admin.users.edit', $user) }}" class="text-primary mr-2"><i
                                                    class="fas fa-pencil-alt"></i></a>
                                        <a href="#" data-href="{{ route('admin.users.destroy', $user) }}"
                                           class="delete-button text-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts-after')
    <script>
        const swalWithBootstrapButtons = Swal.mixin({
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
        });
        $('.delete-button').click(function (e) {
            e.preventDefault();
            var url = $(this).attr('data-href');
            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        method: 'POST',
                        url: url,
                        data: {
                            // 'id': id,
                            '_token': '{{ csrf_token() }}',
                            '_method': 'DELETE'
                        },
                        success: function () {
                            swalWithBootstrapButtons.fire(
                                'Deleted!',
                                'Your user record has been deleted.',
                                'success'
                            ).then((result) => {
                                location.reload();
                            });
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            alert(jqXHR.status);
                            alert(textStatus);
                            alert(errorThrown);
                        }
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your user record is safe :)',
                        'error'
                    );
                }
            });
        });
    </script>
@endpush
