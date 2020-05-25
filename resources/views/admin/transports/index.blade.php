@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Transports</h1>
    <div class="alert-message alert-message-warning mb-4">
        <p>
            <i class="fas fa-exclamation"></i>&nbsp; ??
        </p>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Transports</h6>
        </div>
        <div class="card-body">
            <!-- Buttons -->
            <div id="saveActions" class="form-group float-right">
                <div class="btn-group" role="group">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#add_transport">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Create</span>
                    </button>
                    @include('admin.transports.partials._modal_create')
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>icon</th>
                        <th>title</th>
                        <th>infos</th>
                        <th>created</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>icon</th>
                        <th>title</th>
                        <th>infos</th>
                        <th>created</th>
                        <th>actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($transports as $transport)
                        <tr>
                            <td>{{ $transport->id }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <i class="{{ $transport->icon }}"></i>
                                </div>
                            </td>
                            <td>{{ $transport->title }}</td>
                            <td>{{ $transport->infos }}</td>
                            <td>{{ $transport->created_at->format('D d M Y') }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary btn-circle mr-1" data-toggle="modal" data-target="#edit_transport_{{ $transport->id }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                    <form action="{{ route('admin.transports.destroy', $transport->id) }}" method="post"
                                          data-id="{{ $transport->id }}">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn-delete btn btn-danger btn-circle mr-1">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        @include('admin.transports.partials._modal_edit')
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
