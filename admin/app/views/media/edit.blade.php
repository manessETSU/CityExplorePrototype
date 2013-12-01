@extends('layouts.scaffold')

@section('main')

<h1>Edit Medium</h1>
{{ Form::model($medium, array('method' => 'PATCH', 'route' => array('media.update', $medium->id))) }}
	<ul>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>

        <li>
            {{ Form::label('altText', 'AltText:') }}
            {{ Form::text('altText') }}
        </li>

        <li>
            {{ Form::label('uri', 'Uri:') }}
            {{ Form::text('uri') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('media.show', 'Cancel', $medium->id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
