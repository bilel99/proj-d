@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Demande de contacts</h1>
    <p class="mb-4"></p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Liste demande de contacts</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>civility</th>
                        <th>name</th>
                        <th>firstname</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>date_consultation</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>civility</th>
                        <th>name</th>
                        <th>firstname</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>date_consultation</th>
                        <th>actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->civility }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->firstname }}</td>
                            <td>
                                <a href="mailto:{{ $contact->email }}">
                                    {{ $contact->email }}
                                </a>
                            </td>
                            <td>
                                <a href="tel:{{ $contact->phone }}">
                                    {{ $contact->getPhoneFormated($contact->phone) }}
                                </a>
                            </td>
                            <td>{{ $contact->getDateConsultAttribute() }}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('admin.contacts.show', $contact->id) }}"
                                       class="btn btn-info btn-circle mr-1">
                                        <i class="far fa-eye"></i>
                                    </a>

                                    <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="post"
                                          data-id="{{ $contact->id }}">
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
