<!-- Modal -->
<div class="modal fade" id="edit_alert_{{ $alert->id }}" tabindex="-1" role="dialog"
     aria-labelledby="edit_alert_{{ $alert->id }}"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit_alert_{{ $alert->id }}">Edition d'une alert</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.alerts.update', $alert->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="">title <i class="mandatory">*</i></label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                   id="title" placeholder="title" value="{{ $alert->title }}" required>

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
                                   name="content" id="content" value="{{ $alert->content }}" placeholder="content"
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
                            <label for="">icon </label>
                            <input type="text" class="form-control @error('icon') is-invalid @enderror"
                                   name="icon" id="icon" value="{{ $alert->icon }}" placeholder="icon">

                            @error('icon')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="">types <i class="mandatory">*</i></label>
                            <select name="types" id="types" class="form-control @error('types') is-invalid @enderror"
                                    required style="width: 100%">
                                @foreach($types as $type)
                                    <option value="{{ $loop->iteration }}" {{ $loop->iteration === $alert->types ? 'selected' : '' }}>{{ $type }}</option>
                                @endforeach
                            </select>

                            @error('types')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="">levels <i class="mandatory">*</i></label>
                            <select name="levels" id="levels" class="form-control @error('levels') is-invalid @enderror"
                                    required style="width: 100%">
                                @foreach($levels as $level)
                                    <option value="{{ $loop->iteration }}" {{ $loop->iteration === $alert->levels ? 'selected' : '' }}>{{ $level }}</option>
                                @endforeach
                            </select>

                            @error('levels')
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