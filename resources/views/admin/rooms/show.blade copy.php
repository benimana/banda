@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.room.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.rooms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.room.fields.id') }}
                        </th>
                        <td>
                            {{ $room->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.room.fields.name') }}
                        </th>
                        <td>
                            {{ $room->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.room.fields.capacity') }}
                        </th>
                        <td>
                            {{ $room->capacity }}
                        </td>
                    </tr>
 
 

                    <tr>
                        <th>
                            {{ trans('cruds.room.fields.unit') }}
                        </th>
                        <td>
                            {{ $room->unit }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.room.fields.destination_id') }}
                        </th>
                        <td>
                            {{ $room->destination_id }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.room.fields.hourly_rate') }}
                        </th>
                        <td>
                            {{ $room->hourly_rate }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.room.fields.resident_rate') }}
                        </th>
                        <td>
                            {{ $room->resident_rate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.room.fields.non_resident_rate') }}
                        </th>
                        <td>
                            {{ $room->non_resident_rate }}
                        </td>
                    </tr>
                
                    <tr>
                        <th>
                            {{ trans('cruds.room.fields.non_resident_rate') }}
                        </th>
                        <td>
                            {{ $room->non_resident_rate }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.room.fields.room_type') }}
                        </th>
                        <td>
                            {{ $room->room_type }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.room.fields.description') }}
                        </th>
                        <td>
                            {{ $room->description }}
                        </td>
                    </tr>

                    <tr>
                        <th>
                            {{ trans('cruds.room.fields.image') }}
                        </th>
                        <td>
                            {{ $room->image }}
                        </td>
                    </tr>

                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.rooms.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection