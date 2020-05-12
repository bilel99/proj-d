@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Users</h1>

    <div class="alert-message alert-message-warning mb-4">
        <p>
            <i class="fas fa-exclamation"></i>&nbsp; Attention; Les utilisateurs ont tous le role SUPER ADMIN, qui leur permet de pouvoir administrer le site internet, Ajouter modifier visualiser et supprimer du contenu
        </p>
    </div>
    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create user</h6>
        </div>

        <div class="card-body">
            <div class="col-md-12">
                <!-- Default box -->
                <form action="{{ route('admin.users.store') }}" method="post">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="">Nom <i class="mandatory">*</i></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                   id="name" placeholder="name" required>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="">Prénom <i class="mandatory">*</i></label>
                            <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                                   name="firstname" id="firstname" placeholder="firstname"
                                   required>

                            @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="">email <i class="mandatory">*</i></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                   id="email" placeholder="email" required>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="">status <i class="mandatory">*</i></label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror"
                                    required>
                                <option value="{{\App\Models\User::STATUS_ACTIF}}" selected>
                                    Actif
                                </option>
                                <option value="{{\App\Models\User::STATUS_INACTIF}}">
                                    Inactif
                                </option>
                            </select>

                            @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="">New password </label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   name="password" id="password"
                                   placeholder="password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="">confirm password </label>
                            <input type="password" class="form-control" name="password_confirmation"
                                   id="password_confirmation"
                                   placeholder="password_confirmation">
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div id="saveActions" class="form-group">
                        <div class="btn-group" role="group">
                            <button type="submit" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-save"></i>
                                </span>
                                <span class="text">Save and back</span>
                            </button>
                        </div>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-default btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-ban"></i>
                            </span>
                            <span class="text">Cancel</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
