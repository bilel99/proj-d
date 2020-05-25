<!-- Modal -->
<div class="modal fade" id="edit_society_{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="edit_society_{{ $item->id }}"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit_society_{{ $item->id }}">Edition d'une societé</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.society.update', $item->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="">name <i class="mandatory">*</i></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                   id="name" placeholder="name" value="{{ $item->name }}" required>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="">email <i class="mandatory">*</i></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" id="email" value="{{ $item->email }}" placeholder="email"
                                   required>

                            @error('email')
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