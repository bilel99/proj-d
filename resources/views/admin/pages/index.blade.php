@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pages</h1>
    <p class="mb-4"></p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List pages</h6>
        </div>
        <div class="card-body">
            <!-- Buttons -->
            <div id="saveActions" class="form-group float-right">
                <div class="btn-group" role="group">
                    <a href="{{ route('admin.pages.create') }}" class="btn btn-success btn-icon-split">
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
                        <th>unique_name</th>
                        <th>title</th>
                        <th>content</th>
                        <th>created</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>unique_name</th>
                        <th>title</th>
                        <th>content</th>
                        <th>created</th>
                        <th>actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($pages as $page)
                        <tr>
                            <td>{{ $page->unique_name }}</td>
                            <td>{{ $page->title }}</td>
                            <td>{{ $page->content }}</td>
                            <td>{{ $page->created_at->format('D d M Y') }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('admin.pages.show', $page->id) }}"
                                       class="btn btn-info btn-circle mr-1">
                                        <i class="far fa-eye"></i>
                                    </a>

                                    <a href="{{ route('admin.pages.edit', $page->id) }}"
                                       class="btn btn-primary btn-circle mr-1">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    
                                    <form action="{{ route('admin.pages.destroy', $page->id) }}" method="post"
                                          data-id="{{ $page->id }}">
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
