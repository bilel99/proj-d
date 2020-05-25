@extends('admin.layouts.app-admin')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pages</h1>

    <div class="alert-message alert-message-warning mb-4">
        <p>
            <i class="fas fa-exclamation"></i>&nbsp; Explications ...
        </p>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create pages</h6>
        </div>

        <div class="card-body">
            <div class="col-md-12">
                <!-- Default box -->
                <form action="{{ route('admin.pages.update', $page->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="title">title </label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                   id="title" placeholder="title" value="{{ $page->title }}">

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
                                      rows="10">{!! $page->content !!}</textarea>

                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="alerts">alerts </label>
                            <button type="button" class="btn btn-sm btn-link float-right" data-toggle="modal"
                                    data-target="#add_alert">
                                <i class="fas fa-plus"></i>
                                Ajouter
                            </button>

                            <select name="alerts[]" id="alerts"
                                    class="form-control @error('alerts') is-invalid @enderror"
                                    multiple style="width: 100%">

                                @foreach($page->alerts as $myAlert)
                                    <option value="{{ $myAlert->id }}" selected>{{ $myAlert->title }}</option>
                                @endforeach

                                @foreach($alerts as $alert)
                                    <option value="{{ $alert->id }}">{{ $alert->title }}</option>
                                @endforeach
                            </select>

                            @error('alerts')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 col-sm-12">
                            <span class="text-center font-weight-bold d-block">Image: </span>
                            @if($page->hasFile($page->unique_name))
                                <img src="{{ $page->getRetrievingFile($page->unique_name) }}" class="d-block img-responsive" alt="image pour page {{ $page->unique_name }}">
                            @else
                                <span class="text-center font-weight-bold text-muted">
                                    Vous avez uploader aucune image pour l'instant!
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="files">Medias </label>
                            <input
                                    type="file"
                                    name="files"
                                    id="files"
                                    label="Déposez des fichiers ici ou cliquez pour télécharger"
                                    help="Uploader des fichiers ici"
                                    is="drop-files"
                            />
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
