@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pages</h1>
    <p class="mb-4"></p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ '#'.$page->id . ' ' . $page->title }}</h6>
        </div>

        <div class="card-body">
            <div class="col-md-12">

                <!-- Default box -->
                <div class="card">
                    <table class="table table-striped mb-0">
                        <tbody>
                        <tr>
                            <td>
                                <strong>unique_name:</strong>
                            </td>
                            <td>
                                <span>{{ $page->unique_name }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>title:</strong>
                            </td>
                            <td>
                                <span>{{ $page->title }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>content:</strong>
                            </td>
                            <td>
                                <span>{{ $page->content }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>created_at:</strong>
                            </td>
                            <td>
                                <span>{{ $page->created_at->format('D d M Y') }}</span>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                    <!-- Buttons -->
                    <div id="saveActions" class="form-group">
                        <div class="btn-group" role="group">
                            <a href="{{ route('admin.pages.edit', $page->id) }}"
                               class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-pencil-alt"></i>
                                </span>
                                <span class="text">Modifier</span>
                            </a>
                        </div>

                        <div class="btn-group" role="group">
                            <form action="{{ route('admin.pages.destroy', $page->id) }}" method="post"
                                  data-id="{{ $page->id }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-icon-split btn-delete">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-ban"></i>
                                    </span>
                                    <span class="text">Supprimer</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div>
        </div>
    </div>

@endsection
