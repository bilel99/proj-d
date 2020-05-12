@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Demande de contact</h1>
    <p class="mb-4"></p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ '#'.$contact->id . ' ' . $contact->name . ' ' . $contact->firstname }}</h6>
        </div>

        <div class="card-body">
            <div class="col-md-12">

                <!-- Default box -->
                <div class="card">
                    <table class="table table-striped mb-0">
                        <tbody>
                        <tr>
                            <td>
                                <strong>objet_demande:</strong>
                            </td>
                            <td>
                                <span>{{ $contact->objet_demande }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>civility:</strong>
                            </td>
                            <td>
                                <span>{{ $contact->civility }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>name:</strong>
                            </td>
                            <td>
                                <span>{{ $contact->name }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>firstname:</strong>
                            </td>
                            <td>
                                <span>{{ $contact->firstname }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>email:</strong>
                            </td>
                            <td>
                                <span>{{ $contact->email }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>phone:</strong>
                            </td>
                            <td>
                                <span>{{ $contact->phone }}</span>
                            </td>
                        </tr>

                        <hr>
                        <tr>
                            <td>
                                <strong>address:</strong>
                            </td>
                            <td>
                                <span>{{ $contact->address }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>postal_code:</strong>
                            </td>
                            <td>
                                <span>{{ $contact->postal_code }}</span>
                            </td>
                        </tr>

                        <hr>
                        <tr>
                            <td>
                                <strong>date_consultation:</strong>
                            </td>
                            <td>
                                <span>{{ $contact->getDateConsultAttribute() }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>objet_demande_doctor:</strong>
                            </td>
                            <td>
                                <span>{{ $contact->objet_demande_doctor }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>nom du docteur:</strong>
                            </td>
                            <td>
                                <span>{{ $contact->doctor->name }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>prénom du docteur:</strong>
                            </td>
                            <td>
                                <span>{{ $contact->doctor->firstname }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>precisions:</strong>
                            </td>
                            <td>
                                <span>{{ $contact->precisions }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>created_at:</strong>
                            </td>
                            <td>
                                <span>{{ $contact->created_at->format('D d M Y') }}</span>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                    <!-- Buttons -->
                    <div id="saveActions" class="form-group">
                        <div class="btn-group" role="group">
                            <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="post"
                                  data-id="{{ $contact->id }}">
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
