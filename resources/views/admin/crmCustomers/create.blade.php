@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.crmCustomer.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.crm-customers.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-md-4">
            <div class="form-group">
                <label class="required" for="first_name">{{ trans('cruds.crmCustomer.fields.first_name') }}</label>
                <input class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" placeholder="Enter Name.." type="text" name="first_name" id="first_name" value="{{ old('first_name', '') }}" required>
                @if($errors->has('first_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('first_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.first_name_helper') }}</span>
            </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
                <label for="last_name">{{ trans('cruds.crmCustomer.fields.last_name') }}</label>
                <input class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}"  placeholder="Enter Last name.."  type="text" name="last_name" id="last_name" value="{{ old('last_name', '') }}">
                @if($errors->has('last_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('last_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.last_name_helper') }}</span>
            </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
                <label class="required" for="status_id">{{ trans('cruds.crmCustomer.fields.status') }}</label>
                <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status_id" id="status_id" required>
                    @foreach($statuses as $id => $entry)
                        <option value="{{ $id }}" {{ old('status_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.status_helper') }}</span>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-4">
            <div class="form-group">
                <label for="email">{{ trans('cruds.crmCustomer.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Enter Email.."  type="text" name="email" id="email" value="{{ old('email', '') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.email_helper') }}</span>
            </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
                <label for="phone">{{ trans('cruds.crmCustomer.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" placeholder="Enter Phone.."  type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.phone_helper') }}</span>
            </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
                <label for="address">{{ trans('cruds.crmCustomer.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" placeholder="Enter Adress.." type="text" name="address" id="address" value="{{ old('address', '') }}">
                @if($errors->has('address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.address_helper') }}</span>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-4">
            <div class="form-group">
                <label for="skype">{{ trans('cruds.crmCustomer.fields.skype') }}</label>
                <input class="form-control {{ $errors->has('skype') ? 'is-invalid' : '' }}" placeholder="Enter Skype.." type="text" name="skype" id="skype" value="{{ old('skype', '') }}">
                @if($errors->has('skype'))
                    <div class="invalid-feedback">
                        {{ $errors->first('skype') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.skype_helper') }}</span>
            </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
                <label for="website">{{ trans('cruds.crmCustomer.fields.website') }}</label>
                <input class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}" type="text" placeholder="Enter Website.." name="website" id="website" value="{{ old('website', '') }}">
                @if($errors->has('website'))
                    <div class="invalid-feedback">
                        {{ $errors->first('website') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.website_helper') }}</span>
            </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
                <label for="birthday">{{ trans('cruds.crmCustomer.fields.birthday') }}</label>
                <input class="form-control date {{ $errors->has('birthday') ? 'is-invalid' : '' }}" type="text" name="birthday" id="birthday" value="{{ old('birthday') }}">
                @if($errors->has('birthday'))
                    <div class="invalid-feedback">
                        {{ $errors->first('birthday') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.birthday_helper') }}</span>
            </div>
            </div>
            </div>
            <div class="row">

            <div class="col-md-4">

            <div class="form-group">
                <label class="required" for="city_id">{{ trans('cruds.crmCustomer.fields.city') }}</label>
                <select class="form-control select2 {{ $errors->has('city') ? 'is-invalid' : '' }}" name="city_id" id="city_id" required>
                    @foreach($cities as $id => $entry)
                        <option value="{{ $id }}" {{ old('city_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('city'))
                    <div class="invalid-feedback">
                        {{ $errors->first('city') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.city_helper') }}</span>
            </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
                <label class="required" for="campaign_id">{{ trans('cruds.crmCustomer.fields.campaign') }}</label>
                <select class="form-control select2 {{ $errors->has('campaign') ? 'is-invalid' : '' }}" name="campaign_id" id="campaign_id" required>
                    @foreach($campaigns as $id => $entry)
                        <option value="{{ $id }}" {{ old('campaign_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('campaign'))
                    <div class="invalid-feedback">
                        {{ $errors->first('campaign') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.campaign_helper') }}</span>
            </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
                <label class="required" for="user_id">{{ trans('cruds.crmCustomer.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id" required>
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.user_helper') }}</span>
            </div>
            </div>
            </div>
            <div class="row">

<div class="col-md-12">
            <div class="form-group">
                <label for="description">{{ trans('cruds.crmCustomer.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" placeholder="Enter Description.." name="description" id="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.crmCustomer.fields.description_helper') }}</span>
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



@endsection