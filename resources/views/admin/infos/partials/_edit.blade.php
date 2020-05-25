@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Information</h1>

    <div class="alert-message alert-message-warning mb-4">
        <p>
            <i class="fas fa-exclamation"></i>&nbsp; Explications ...
        </p>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit information</h6>
        </div>

        <div class="card-body">
            <div class="col-md-12">
                <!-- Default box -->
                <form action="{{ route('admin.informations.update', $information->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="alerts">alerts </label>
                            <button type="button" class="btn btn-sm btn-link float-right" data-toggle="modal"
                                    data-target="#add_alert">
                                <i class="fas fa-plus"></i>
                                Ajouter
                            </button>

                            <select name="alert_id" id="alerts"
                                    class="form-control @error('alert_id') is-invalid @enderror">

                                @foreach($alerts as $alert)
                                    <option value="{{ $alert->id }}" {{ $alert->id === $information->alert_id ? 'selected': '' }}>{{ $alert->title }}</option>
                                @endforeach
                            </select>

                            @error('alert_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="title">title </label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                   id="title" placeholder="title" value="{{ $information->title }}">

                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="content">content </label>
                            <textarea name="content" id="content"
                                      class="form-control @error('content') is-invalid @enderror" cols="30"
                                      rows="10">{!! $information->content !!}</textarea>

                            @error('content')
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
                        <a href="{{ route('admin.pages.index') }}" class="btn btn-default btn-icon-split">
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

    <!-- Import Modal -->
    @include('admin.pages.partials._modal_create_alert')

@endsection
