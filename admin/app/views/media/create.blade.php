@extends('layouts.scaffold')

@section('main')

<h1>Create Medium</h1>

{{ Form::open(array('route' => 'media.store')) }}
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


