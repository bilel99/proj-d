@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Doctors</h1>
    <p class="mb-4"></p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ '#'.$doctor->id . ' ' . $doctor->name . ' ' . $doctor->firstname }}</h6>
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
                                <span>{{ $doctor->name }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>firstname:</strong>
                            </td>
                            <td>
                                <span>{{ $doctor->firstname }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>email:</strong>
                            </td>
                            <td>
                                <a href="mailto:{{ $doctor->email }}">
                                    {{ $doctor->email }}
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>civility:</strong>
                            </td>
                            <td>
                                <span>{{ $doctor->civility }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>created_at:</strong>
                            </td>
                            <td>
                                <span>{{ $doctor->created_at->format('D d M Y') }}</span>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                    <!-- Buttons -->
                    <div id="saveActions" class="form-group">
                        <div class="btn-group" role="group">
                            <a href="{{ route('admin.doctors.edit', $doctor->id) }}"
                               class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-pencil-alt"></i>
                                </span>
                                <span class="text">Modifier</span>
                            </a>
                        </div>

                        <div class="btn-group" role="group">
                            <form action="{{ route('admin.doctors.destroy', $doctor->id) }}" method="post"
                                  data-id="{{ $doctor->id }}">
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
