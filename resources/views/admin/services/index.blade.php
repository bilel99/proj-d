@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Services</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List services</h6>
        </div>
        <div class="card-body">
            <!-- Buttons -->
            <div id="saveActions" class="form-group float-right">
                <div class="btn-group" role="group">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#add_service">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Create</span>
                    </button>
                    @include('admin.services.partials._modal_create')
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>page</th>
                        <th>title</th>
                        <th>content</th>
                        <th>icon</th>
                        <th>created</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>page</th>
                        <th>title</th>
                        <th>content</th>
                        <th>icon</th>
                        <th>created</th>
                        <th>actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td>{{ $service->page_id }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->content }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <i class="{{ $service->icon }}"></i>
                                </div>
                            </td>
                            <td>{{ $service->created_at->format('D d M Y') }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary btn-circle mr-1" data-toggle="modal" data-target="#edit_service_{{ $service->id }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>

                                    <form action="{{ route('admin.services.destroy', $service->id) }}" method="post"
                                          data-id="{{ $service->id }}">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn-delete btn btn-danger btn-circle mr-1">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        @include('admin.services.partials._modal_edit')
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
