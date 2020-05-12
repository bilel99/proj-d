@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Nos horaires</h1>
    <p class="mb-4"></p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List horaires</h6>
        </div>
        <div class="card-body">
            <!-- Buttons -->
            <div id="saveActions" class="form-group float-right">
                <div class="btn-group" role="group">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#create_schedule">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Create</span>
                    </button>
                    @include('admin.horaires.partials._modal_create')
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>title</th>
                        <th>content</th>
                        <th>created</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>title</th>
                        <th>content</th>
                        <th>created</th>
                        <th>actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($horaires as $horaire)
                        <tr>
                            <td>{{ $horaire->title }}</td>
                            <td>{{ $horaire->content }}</td>
                            <td>{{ $horaire->created_at->format('D d M Y') }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary btn-circle mr-1" data-toggle="modal" data-target="#edit_schedule_{{ $horaire->id }}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </button>
                                    <form action="{{ route('admin.horaires.destroy', $horaire->id) }}" method="post"
                                          data-id="{{ $horaire->id }}">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn-delete btn btn-danger btn-circle mr-1">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        @include('admin.horaires.partials._modal_edit')
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
