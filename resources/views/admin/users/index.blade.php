@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Users</h1>
    <p class="mb-4"></p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>name</th>
                        <th>firstname</th>
                        <th>email</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>name</th>
                        <th>firstname</th>
                        <th>email</th>
                        <th>actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-info btn-circle mr-1"><i class="far fa-eye"></i></a>
                                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary btn-circle mr-1"><i class="fas fa-pen"></i></a>
                                    <a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger btn-circle mr-1"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
