@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Alerts</h1>
    <div class="alert-message alert-message-warning mb-4">
        <p>
            <i class="fas fa-exclamation"></i>&nbsp; Les alertes sont des messages avec un types particuliés qui vous permet de rendre visible un text ou un message sur le site!
        </p>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List alerts</h6>
        </div>
        <div class="card-body">
            <!-- Buttons -->
            <div id="saveActions" class="form-group float-right">
                <div class="btn-group" role="group">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#add_alert">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Create</span>
                    </button>
                    @include('admin.alerts.partials._modal_create')
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
                        <th>types</th>
                        <th>levels</th>
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
                        <th>types</th>
                        <th>levels</th>
                        <th>created</th>
                        <th>actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($alerts as $alert)
                        <tr>
                            <td>{{ $alert->page_id }}</td>
                            <td>{{ $alert->title }}</td>
                            <td>{{ $alert->content }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <i class="{{ $alert->icon }}"></i>
                                </div>
                            </td>
                            <td>{{ $alert->types }}</td>
                            <td>{{ $alert->levels }}</td>
                            <td>{{ $alert->created_at->format('D d M Y') }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary btn-circle mr-1" data-toggle="modal" data-target="#edit_alert_{{ $alert->id }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                    <form action="{{ route('admin.alerts.destroy', $alert->id) }}" method="post"
                                          data-id="{{ $alert->id }}">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn-delete btn btn-danger btn-circle mr-1">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        @include('admin.alerts.partials._modal_edit')
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
