@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.room.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.rooms.update", [$room->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.room.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $room->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.name_helper') }}</span>
            </div>
           
            <div class="form-group">
                <label for="unit">{{ trans('cruds.room.fields.unit') }}</label>
                <input class="form-control {{ $errors->has('unit') ? 'is-invalid' : '' }}" type="number" name="unit" id="unit" value="{{ old('unit', $room->unit) }}">
                @if($errors->has('capacity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('unit') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.unit_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="capacity">{{ trans('cruds.room.fields.capacity') }}</label>
                <input class="form-control {{ $errors->has('capacity') ? 'is-invalid' : '' }}" type="number" name="capacity" id="capacity" value="{{ old('capacity', $room->capacity) }}">
                @if($errors->has('capacity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('capacity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.capacity_helper') }}</span>
            </div>

        
            <div class="form-group">
                <label for="hourly_rate">{{ trans('cruds.room.fields.hourly_rate') }}</label>
                <input class="form-control {{ $errors->has('hourly_rate') ? 'is-invalid' : '' }}" type="number" name="hourly_rate" id="hourly_rate" value="{{ old('hourly_rate', $room->hourly_rate) }}">
                @if($errors->has('hourly_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hourly_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.hourly_rate_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="resident_rate">{{ trans('cruds.room.fields.resident_rate') }}</label>
                <input class="form-control {{ $errors->has('resident_rate') ? 'is-invalid' : '' }}" type="number" name="resident_rate" id="resident_rate" value="{{ old('resident_rate', $room->resident_rate) }}" >
                @if($errors->has('resident_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('resident_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.resident_rate_helper') }}</span>
            </div>
           
           
            <div class="form-group">
                <label for="non_resident_rate">{{ trans('cruds.room.fields.non_resident_rate') }}</label>
                <input class="form-control {{ $errors->has('non_resident_rate') ? 'is-invalid' : '' }}" type="number" name="non_resident_rate" id="non_resident_rate" value="{{ old('non_resident_rate', $room->non_resident_rate) }}" >
                @if($errors->has('non_resident_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('non_resident_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.non_resident_rate_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="room_type">{{ trans('cruds.room.fields.room_type') }}</label>
                 <input class="form-control {{ $errors->has('room_type') ? 'is-invalid' : '' }}" type="text" name="room_type" id="room_type" value="{{ old('room_type', $room->room_type) }}">
                @if($errors->has('room_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('room_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.room_type_helper') }}</span>
            </div>


            <div class="form-group">
                <label for="description">{{ trans('cruds.room.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $room->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.description_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="destination_id">{{ trans('cruds.room.fields.destination_id') }}</label>
                <input class="form-control {{ $errors->has('destination_id') ? 'is-invalid' : '' }}" type="number" name="destination_id" id="destination_id" value="{{ old('destination_id', $room->destination_id) }}" >
                @if($errors->has('destination_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('destination_id') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.destination_id_helper') }}</span>
            </div>

            <div class="form-group">
                <label for="image">{{ trans('cruds.room.fields.image') }}</label>
                 <input class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" type="image" name="room_type" id="image" value="{{ old('image', $room->image) }}">
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.image_helper') }}</span>
            </div>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection