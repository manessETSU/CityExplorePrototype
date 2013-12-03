@extends('layouts.scaffold')

@section('main')

<h1>Edit POI</h1>
{{ Form::model($poi, array('method' => 'PATCH', 'route' => array('pois.update', $poi->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::text('description') }}
        </li>

        <li>
            {{ Form::label('lat', 'Lat:') }}
            {{ Form::text('lat') }}
        </li>

        <li>
            {{ Form::label('lon', 'Lon:') }}
            {{ Form::text('lon') }}
        </li>

        <li>
            {{ Form::label('media', 'Media:') }}
            {{ Form::checkbox('media') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('pois.show', 'Cancel', $poi->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
