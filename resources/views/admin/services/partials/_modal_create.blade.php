<!-- Modal -->
<div class="modal fade" id="add_service" tabindex="-1" role="dialog" aria-labelledby="add_service"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add_service">Création d'un service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.services.store') }}" id="form-created" method="post">
                @csrf

                <div class="modal-body">
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
                            <label for="content">content <i class="mandatory">*</i></label>
                            <input type="text" class="form-control @error('content') is-invalid @enderror"
                                   name="content" id="content" placeholder="content"
                                   required>

                            @error('content')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="icon">icon </label>
                            <input type="text" class="form-control @error('icon') is-invalid @enderror"
                                   name="icon" id="icon" placeholder="icon">

                            @error('icon')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
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

                        <div class="btn-group" role="group">
                            <button class="btn btn-default btn-icon-split" data-dismiss="modal">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-ban"></i>
                                    </span>
                                <span class="text">Cancel</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>