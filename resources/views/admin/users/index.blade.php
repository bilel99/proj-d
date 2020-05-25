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
            <!-- Buttons -->
            <div id="saveActions" class="form-group float-right">
                <div class="btn-group" role="group">
                    <a href="{{ route('admin.users.create') }}" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                        <span class="text">Create</span>
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>firstname</th>
                        <th>email</th>
                        <th>created</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>firstname</th>
                        <th>email</th>
                        <th>created</th>
                        <th>actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('D d M Y') }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('admin.users.show', $user->id) }}"
                                       class="btn btn-info btn-circle mr-1">
                                        <i class="far fa-eye"></i>
                                    </a>

                                    <a href="{{ route('admin.users.edit', $user->id) }}"
                                       class="btn btn-primary btn-circle mr-1">
                                        <i class="fas fa-pen"></i>
                                    </a>

                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="post"
                                          data-id="{{ $user->id }}">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn-delete btn btn-danger btn-circle mr-1">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
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
