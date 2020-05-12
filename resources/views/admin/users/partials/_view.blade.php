@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Users</h1>
    <p class="mb-4"></p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ '#'.$user->id . ' ' . $user->name . ' ' . $user->firstname }}</h6>
        </div>

        <div class="card-body">
            <div class="col-md-12">

                <!-- Default box -->
                <div class="card">
                    <table class="table table-striped mb-0">
                        <tbody>
                        <tr>
                            <td>
                                <strong>name:</strong>
                            </td>
                            <td>
                                <span>{{ $user->name }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>firstname:</strong>
                            </td>
                            <td>
                                <span>{{ $user->firstname }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>email:</strong>
                            </td>
                            <td>
                                <span>{{ $user->email }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>password:</strong>
                            </td>
                            <td>
                                <span>********</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>status:</strong>
                            </td>
                            <td>
                                <span>{{ $user->getStringStatus() }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>created_at:</strong>
                            </td>
                            <td>
                                <span>{{ $user->created_at->format('D d M Y') }}</span>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                    
                    <div class="d-flex p-5 flex-wrap justify-content-center">
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="text-center btn btn-primary m-3">Modifier</a>
                        <a href="{{ route('admin.users.destroy', $user->id) }}" class="text-center btn btn-danger m-3">Supprimer</a>
                    </div>
                </div><!-- /.box-body -->
            </div>
        </div>
    </div>

@endsection
