@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Maison médical</h1>
    <p class="mb-4"></p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ '#'.$medical_house->id . ' ' . $medical_house->title }}</h6>
        </div>

        <div class="card-body">
            <div class="col-md-12">

                <!-- Default box -->
                <div class="card">
                    <table class="table table-striped mb-0">
                        <tbody>
                        <tr>
                            <td>
                                <strong>title:</strong>
                            </td>
                            <td>
                                <span>{{ $medical_house->title }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>content:</strong>
                            </td>
                            <td>
                                <span>{{ $medical_house->content }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>map:</strong>
                            </td>
                            <td>
                                <span>{{ $medical_house->map }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>address:</strong>
                            </td>
                            <td>
                                <span>{{ $medical_house->address }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>compl_address:</strong>
                            </td>
                            <td>
                                <span>{{ $medical_house->compl_address }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>phone:</strong>
                            </td>
                            <td>
                                <span>{{ $medical_house->phone }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>hours:</strong>
                            </td>
                            <td>
                                <span>{{ $medical_house->hours }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>Transport:</strong>
                            </td>
                            <td>
                                @foreach($medical_house->transports as $transport)
                                    <span class="d-block font-weight-bold">icon:
                                        <span class="text-muted font-weight-normal">
                                            <i class="{{ $transport->icon }}"></i>
                                        </span>
                                    </span>
                                    <span class="d-block font-weight-bold">title:
                                        <span class="text-muted font-weight-normal">
                                            {{ $transport->title }}
                                        </span>
                                    </span>
                                    <span class="d-block font-weight-bold">infos:
                                        <span class="text-muted font-weight-normal">
                                            {{ $transport->infos }}
                                        </span>
                                    </span>
                                    <hr>
                                @endforeach
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>created_at:</strong>
                            </td>
                            <td>
                                <span>{{ $medical_house->created_at->format('D d M Y') }}</span>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                    <!-- Buttons -->
                    <div id="saveActions" class="form-group">
                        <div class="btn-group" role="group">
                            <a href="{{ route('admin.medical-house.edit', $medical_house->id) }}"
                               class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-pencil-alt"></i>
                                </span>
                                <span class="text">Modifier</span>
                            </a>
                        </div>

                        <div class="btn-group" role="group">
                            <form action="{{ route('admin.medical-house.destroy', $medical_house->id) }}" method="post"
                                  data-id="{{ $medical_house->id }}">
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
