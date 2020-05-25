@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Medical house</h1>

    <div class="alert-message alert-message-warning mb-4">
        <p>
            <i class="fas fa-exclamation"></i>&nbsp;...
        </p>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create medical house</h6>
        </div>

        <div class="card-body">
            <div class="col-md-12">
                <!-- Default box -->
                <form action="{{ route('admin.medical-house.store') }}" method="post">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="title">title <i class="mandatory">*</i></label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                   id="title" placeholder="title" required>

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
                                      class="form-control @error('firstname') is-invalid @enderror" cols="30"
                                      rows="10"></textarea>

                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="map">map </label>
                            <input type="text" class="form-control @error('map') is-invalid @enderror" name="map"
                                   id="map" placeholder="map">

                            @error('map')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="address">address </label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                   name="address"
                                   id="address" placeholder="address">

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="compl_address">compl_address </label>
                            <input type="text" class="form-control @error('compl_address') is-invalid @enderror"
                                   name="compl_address"
                                   id="compl_address" placeholder="compl_address">

                            @error('compl_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="phone">phone </label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                   id="phone" placeholder="phone">

                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="hours">hours </label>
                            <input type="text" class="form-control @error('hours') is-invalid @enderror" name="hours"
                                   id="hours" placeholder="hours">

                            @error('hours')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="transports">Transports </label>
                            <button type="button" class="btn btn-sm btn-link float-right" data-toggle="modal"
                                    data-target="#add_transport">
                                <i class="fas fa-plus"></i>
                                Ajouter
                            </button>

                            <select name="transports[]" id="transports"
                                    class="form-control @error('transports') is-invalid @enderror"
                                    multiple style="width: 100%">

                                @foreach($transports as $transport)
                                    <option value="{{ $transport->id }}">{{ $transport->title }}</option>
                                @endforeach
                            </select>

                            @error('transports')
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
                        <a href="{{ route('admin.medical-house.index') }}" class="btn btn-default btn-icon-split">
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
    @include('admin.medical-house.partials._modal_create_transport')

@endsection
