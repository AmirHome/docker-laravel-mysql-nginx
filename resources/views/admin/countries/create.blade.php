<div class="modal fade" id="create-countries" tabindex="-1" role="dialog"  aria-hidden="true" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="margin-top:20vh;">
        <form method="POST" action="{{ route("admin.countries.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="card-header">Create Country</div>
            <div class="row">
            <div class="col-md-12">
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.country.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Name..." type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.country.fields.name_helper') }}</span>
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-group">
                <label class="required" for="short_code">{{ trans('cruds.country.fields.short_code') }}</label>
                <input class="form-control {{ $errors->has('short_code') ? 'is-invalid' : '' }}" type="text" placeholder="Short Code..." name="short_code" id="short_code" value="{{ old('short_code', '') }}" required>
                @if($errors->has('short_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('short_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.country.fields.short_code_helper') }}</span>
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-group">
                <label class="required" for="code_inc">{{ trans('cruds.country.fields.code_inc') }}</label>
                <input class="form-control {{ $errors->has('code_inc') ? 'is-invalid' : '' }}" type="number" placeholder="Code Inc..." name="code_inc" id="code_inc" value="{{ old('code_inc', '0') }}" step="1" required>
                @if($errors->has('code_inc'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code_inc') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.country.fields.code_inc_helper') }}</span>
            </div>
            </div>
            </div>
            <div class="row justify-content-end">
                    <div class="form-group">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal" aria-label="Close">
                            {{ trans('global.cancel') }}
                        </button>
                    </div>
                    <div class="form-group ">
                        <button class="btn btn-danger" type="submit">{{ trans('global.save') }}</button>
                    </div>
                </div>
        </form>
    </div>
</div>
</div>