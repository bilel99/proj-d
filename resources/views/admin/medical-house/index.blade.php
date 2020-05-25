@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Medical house</h1>
    <p class="mb-4"></p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List medical houses</h6>
        </div>
        <div class="card-body">
            <!-- Buttons -->
            <div id="saveActions" class="form-group float-right">
                <div class="btn-group" role="group">
                    <a href="{{ route('admin.medical-house.create') }}" class="btn btn-success btn-icon-split">
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
                        <th>title</th>
                        <th>content</th>
                        <th>map</th>
                        <th>address</th>
                        <th>compl_address</th>
                        <th>phone</th>
                        <th>hours</th>
                        <th>transport...</th>
                        <th>created</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>title</th>
                        <th>content</th>
                        <th>map</th>
                        <th>address</th>
                        <th>compl_address</th>
                        <th>phone</th>
                        <th>hours</th>
                        <th>transport...</th>
                        <th>created</th>
                        <th>actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($houses as $house)
                        <tr>
                            <td>{{ $house->title }}</td>
                            <td>{{ $house->content }}</td>
                            <td>{{ $house->map }}</td>
                            <td>{{ $house->address }}</td>
                            <td>{{ $house->compl_address }}</td>
                            <td>{{ $house->phone }}</td>
                            <td>{{ $house->hours }}</td>
                            <td>...</td>
                            <td>{{ $house->created_at->format('D d M Y') }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('admin.medical-house.show', $house->id) }}"
                                       class="btn btn-info btn-circle mr-1">
                                        <i class="far fa-eye"></i>
                                    </a>

                                    <a href="{{ route('admin.medical-house.edit', $house->id) }}"
                                       class="btn btn-primary btn-circle mr-1">
                                        <i class="fas fa-pen"></i>
                                    </a>

                                    <form action="{{ route('admin.medical-house.destroy', $house->id) }}" method="post"
                                          data-id="{{ $house->id }}">
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
