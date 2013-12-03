@extends('layouts.scaffold')

@section('main')

<h1>Create POI</h1>

{{ Form::open(array('route' => 'pois.store')) }}
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
			{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop


