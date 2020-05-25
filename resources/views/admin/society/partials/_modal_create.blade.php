<!-- Modal -->
<div class="modal fade" id="create_schedule" tabindex="-1" role="dialog" aria-labelledby="create_schedule"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="create_schedule">Création d'une horaire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.horaires.store') }}" method="post">
                @csrf

                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="">title <i class="mandatory">*</i></label>
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
                            <label for="">content <i class="mandatory">*</i></label>
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