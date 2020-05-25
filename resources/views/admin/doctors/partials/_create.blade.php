@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Doctor</h1>

    <div class="alert-message alert-message-warning mb-4">
        <p>
            <i class="fas fa-exclamation"></i>&nbsp; Attention; les nom, prénom, et adresse email sont des informations très importante pour la bonne utilisation du formulaire de contact
        </p>
    </div>
    
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create doctor</h6>
        </div>

        <div class="card-body">
            <div class="col-md-12">
                <!-- Default box -->
                <form action="{{ route('admin.doctors.store') }}" method="post">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Nom <i class="mandatory">*</i></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                   id="name" placeholder="name" required>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="firstname">Prénom <i class="mandatory">*</i></label>
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
                            <label for="civility">civility </label>
                            <select name="civility" id="civility" class="form-control @error('civility') is-invalid @enderror">
                                <option value="{{\App\Models\Doctors::CIVILITY_MR}}" selected>
                                    {{\App\Models\Doctors::CIVILITY_MR}}
                                </option>
                                <option value="{{\App\Models\Doctors::CIVILITY_MS}}">
                                    {{\App\Models\Doctors::CIVILITY_MS}}
                                </option>
                            </select>

                            @error('civility')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="email">email <i class="mandatory">*</i></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                   id="email" placeholder="email" required>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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
                        <a href="{{ route('admin.doctors.index') }}" class="btn btn-default btn-icon-split">
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
